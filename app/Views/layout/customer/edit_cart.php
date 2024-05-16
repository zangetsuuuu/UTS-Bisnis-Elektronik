<!-- Edit cart item modal -->
<?php foreach ($cart as $item) : ?>
    <div id="edit-cart-item-modal#<?= $item['id']; ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg md:text-xl font-semibold text-myBlack tracking-wide">Edit Jumlah Produk</h3>
                    <button type="button" class="text-gray-500 bg-transparent hover:bg-gray-200 hover:text-myBlack rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center ease-in-out duration-200" data-modal-hide="edit-cart-item-modal#<?= $item['id']; ?>">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="<?= base_url("cart/$item[id]/update"); ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="cart_id" value="<?= $item['id']; ?>">
                    <input type="hidden" name="quantity" value="<?= $item['quantity']; ?>">
                    <div class="p-4 md:p-5">
                        <label for="quantity">Jumlah produk</label>
                        <input type="number" name="quantity" class="input-customers" min="1" value="<?= $item['quantity']; ?>" required>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end space-x-3 p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button type="button" data-modal-hide="edit-cart-item-modal#<?= $item['id']; ?>" class="btn-alternative">Batal</button>
                        <button type="submit" class="btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php endforeach ?>
