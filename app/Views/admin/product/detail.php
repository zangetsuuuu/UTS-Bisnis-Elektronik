<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-16 md:mt-14">
            <div class="flex items-center space-x-2 md:space-x-3">
                <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75ZM12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7Z" fill="currentColor" />
                </svg>
                <h1 class="text-lg md:text-xl font-semibold tracking-wide">Detail Produk</h1>
            </div>
        </div>

        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-3 md:mt-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="w-full h-64 rounded-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//93/MTA-2583228/indomie_indomie-goreng-mie-instan--85g--_full02.jpg">
                </div>
                <div class="relative col-span-1 md:col-span-2 p-3 md:p-4">
                    <div class="space-y-1.5 mb-2.5 md:mb-3.5">
                        <div class="uppercase tracking-wide text-[0.65rem] md:text-xs text-emerald-500 font-semibold">
                            <?= $product['category']; ?>
                        </div>
                        <h2 class="text-myBlack text-lg md:text-xl font-semibold tracking-wide">
                            <?= $product['name']; ?>
                        </h2>
                        <div>
                            <span class="bg-gray-100 text-gray-500 text-[0.65rem] md:text-xs font-medium tracking-wide px-2.5 py-0.5 rounded">
                                Stok: <?= $product['stock']; ?>
                            </span>
                        </div>
                    </div>
                    <p class="text-xs md:text-sm text-gray-500 tracking-wide leading-relaxed">
                        <?= $product['description']; ?>
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center justify-between">
                            <div class="text-myBlack text-xl font-semibold tracking-wide">
                                Rp. <?= number_format($product['price'], 0, ',', '.'); ?>
                            </div>
                            <a href="<?= base_url("admin/product/$product[slug]/edit"); ?>" class="btn-admin flex items-center space-x-2">
                                <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="currentColor" />
                                </svg>
                                <div>Edit Produk</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>