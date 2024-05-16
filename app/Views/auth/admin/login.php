<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen flex items-center justify-center">
    <div class="container px-4 py-16 md:py-0 md:px-0">
        <div class="bg-white p-8 rounded-xl shadow-xl max-w-lg w-full mx-auto">
            <div class="flex justify-center mb-6">
                <span class="inline-block bg-gray-100 rounded-full p-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8L16 12M16 12L12 16M16 12H3M3.33782 7C5.06687 4.01099 8.29859 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C8.29859 22 5.06687 19.989 3.33782 17" class="stroke-myBlack" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
            <h2 class="text-2xl font-semibold text-center tracking-wide mb-2">Login Admin</h2>
            <p class="text-sm text-gray-500 text-center tracking-wide mb-6">Silakan masukkan informasi Anda untuk login.</p>
            <form class="space-y-5" action="#">
                <div>
                    <label for="username" class="text-sm font-medium text-myBlack tracking-wide">Username <span class="text-red-500">*</span></label>
                    <input type="text" name="username" id="username" class="block w-full p-2.5 mt-2 rounded-md bg-gray-50 border border-gray-300 placeholder-gray-400 text-myBlack focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 focus:z-10 focus:shadow-md text-sm md:text-base" placeholder="johndoe" required />
                </div>
                <div>
                    <label for="password" class="text-sm font-medium text-myBlack tracking-wide">Password <span class="text-red-500">*</span></label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full p-2.5 mt-2 rounded-md bg-gray-50 border border-gray-300 placeholder-gray-400 text-myBlack focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 focus:z-10 focus:shadow-md text-sm md:text-base" required />
                </div>
                <button type="submit" class="btn-admin w-full">Login sebagai Admin</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
