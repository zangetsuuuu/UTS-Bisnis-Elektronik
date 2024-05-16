<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-16 md:mt-14">
            <!-- Product Start -->
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
                    <h1 class="text-lg md:text-xl font-semibold tracking-wide">Produk</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="<?= base_url('admin/product/create'); ?>" class="text-myBlack hover:text-emerald-500 ease-in-out duration-200" data-tooltip-target="add-product-tooltip">
                        <svg class="w-7 h-7 md:w-8 md:h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 6V18M18 12H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <button data-modal-target="category-modal" data-modal-toggle="category-modal" class="text-myBlack hover:text-gray-500 ease-in-out duration-200">
                        <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.24 2H5.34C3.15 2 2 3.15 2 5.33V7.23C2 9.41 3.15 10.56 5.33 10.56H7.23C9.41 10.56 10.56 9.41 10.56 7.23V5.33C10.57 3.15 9.42 2 7.24 2Z" fill="currentColor" />
                            <path d="M18.6695 2H16.7695C14.5895 2 13.4395 3.15 13.4395 5.33V7.23C13.4395 9.41 14.5895 10.56 16.7695 10.56H18.6695C20.8495 10.56 21.9995 9.41 21.9995 7.23V5.33C21.9995 3.15 20.8495 2 18.6695 2Z" fill="currentColor" />
                            <path d="M18.6695 13.4297H16.7695C14.5895 13.4297 13.4395 14.5797 13.4395 16.7597V18.6597C13.4395 20.8397 14.5895 21.9897 16.7695 21.9897H18.6695C20.8495 21.9897 21.9995 20.8397 21.9995 18.6597V16.7597C21.9995 14.5797 20.8495 13.4297 18.6695 13.4297Z" fill="currentColor" />
                            <path d="M7.24 13.4297H5.34C3.15 13.4297 2 14.5797 2 16.7597V18.6597C2 20.8497 3.15 21.9997 5.33 21.9997H7.23C9.41 21.9997 10.56 20.8497 10.56 18.6697V16.7697C10.57 14.5797 9.42 13.4297 7.24 13.4297Z" fill="currentColor" />
                        </svg>
                    </button>
                    <button data-modal-target="search-modal" data-modal-toggle="search-modal" class="text-myBlack hover:text-gray-500 ease-in-out duration-200">
                        <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6725 16.6412L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div id="add-product-tooltip" role="tooltip" class="absolute z-50 invisible inline-block px-3 py-2 text-xs tracking-wide font-medium text-white transition-opacity duration-300 bg-myBlack rounded-lg shadow-sm opacity-0 tooltip group">
                    Tambah produk
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
        </div>

        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-3 md:mt-4">
            <?php if (isset($flashMessages)) :
                foreach ($flashMessages as $key => $flashMessage) :
                    if ($flashMessage['message']) : ?>
                        <div id="<?= $flashMessage['id'] ?>" class="flex items-center p-3 md:p-4 mb-4 text-green-800 tracking-wide rounded-lg bg-green-50" role="alert">
                            <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-xs md:text-sm font-medium tracking-wide">
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

            <?php if (isset($category) && $category !== '') : ?>
                <div class="flex items-center justify-between p-3 md:p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 mb-4">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="ms-3 text-xs md:text-sm font-medium tracking-wide">
                                Kategori produk: <?= ucfirst($category); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/products'); ?>" class="text-xs md:text-sm font-medium tracking-wide hover:underline">Reset</a>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('Product Search Info') && $category === '') : ?>
                <div class="flex items-center justify-between p-3 md:p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 mb-4">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="ms-3 text-xs md:text-sm font-medium tracking-wide">
                                <?= session()->getFlashdata('Product Search Info'); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/products'); ?>" class="text-xs md:text-sm font-medium tracking-wide hover:underline">Reset</a>
                </div>
            <?php elseif (session()->getFlashdata('Product Not Found') && $category === '') : ?>
                <div class="flex items-center justify-between p-3 md:p-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="ms-3 text-xs md:text-sm font-medium tracking-wide">
                                <?= session()->getFlashdata('Product Not Found'); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/products'); ?>" class="text-xs md:text-sm font-medium tracking-wide hover:underline">Kembali</a>
                </div>
            <?php endif; ?>

            <?php if (!empty($products)) : ?>
                <!-- Products start -->
                <div class="rounded-md overflow-x-auto">
                    <table class="min-w-[60rem] md:min-w-full text-sm text-left text-gray-500 tracking-wide divide-y divide-gray-200 border border-gray-200">
                        <thead class="text-xs text-myBlack uppercase bg-gray-100 text-center">
                            <tr>
                                <th scope="col" class="px-6 py-4 w-10">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Stok
                                </th>
                                <th scope="col" class="px-6 py-4 w-40">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-center">
                            <?php $i = 1; ?>
                            <?php foreach ($products as $data) : ?>
                                <tr class="hover:bg-gray-50 ease-in-out duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap font-bold text-myBlack"><?= $i; ?>.</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="h-24 md:h-28">
                                            <img class="w-full h-full object-contain" src="<?= $data['image']; ?>" alt="">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= $data['name']; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= $data['stock'] == 0 ? 'Habis' : $data['stock']; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap truncate max-w-10">
                                        Rp. <?= number_format($data['price'], 0, ',', '.'); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center justify-center space-x-3">
                                            <a href="<?= base_url("/admin/product/$data[slug]"); ?>" class="hover:text-myBlack ease-in-out duration-300">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75ZM12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                            <a href="<?= base_url("/admin/product/$data[slug]/edit"); ?>" class="text-emerald-500 hover:text-emerald-600 ease-in-out duration-300">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="currentColor" />
                                                </svg>
                                            </a>
                                            <button data-modal-target="delete-product-modal#<?= $data['id']; ?>" data-modal-toggle="delete-product-modal#<?= $data['id']; ?>" class="text-red-500 hover:text-red-600 ease-in-out duration-300">
                                                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="delete" class="icon glyph">
                                                    <path d="M17,4V5H15V4H9V5H7V4A2,2,0,0,1,9,2h6A2,2,0,0,1,17,4Z"></path>
                                                    <path d="M20,6H4A1,1,0,0,0,4,8H5V20a2,2,0,0,0,2,2H17a2,2,0,0,0,2-2V8h1a1,1,0,0,0,0-2Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Products end -->
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->include('layout/admin/product/delete'); ?>

<?= $this->include('layout/admin/product/category'); ?>

<?= $this->include('layout/admin/product/search'); ?>

<?= $this->endSection(); ?>