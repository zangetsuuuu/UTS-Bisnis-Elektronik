<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\Customer\TransactionModel;
use App\Models\Customer\ProductModel;
use App\Models\Customer\CartModel;
use App\Models\Admin\CustomerModel;
use App\Models\Customer\OrderModel;
use App\Models\Customer\OrderItemModel;
use Midtrans\Config;
use Midtrans\Snap;
use CodeIgniter\I18n\Time;

class Payment extends BaseController
{
    protected $transactionModel;
    protected $cartModel;
    protected $productModel;
    protected $customerModel;
    protected $orderModel;
    protected $orderItemModel;

    public function __construct()
    {
        $this->transactionModel = new TransactionModel();
        $this->productModel = new ProductModel();
        $this->cartModel = new CartModel();
        $this->customerModel = new CustomerModel();
        $this->orderModel = new OrderModel();
        $this->orderItemModel = new OrderItemModel();
        Config::$serverKey = 'SB-Mid-server-pzDcwPlXshvIxjJMLEvZtQdx';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function checkout()
    {
        $customerId = session()->get('id');
        $cartItems = $this->cartModel->getCartByCustomerId($customerId);
        $customerData = $this->customerModel->getCustomerById($customerId);

        $cartDetails = [];
        foreach ($cartItems as $cartItem) {
            $product = $this->productModel->getProductById($cartItem['product_id']);
            $cartDetails[] = [
                'id' => $cartItem['id'],
                'customer_id' => $cartItem['customer_id'],
                'product_id' => $cartItem['product_id'],
                'product_name' => $product['name'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
                'total' => $cartItem['quantity'] * $cartItem['price']
            ];
        }

        $totalQuantity = 0;
        $totalPrice = 0;
        foreach ($cartDetails as $item) {
            $totalQuantity += $item['quantity'];
            $totalPrice += $item['total'];
        }

        // Params for Snap Token
        $transactionDetails = [
            'order_id' => rand(),
            'gross_amount' => $totalPrice,
            'created_at' => Time::now(),
        ];

        $itemDetails = [];
        foreach ($cartDetails as $item) {
            $itemDetails[] = [
                'id' => $item['product_id'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'name' => $item['product_name'],
            ];
        }

        $customerDetails = [
            'first_name' => $customerData['fullname'],
            'username' => $customerData['username'],
            'email' => $customerData['email'],
            'phone' => $customerData['phone_number'],
            'address' => $customerData['address']
        ];

        $snapToken = Snap::getSnapToken([
            'transaction_details' => $transactionDetails,
            'item_details' => $itemDetails,
            'customer_details' => $customerDetails
        ]);

        $data = [
            'title' => 'Checkout',
            'cart' => $cartDetails,
            'total_quantity' => $totalQuantity,
            'total_price' => $totalPrice,
            'transaction_details' => $transactionDetails,
            'snapToken' => $snapToken
        ];

        return view('customer/checkout', $data);
    }


    public function success()
    {
        $data = [
            'title' => 'Pembayaran Berhasil!',
        ];

        return view('customer/snap/success', $data);
    }

    public function failed()
    {
        $data = [
            'title' => 'Pembayaran Gagal!',
        ];

        return view('customer/snap/failed', $data);
    }

    public function saveTransaction()
    {
        $transaction = json_decode(file_get_contents('php://input'), true);

        $customerId = session()->get('id');

        $data = [
            'midtrans_transaction_id' => $transaction['transaction_id'],
            'midtrans_order_id' => $transaction['order_id'],
            'status' => $status = $transaction['transaction_status'],
            'amount' => $amount = $transaction['gross_amount'],
            'payment_type' => $transaction['payment_type'],
            'transaction_time' => $transaction['transaction_time'],
            'fraud_status' => $transaction['fraud_status']
        ];

        $saveTransaction = $this->transactionModel->save($data);

        if ($saveTransaction && $status == 'settlement') {
            $response = [
                'success' => true
            ];

            $orderData = [
                'reference' => uniqid(),
                'customer_id' => $customerId,
                'transaction_id' => $this->transactionModel->getInsertID(),
                'total_price' => $amount,
                'created_at' => Time::now(),
                'status' => 'menunggu diproses'
            ];

            $this->orderModel->save($orderData);

            $orderItems = $this->cartModel->getCartByCustomerId($customerId);

            foreach ($orderItems as $orderItem) {
                $orderItemData = [
                    'order_id' => $this->orderModel->getInsertID(),
                    'product_id' => $orderItem['product_id'],
                    'quantity' => $orderItem['quantity'],
                    'price' => $orderItem['price']
                ];

                $this->orderItemModel->save($orderItemData);
            }

            $this->cartModel->where('customer_id', $customerId)->delete();
        } else {
            $response = [
                'success' => false
            ];
        }

        return json_encode($response);
    }
}
