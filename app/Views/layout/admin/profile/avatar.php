<!-- Profile image modal -->
<div id="profile-image-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow overflow-hidden">
            <div class="w-full h-full">
                <img src="<?= base_url('img/bg-1.jpg'); ?>" class="object-cover w-full h-full" alt="">
            </div>
            <button type="button" class="absolute top-4 end-4 z-50 p-1 text-white bg-myBlack/20 backdrop-filter backdrop-blur-md hover:bg-white hover:text-myBlack rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center ease-in-out duration-300" data-modal-hide="profile-image-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
    </div>
</div>