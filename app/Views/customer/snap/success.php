<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="flex items-center justify-center min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-8 mt-16 bg-white rounded-lg shadow-sm w-96">
            <svg class="w-24 h-24 mx-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <h1 class="mt-4 text-lg font-semibold text-center md:text-xl">Pembayaran Berhasil!</h1>
            <p class="mt-2 text-xs text-center text-gray-500 md:text-sm">Terimakasih sudah memesan di Warung Kami</p>
            <div class="flex justify-center mt-6 space-x-3">
                <a href="<?= base_url('orders'); ?>" class="btn-primary">Lihat Pesanan</a>
                <a href="<?= base_url('products'); ?>" class="btn-alternative">Kembali ke Produk</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>