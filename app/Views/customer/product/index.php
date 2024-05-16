<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-4 mt-16 bg-white rounded-lg shadow-sm md:mt-14">
            <!-- Carousel Start -->
            <div id="controls-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative border overflow-hidden rounded-lg h-[12rem] md:h-80">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://onlineprint.co.id/blog/wp-content/uploads/2023/04/banner-food-800x445.jpg" class="absolute object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/gradient.jpg" class="absolute object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/bg-1.jpg" class="absolute object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/gradient.jpg" class="absolute object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 duration-300 ease-in-out rounded-full bg-myBlack/20 group-hover:bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 duration-300 ease-in-out rounded-full bg-myBlack/20 group-hover:bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Product Start -->
        <div class="h-full p-4 mt-3 bg-white rounded-lg shadow-sm md:mt-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6 md:w-7 md:h-7" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon" fill="currentColor" transform="translate(64.000000, 34.346667)">
                                <path d="M192,7.10542736e-15 L384,110.851252 L384,332.553755 L192,443.405007 L1.42108547e-14,332.553755 L1.42108547e-14,110.851252 L192,7.10542736e-15 Z M127.999,206.918 L128,357.189 L170.666667,381.824 L170.666667,231.552 L127.999,206.918 Z M42.6666667,157.653333 L42.6666667,307.920144 L85.333,332.555 L85.333,182.286 L42.6666667,157.653333 Z M275.991,97.759 L150.413,170.595 L192,194.605531 L317.866667,121.936377 L275.991,97.759 Z M192,49.267223 L66.1333333,121.936377 L107.795,145.989 L233.374,73.154 L192,49.267223 Z" id="Combined-Shape">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <h1 class="text-lg font-semibold tracking-wide md:text-xl">Produk</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <button data-modal-target="category-modal" data-modal-toggle="category-modal" class="duration-300 ease-in-out text-myBlack hover:text-gray-500">
                        <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.24 2H5.34C3.15 2 2 3.15 2 5.33V7.23C2 9.41 3.15 10.56 5.33 10.56H7.23C9.41 10.56 10.56 9.41 10.56 7.23V5.33C10.57 3.15 9.42 2 7.24 2Z" fill="currentColor" />
                            <path d="M18.6695 2H16.7695C14.5895 2 13.4395 3.15 13.4395 5.33V7.23C13.4395 9.41 14.5895 10.56 16.7695 10.56H18.6695C20.8495 10.56 21.9995 9.41 21.9995 7.23V5.33C21.9995 3.15 20.8495 2 18.6695 2Z" fill="currentColor" />
                            <path d="M18.6695 13.4297H16.7695C14.5895 13.4297 13.4395 14.5797 13.4395 16.7597V18.6597C13.4395 20.8397 14.5895 21.9897 16.7695 21.9897H18.6695C20.8495 21.9897 21.9995 20.8397 21.9995 18.6597V16.7597C21.9995 14.5797 20.8495 13.4297 18.6695 13.4297Z" fill="currentColor" />
                            <path d="M7.24 13.4297H5.34C3.15 13.4297 2 14.5797 2 16.7597V18.6597C2 20.8497 3.15 21.9997 5.33 21.9997H7.23C9.41 21.9997 10.56 20.8497 10.56 18.6697V16.7697C10.57 14.5797 9.42 13.4297 7.24 13.4297Z" fill="currentColor" />
                        </svg>
                    </button>
                    <button data-modal-target="search-modal" data-modal-toggle="search-modal" class="duration-300 ease-in-out text-myBlack hover:text-gray-500">
                        <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6725 16.6412L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="h-full p-4 mt-3 bg-white rounded-lg shadow-sm md:mt-4">
            <?php if (session()->getFlashdata('Add Success')) : ?>
                <div id="alert-add-success" class="flex items-center p-3 mb-4 tracking-wide text-blue-800 rounded-lg md:p-4 bg-blue-50" role="alert">
                    <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                        <?= session()->getFlashdata('Add Success'); ?>
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 md:p-1.5 hover:bg-blue-200 inline-flex items-center justify-center w-7 h-7 md:w-8 md:h-8 ease-in-out duration-200" data-dismiss-target="#alert-add-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-2 h-2 md:w-3 md:h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            <?php elseif (session()->getFlashdata('Stock Not Available')) : ?>
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

            <?php if (isset($category) && $category !== '') : ?>
                <div class="flex items-center justify-between p-3 mb-4 text-sm text-gray-800 border border-gray-300 rounded-lg md:p-4 bg-gray-50">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                Kategori produk: <?= ucfirst($category); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('products'); ?>" class="text-xs font-medium tracking-wide md:text-sm hover:underline">Reset</a>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('Product Search Info')) : ?>
                <div class="flex items-center justify-between p-3 mb-4 text-sm text-gray-800 border border-gray-300 rounded-lg md:p-4 bg-gray-50">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                <?= session()->getFlashdata('Product Search Info'); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('products'); ?>" class="text-xs font-medium tracking-wide md:text-sm hover:underline">Reset</a>
                </div>
            <?php elseif (session()->getFlashdata('Product Not Found')) : ?>
                <div class="flex items-center justify-between p-3 text-sm text-yellow-800 border border-yellow-300 rounded-lg md:p-4 bg-yellow-50">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                <?= session()->getFlashdata('Product Not Found'); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('products'); ?>" class="text-xs font-medium tracking-wide md:text-sm hover:underline">Kembali</a>
                </div>
            <?php endif; ?>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-4 md:gap-5">
                <?php foreach ($products as $data) : ?>
                    <div class="max-h-[20rem] bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg ease-in-out duration-300 group">
                        <form action="" method="">
                            <div class="relative h-24 md:h-28">
                                <a href="<?= base_url("product/$data[slug]"); ?>">
                                    <img class="object-contain w-full h-full" src="<?= $data['image']; ?>" alt="">
                                    <div class="absolute inset-0 flex items-center justify-center text-sm font-semibold tracking-wide text-white duration-300 ease-in-out opacity-0 hover:opacity-100 bg-myBlack/20 backdrop-filter backdrop-blur-md">
                                        Klik untuk lihat detail
                                    </div>
                                </a>
                            </div>
                            <div class="p-3">
                                <div class="mb-4">
                                    <div class="mb-1 text-sm font-semibold tracking-wide truncate md:text-base text-myBlack"><?= $data['name']; ?></div>
                                    <span class="bg-gray-100 text-gray-500 text-[0.65rem] md:text-xs font-medium tracking-wide px-2.5 py-0.5 rounded">Stok: <?= ($data['stock'] == 0) ? 'Habis' : number_format($data['stock'], 0, ',', '.') ?></span>
                                </div>
                                <div class="flex items-center justify-between rounded-md">
                                    <h1 class="text-sm font-semibold tracking-wide md:text-base">
                                        Rp. <?= number_format($data['price'], 0, ',', '.'); ?>
                                    </h1>
                                    <button data-tooltip-target="cart-tooltip#<?= $data['id']; ?>" data-modal-target="add-to-cart-modal#<?= $data['id']; ?>" data-modal-toggle="add-to-cart-modal#<?= $data['id']; ?>" type="button" class="icon-primary" <?= ($data['stock'] == 0) ? 'disabled' : '' ?>>
                                        <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04047 2.29242C2.6497 2.15503 2.22155 2.36044 2.08416 2.7512C1.94678 3.14197 2.15218 3.57012 2.54295 3.7075L2.80416 3.79934C3.47177 4.03406 3.91052 4.18961 4.23336 4.34802C4.53659 4.4968 4.67026 4.61723 4.75832 4.74609C4.84858 4.87818 4.91828 5.0596 4.95761 5.42295C4.99877 5.80316 4.99979 6.29837 4.99979 7.03832L4.99979 9.64C4.99979 12.5816 5.06302 13.5523 5.92943 14.4662C6.79583 15.38 8.19028 15.38 10.9792 15.38H16.2821C17.8431 15.38 18.6236 15.38 19.1753 14.9304C19.727 14.4808 19.8846 13.7164 20.1997 12.1875L20.6995 9.76275C21.0466 8.02369 21.2202 7.15417 20.7762 6.57708C20.3323 6 18.8155 6 17.1305 6H6.49233C6.48564 5.72967 6.47295 5.48373 6.4489 5.26153C6.39517 4.76515 6.27875 4.31243 5.99677 3.89979C5.71259 3.48393 5.33474 3.21759 4.89411 3.00139C4.48203 2.79919 3.95839 2.61511 3.34187 2.39838L3.04047 2.29242ZM13 8.25C13.4142 8.25 13.75 8.58579 13.75 9V10.25H15C15.4142 10.25 15.75 10.5858 15.75 11C15.75 11.4142 15.4142 11.75 15 11.75H13.75V13C13.75 13.4142 13.4142 13.75 13 13.75C12.5858 13.75 12.25 13.4142 12.25 13V11.75H11C10.5858 11.75 10.25 11.4142 10.25 11C10.25 10.5858 10.5858 10.25 11 10.25H12.25V9C12.25 8.58579 12.5858 8.25 13 8.25Z" fill="currentColor" />
                                            <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" fill="currentColor" />
                                            <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="cart-tooltip#<?= $data['id']; ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium tracking-wide text-white transition-opacity duration-300 rounded-lg shadow-sm opacity-0 bg-myBlack tooltip group">
                            <?= ($data['stock'] == 0) ? 'Habis' : 'Tambahkan ke keranjang' ?>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Product End -->
    </div>
</div>

<?= $this->include('layout/customer/product/add_to_cart'); ?>

<?= $this->include('layout/customer/product/category'); ?>

<?= $this->include('layout/customer/product/search'); ?>

<?= $this->endSection(); ?>