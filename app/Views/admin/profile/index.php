<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg p-4 mt-16 md:mt-14">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 md:space-x-3">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="6" r="4" fill="currentColor" />
                        <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="currentColor" />
                    </svg>
                    <h1 class="text-lg md:text-xl font-semibold tracking-wide">Profil</h1>
                </div>
                <a href="<?= base_url("admin/profile/edit"); ?>" class="flex items-center space-x-2 text-xs md:text-sm font-semibold tracking-wide text-emerald-500 hover:underline">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="currentColor" />
                    </svg>
                    <span>Edit profil</span>
                </a>
            </div>
        </div>

        <div class="h-full bg-white rounded-lg p-4 mt-3 md:mt-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-5">
                <div class="relative rounded-full w-48 h-48 md:w-56 md:h-56 overflow-hidden border mx-auto">
                    <img src="<?= base_url('img/bg-1.jpg'); ?>" class="object-cover w-full h-full" alt="">
                    <div class="flex items-center justify-center absolute inset-0 cursor-pointer opacity-0 hover:opacity-100 bg-myBlack/50 ease-in-out duration-300">
                        <button type="button" data-modal-target="profile-image-modal" data-modal-toggle="profile-image-modal" data-tooltip-target="profile-image-tooltip" class="text-white hover:text-gray-300 p-3 rounded-full ease-in-out duration-300">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 9V5.6C4 5.03995 4 4.75992 4.10899 4.54601C4.20487 4.35785 4.35785 4.20487 4.54601 4.109C4.75992 4 5.03995 4 5.6 4L9 4M4 15V18.4C4 18.9601 4 19.2401 4.10899 19.454C4.20487 19.6422 4.35785 19.7951 4.54601 19.891C4.75992 20 5.03995 20 5.6 20L9 20M15 4H18.4C18.9601 4 19.2401 4 19.454 4.10899C19.6422 4.20487 19.7951 4.35785 19.891 4.54601C20 4.75992 20 5.03995 20 5.6V9M20 15V18.4C20 18.9601 20 19.2401 19.891 19.454C19.7951 19.6422 19.6422 19.7951 19.454 19.891C19.2401 20 18.9601 20 18.4 20H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div id="profile-image-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs tracking-wide font-medium text-white transition-opacity duration-300 bg-myBlack rounded-lg shadow-sm opacity-0 tooltip group">
                            Lihat Foto
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 space-y-6">
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Nama Lengkap</p>
                        <h1 class="text-lg font-semibold tracking-wide">Rafif Athallah</h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Email</p>
                        <h1 class="text-lg font-semibold tracking-wide">rafifathallah99@gmail.com</h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">No. HP</p>
                        <h1 class="text-lg font-semibold tracking-wide">082110111111</h1>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase">Role</p>
                        <h1 class="text-lg font-semibold tracking-wide">Admin</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/admin/profile/avatar'); ?>

<?= $this->endSection(); ?>