<!-- Add to cart modal -->
<?php if (isset($products)) : ?>
    <?php foreach ($products as $data) : ?>
        <div id="add-to-cart-modal#<?= $data['id']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full p-4">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                        <h3 class="text-lg font-semibold tracking-wide md:text-xl text-myBlack">Tambah ke Keranjang</h3>
                        <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-500 duration-200 ease-in-out bg-transparent rounded-lg hover:bg-gray-200 hover:text-myBlack ms-auto" data-modal-hide="add-to-cart-modal#<?= $data['id']; ?>">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="<?= base_url('product/add-to-cart'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                        <input type="hidden" name="price" value="<?= $data['price']; ?>">
                        <div class="p-4 md:p-5">
                            <label for="quantity">Jumlah produk</label>
                            <input type="number" name="quantity" class="input-customers" min="1" placeholder="1" required>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-4 space-x-3 border-t border-gray-200 rounded-b md:p-5">
                            <button type="button" data-modal-hide="add-to-cart-modal#<?= $data['id']; ?>" class="btn-alternative">Batal</button>
                            <button type="submit" class="btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div id="add-to-cart-modal#<?= $product['id']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                    <h3 class="text-lg font-semibold tracking-wide md:text-xl text-myBlack">Tambah ke Keranjang</h3>
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-500 duration-200 ease-in-out bg-transparent rounded-lg hover:bg-gray-200 hover:text-myBlack ms-auto" data-modal-hide="add-to-cart-modal#<?= $product['id']; ?>">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="<?= base_url('product/add-to-cart'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                    <input type="hidden" name="price" value="<?= $product['price']; ?>">
                    <div class="p-4 md:p-5">
                        <label for="quantity">Jumlah produk</label>
                        <input type="number" name="quantity" class="input-customers" min="1" placeholder="1" required>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-4 space-x-3 border-t border-gray-200 rounded-b md:p-5">
                        <button type="button" data-modal-hide="add-to-cart-modal#<?= $product['id']; ?>" class="btn-alternative">Batal</button>
                        <button type="submit" class="btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>