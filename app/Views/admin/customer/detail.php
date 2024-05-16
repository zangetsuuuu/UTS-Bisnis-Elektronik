<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-16 md:mt-14">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 md:space-x-3">
                    <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75ZM12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7Z" fill="currentColor" />
                    </svg>
                    <h1 class="text-lg md:text-xl font-semibold tracking-wide">Detail Pelanggan</h1>
                </div>
                <a href="<?= base_url('admin/customers'); ?>" class="flex items-center space-x-2 text-xs md:text-sm tracking-wide text-gray-500 hover:underline">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <div>Kembali</div>
                </a>
            </div>
        </div>

        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-3 md:mt-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-5">
                <div class="relative rounded-full w-56 h-56 overflow-hidden border mx-auto">
                    <img src="<?= base_url('img/bg-1.jpg'); ?>" class="object-cover w-full h-full" alt="">
                </div>
                <div class="col-span-2 space-y-6">
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Nama Lengkap</p>
                        <h1 class="text-lg font-semibold tracking-wide"><?= $customer['fullname']; ?></h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Username</p>
                        <h1 class="text-lg font-semibold tracking-wide">@<?= $customer['username']; ?></h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Email</p>
                        <h1 class="text-lg font-semibold tracking-wide"><?= $customer['email']; ?></h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">No. HP</p>
                        <h1 class="text-lg font-semibold tracking-wide"><?= $customer['phone_number']; ?></h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Alamat</p>
                        <h1 class="text-lg font-semibold tracking-wide"><?= $customer['address']; ?></h1>
                    </div>
                    <hr class="my-4">
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Total Pesanan</p>
                        <h1 class="text-lg font-semibold tracking-wide">0</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>