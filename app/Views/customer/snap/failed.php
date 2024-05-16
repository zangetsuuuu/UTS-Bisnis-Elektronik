<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="flex items-center justify-center min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-8 mt-16 bg-white rounded-lg shadow-sm w-96">
            <svg class="w-24 h-24 mx-auto text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            <h1 class="mt-4 text-lg font-semibold text-center md:text-xl">Pembayaran Gagal!</h1>
            <p class="mt-2 text-xs text-center text-gray-500 md:text-sm">Silakan coba kembali</p>
            <div class="flex justify-center mt-6 space-x-3">
                <a href="<?= base_url('cart'); ?>" class="btn-primary">Kembali ke Keranjang</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>