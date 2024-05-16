<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-4 mt-16 bg-white rounded-lg shadow-sm md:mt-14">
            <div class="flex items-center space-x-2 md:space-x-3">
                <svg class="w-6 h-6 md:w-7 md:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.08416 2.7512C2.22155 2.36044 2.6497 2.15503 3.04047 2.29242L3.34187 2.39838C3.95839 2.61511 4.48203 2.79919 4.89411 3.00139C5.33474 3.21759 5.71259 3.48393 5.99677 3.89979C6.27875 4.31243 6.39517 4.76515 6.4489 5.26153C6.47295 5.48373 6.48564 5.72967 6.49233 6H17.1305C18.8155 6 20.3323 6 20.7762 6.57708C21.2202 7.15417 21.0466 8.02369 20.6995 9.76275L20.1997 12.1875C19.8846 13.7164 19.727 14.4808 19.1753 14.9304C18.6236 15.38 17.8431 15.38 16.2821 15.38H10.9792C8.19028 15.38 6.79583 15.38 5.92943 14.4662C5.06302 13.5523 4.99979 12.5816 4.99979 9.64L4.99979 7.03832C4.99979 6.29837 4.99877 5.80316 4.95761 5.42295C4.91828 5.0596 4.84858 4.87818 4.75832 4.74609C4.67026 4.61723 4.53659 4.4968 4.23336 4.34802C3.91052 4.18961 3.47177 4.03406 2.80416 3.79934L2.54295 3.7075C2.15218 3.57012 1.94678 3.14197 2.08416 2.7512Z" fill="currentColor" />
                    <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" fill="currentColor" />
                    <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" fill="currentColor" />
                </svg>
                <h1 class="text-lg font-semibold tracking-wide md:text-xl">Keranjang</h1>
            </div>
        </div>
        <div class="h-full p-4 mt-3 bg-white rounded-lg shadow-sm md:mt-4">
            <?php if (isset($flashMessages)) :
                foreach ($flashMessages as $key => $flashMessage) :
                    if ($flashMessage['message']) : ?>
                        <div id="<?= $flashMessage['id'] ?>" class="flex items-center p-3 mb-4 tracking-wide text-green-800 rounded-lg md:p-4 bg-green-50" role="alert">
                            <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                <?= $flashMessage['message'] ?>
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1 md:p-1.5 hover:bg-green-200 inline-flex items-center justify-center w-7 h-7 md:w-8 md:h-8 ease-in-out duration-200" data-dismiss-target="#<?= $flashMessage['id'] ?>" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-2 h-2 md:w-3 md:h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
            <?php endif;
                endforeach;
            endif; ?>

            <?php if (session()->getFlashdata('Stock Not Available')) : ?>
                <div id="alert-stock-not-available" class="flex items-center p-3 mb-4 tracking-wide text-yellow-800 rounded-lg md:p-4 bg-yellow-50" role="alert">
                    <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                        <?= session()->getFlashdata('Stock Not Available'); ?>
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1 md:p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center w-7 h-7 md:w-8 md:h-8 ease-in-out duration-200" data-dismiss-target="#alert-stock-not-available" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-2 h-2 md:w-3 md:h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            <?php endif; ?>

            <?php if (!empty($cart)) : ?>
                <form action="<?= base_url('checkout'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="overflow-x-auto rounded-md">
                        <table class="min-w-[40rem] md:min-w-full text-xs md:text-sm text-gray-500 tracking-wide divide-y divide-gray-200 border border-gray-200 text-left">
                            <thead class="text-xs uppercase bg-gray-100 text-myBlack">
                                <tr>
                                    <th scope="col" class="px-6 py-4 w-fit">
                                        Nama Produk
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-fit">
                                        Jumlah
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-fit">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-fit">
                                        Total Harga
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-fit">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php foreach ($cart as $item) : ?>
                                    <tr>
                                        <th scope="row" class="px-6 py-4 font-medium text-myBlack whitespace-nowrap">
                                            <?= $item['product_name']; ?>
                                        </th>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <?= $item['quantity']; ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <?= 'Rp. ' . number_format($item['price'], 0, ',', '.'); ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <?= 'Rp. ' . number_format($item['total'], 0, ',', '.'); ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center space-x-3">
                                                <button data-modal-target="edit-cart-item-modal#<?= $item['id']; ?>" data-modal-toggle="edit-cart-item-modal#<?= $item['id']; ?>" type="button" class="text-blue-700 duration-300 ease-in-out hover:text-blue-800">
                                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="currentColor" />
                                                    </svg>
                                                </button>
                                                <button data-modal-target="delete-cart-item-modal#<?= $item['id']; ?>" data-modal-toggle="delete-cart-item-modal#<?= $item['id']; ?>" type="button" class="font-semibold text-red-500 duration-200 ease-in-out hover:text-red-700">
                                                    <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="delete" class="icon glyph">
                                                        <path d="M17,4V5H15V4H9V5H7V4A2,2,0,0,1,9,2h6A2,2,0,0,1,17,4Z"></path>
                                                        <path d="M20,6H4A1,1,0,0,0,4,8H5V20a2,2,0,0,0,2,2H17a2,2,0,0,0,2-2V8h1a1,1,0,0,0,0-2Z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="font-semibold text-myBlack">
                                    <th scope="row" class="px-6 py-3 text-base">Total</th>
                                    <td name="total_quantity" class="px-6 py-4 whitespace-nowrap">
                                        <?= $total_quantity; ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"></td>
                                    <td name="total_price" class="px-6 py-4 whitespace-nowrap">
                                        <?= 'Rp. ' . number_format($total_price, 0, ',', '.'); ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button type="submit" class="flex items-center justify-center w-full mt-4 space-x-2 btn-primary">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04047 2.29242C2.6497 2.15503 2.22155 2.36044 2.08416 2.7512C1.94678 3.14197 2.15218 3.57012 2.54295 3.7075L2.80416 3.79934C3.47177 4.03406 3.91052 4.18961 4.23336 4.34802C4.53659 4.4968 4.67026 4.61723 4.75832 4.74609C4.84858 4.87818 4.91828 5.0596 4.95761 5.42295C4.99877 5.80316 4.99979 6.29837 4.99979 7.03832L4.99979 9.64C4.99979 12.5816 5.06302 13.5523 5.92943 14.4662C6.79583 15.38 8.19028 15.38 10.9792 15.38H16.2821C17.8431 15.38 18.6236 15.38 19.1753 14.9304C19.727 14.4808 19.8846 13.7164 20.1997 12.1875L20.6995 9.76275C21.0466 8.02369 21.2202 7.15417 20.7762 6.57708C20.3323 6 18.8155 6 17.1305 6H6.49233C6.48564 5.72967 6.47295 5.48373 6.4489 5.26153C6.39517 4.76515 6.27875 4.31243 5.99677 3.89979C5.71259 3.48393 5.33474 3.21759 4.89411 3.00139C4.48203 2.79919 3.95839 2.61511 3.34187 2.39838L3.04047 2.29242ZM15.5172 8.4569C15.8172 8.74256 15.8288 9.21729 15.5431 9.51724L12.686 12.5172C12.5444 12.6659 12.3481 12.75 12.1429 12.75C11.9376 12.75 11.7413 12.6659 11.5998 12.5172L10.4569 11.3172C10.1712 11.0173 10.1828 10.5426 10.4828 10.2569C10.7827 9.97123 11.2574 9.98281 11.5431 10.2828L12.1429 10.9125L14.4569 8.48276C14.7426 8.18281 15.2173 8.17123 15.5172 8.4569Z" fill="currentColor" />
                            <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" fill="currentColor" />
                            <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" fill="currentColor" />
                        </svg>
                        <span>Checkout</span>
                    </button>
                </form>
            <?php else : ?>
                <div class="flex flex-col items-center justify-center h-full space-y-3">
                    <svg class="w-12 h-12 md:w-14 md:h-14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04047 2.29242C2.6497 2.15503 2.22155 2.36044 2.08416 2.7512C1.94678 3.14197 2.15218 3.57012 2.54295 3.7075L2.80416 3.79934C3.47177 4.03406 3.91052 4.18961 4.23336 4.34802C4.53659 4.4968 4.67026 4.61723 4.75832 4.74609C4.84858 4.87818 4.91828 5.0596 4.95761 5.42295C4.99877 5.80316 4.99979 6.29837 4.99979 7.03832L4.99979 9.64C4.99979 12.5816 5.06302 13.5523 5.92943 14.4662C6.79583 15.38 8.19028 15.38 10.9792 15.38H16.2821C17.8431 15.38 18.6236 15.38 19.1753 14.9304C19.727 14.4808 19.8846 13.7164 20.1997 12.1875L20.6995 9.76275C21.0466 8.02369 21.2202 7.15417 20.7762 6.57708C20.3323 6 18.8155 6 17.1305 6H6.49233C6.48564 5.72967 6.47295 5.48373 6.4489 5.26153C6.39517 4.76515 6.27875 4.31243 5.99677 3.89979C5.71259 3.48393 5.33474 3.21759 4.89411 3.00139C4.48203 2.79919 3.95839 2.61511 3.34187 2.39838L3.04047 2.29242ZM10.9697 8.96967C11.2626 8.67678 11.7374 8.67678 12.0303 8.96967L13 9.93934L13.9697 8.96967C14.2626 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L14.0607 11L15.0303 11.9697C15.3232 12.2626 15.3232 12.7374 15.0303 13.0303C14.7374 13.3232 14.2626 13.3232 13.9697 13.0303L13 12.0607L12.0303 13.0303C11.7374 13.3232 11.2626 13.3232 10.9697 13.0303C10.6768 12.7374 10.6768 12.2626 10.9697 11.9697L11.9393 11L10.9697 10.0303C10.6768 9.73744 10.6768 9.26256 10.9697 8.96967Z" fill="currentColor" />
                        <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" fill="currentColor" />
                        <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" fill="currentColor" />
                    </svg>
                    <h3 class="text-base font-medium md:text-lg">Keranjang Kosong</h3>
                    <a href="<?= base_url('products'); ?>" class="btn-primary">Lihat Produk</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->include('layout/customer/edit_cart'); ?>

<?= $this->include('layout/customer/delete_cart'); ?>

<?= $this->endSection(); ?>