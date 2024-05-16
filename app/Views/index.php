<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="flex items-center justify-center min-h-screen">
    <div class="container px-4 py-16 md:px-24">
        <div class="max-w-4xl mx-auto md:text-center">
            <h1 class="mb-3 text-4xl font-bold tracking-wide md:text-5xl md:mb-4">Selamat Datang di OnlineStore!</h1>
            <p class="mb-6 text-base tracking-wide text-gray-500 md:text-lg">Cari dan beli barang yang Anda mau, disini!</p>
            <div class="flex flex-wrap items-center justify-center space-x-0 space-y-3 md:space-x-3 md:space-y-0">
                <a href="<?= base_url('register'); ?>" class="w-full btn-primary md:w-auto">
                    Daftar
                </a>
                <a href="<?= base_url('login'); ?>" class="w-full btn-alternative md:w-auto">
                    Login
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>