<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-4 mt-16 bg-white rounded-lg shadow-sm md:mt-14">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 md:space-x-3">
                    <svg class="w-6 h-6 md:w-7 md:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 4.58579C5 5.17157 5 6.11438 5 8V17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V8C19 6.11438 19 5.17157 18.4142 4.58579C17.8284 4 16.8856 4 15 4H9C7.11438 4 6.17157 4 5.58579 4.58579ZM9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10H15C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8H9ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9ZM9 16C8.44772 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H9Z" fill="currentColor" />
                    </svg>
                    <h1 class="text-lg font-semibold tracking-wide md:text-xl">Detail Pesanan</h1>
                    <div>|</div>
                    <p class="text-xs tracking-wide text-gray-500"><?= date('d M Y, H:i', strtotime($order['created_at'])); ?> WIB</p>
                </div>
                <span class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full md:px-3 md:text-sm <?= $color; ?>">
                    <?= ucfirst($order['status']); ?>
                </span>
            </div>
        </div>

        <div class="h-full p-4 mt-3 bg-white rounded-lg shadow-sm md:mt-4">
            <!-- Order start -->
            <div class="p-4 mb-4 rounded-lg bg-gray-50">
                <h2 class="mb-3 text-base font-semibold tracking-wide md:text-lg">Ringkasan Pesanan</h2>
                <div class="mb-2 space-y-2">
                    <?php $i = 0; foreach ($order_items as $order_item) : ?>
                        <div class="flex items-center justify-between">
                            <p class="w-2/4 text-xs tracking-wide text-left text-gray-500 md:text-sm"><?= $items[$i++] ?> &times;<?= $order_item['quantity']; ?></p>
                            <p class="w-1/4 text-xs tracking-wide text-gray-500 md:text-sm text-end">Rp. <?= number_format($order_item['price'] * $order_item['quantity'], 0, ',', '.'); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex items-center justify-between pt-2 border-t">
                    <p class="text-base font-semibold tracking-wide md:text-lg">Total</p>
                    <p class="text-base font-semibold tracking-wide md:text-lg">Rp. <?= number_format($order['total_price'], 0, ',', '.'); ?></p>
                </div>
            </div>
            <!-- Order end -->
            <div class="p-4 mb-4 rounded-lg bg-gray-50">
                <h2 class="mb-3 text-base font-semibold tracking-wide md:text-lg">Metode Pembayaran</h2>
                <p class="text-xs font-semibold tracking-wide text-gray-500 md:text-sm"><?= strtoupper($payment_type); ?></p>
            </div>
            <div class="flex flex-wrap items-center justify-center space-x-0 space-y-3 md:flex-nowrap md:space-y-0 md:space-x-3">
                <button type="submit" class="w-full btn-primary md:w-3/4">Tandai Pesanan Selesai</button>
                <a href="https://wa.me/6282110967112" class="w-full btn-alternative md:w-1/4">Kontak Admin</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>