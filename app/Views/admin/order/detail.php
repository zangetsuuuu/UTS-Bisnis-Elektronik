<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-16 md:mt-14">
            <div class="flex items-center space-x-2 md:space-x-3">
                <svg class="w-6 h-6 md:w-7 md:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 4.58579C5 5.17157 5 6.11438 5 8V17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V8C19 6.11438 19 5.17157 18.4142 4.58579C17.8284 4 16.8856 4 15 4H9C7.11438 4 6.17157 4 5.58579 4.58579ZM9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10H15C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8H9ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9ZM9 16C8.44772 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H9Z" fill="currentColor" />
                </svg>
                <h1 class="text-lg md:text-xl font-semibold tracking-wide">Detail Pesanan</h1>
            </div>
        </div>

        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-3 md:mt-4">
            <!-- Order start -->
            <div class="flex items-center justify-between mb-6">
                <div class="space-y-1">
                    <h1 class="text-2xl md:text-3xl font-semibold tracking-wide">Pesanan #111</h1>
                    <p class="text-xs text-gray-500 tracking-wide">08 April 2024 pukul 14.02 WIB</p>
                </div>
                <span class="px-2 md:px-3 inline-flex text-xs md:text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Selesai
                </span>
            </div>
            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <h2 class="text-base md:text-lg font-semibold tracking-wide mb-3">Ringkasan Pesanan</h2>
                <div class="space-y-2 mb-2">
                    <?php for ($i = 1; $i < 5; $i++) : ?>
                        <div class="flex justify-between items-center">
                            <p class="w-2/4 text-xs md:text-sm text-gray-500 text-left tracking-wide">Indomie Goreng &times;<?= $i ?></p>
                            <p class="w-1/4 text-xs md:text-sm text-gray-500 text-end tracking-wide">Rp. 4.000</p>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="flex justify-between items-center border-t pt-2">
                    <p class="text-base md:text-lg font-semibold tracking-wide">Total</p>
                    <p class="text-base md:text-lg font-semibold tracking-wide">Rp. 16.000</p>
                </div>
            </div>
            <!-- Order end -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-5">
                <!-- Customer info -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h2 class="text-base md:text-lg font-semibold tracking-wide mb-3">Pelanggan</h2>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-gray-500">
                            <svg class="w-3 h-3 md:w-4 md:h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="6" r="4" fill="currentColor" />
                                <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="currentColor" />
                            </svg>
                            <p class="text-xs md:text-sm font-semibold tracking-wide">Rafif Athallah</p>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-500">
                            <svg fill="currentColor" class="w-3 h-3 md:w-4 md:h-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z" />
                            </svg>
                            <p class="text-xs md:text-sm font-semibold tracking-wide">rafifathallah99@gmail.com</p>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-500">
                            <svg class="w-3 h-3 md:w-4 md:h-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" fill="none" width="20" height="20" />
                                <g>
                                    <path d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2 2 5.5.8 10.5 3.2 14.2l.2.3-.8 3 3-.8.3.2c1.3.7 2.7 1.1 4.1 1.1 1.5 0 3-.4 4.3-1.2 3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1-.4 0-.9.2-2.9-.6-1.7-.8-3.1-2.1-4.1-3.6-.6-.7-.9-1.6-1-2.5 0-.8.3-1.5.8-2 .2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4.2.5.7 1.7.7 1.8.1.1.1.3 0 .4.1.2 0 .4-.1.5-.1.1-.2.3-.3.4-.2.1-.3.3-.2.5.4.6.9 1.2 1.4 1.7.6.5 1.2.9 1.9 1.2.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3.1.3.1.7-.1 1z" fill="currentColor" />
                                </g>
                            </svg>
                            <p class="text-xs md:text-sm font-semibold tracking-wide">082117682591</p>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-500">
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-3 h-3 md:w-4 md:h-4" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                <path fill="currentColor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z" />
                            </svg>
                            <p class="text-xs md:text-sm font-semibold tracking-wide">Soul Society</p>
                        </div>
                    </div>
                </div>

                <!-- Payment method -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h2 class="text-base md:text-lg font-semibold tracking-wide mb-3">Metode Pembayaran</h2>
                    <p class="text-xs md:text-sm text-gray-500 font-semibold tracking-wide">QRIS</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>