<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-16 md:mt-14">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 md:space-x-3">
                    <svg class="w-6 h-6 md:w-7 md:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 4.58579C5 5.17157 5 6.11438 5 8V17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V8C19 6.11438 19 5.17157 18.4142 4.58579C17.8284 4 16.8856 4 15 4H9C7.11438 4 6.17157 4 5.58579 4.58579ZM9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10H15C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8H9ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9ZM9 16C8.44772 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H9Z" fill="currentColor" />
                    </svg>
                    <h1 class="text-lg md:text-xl font-semibold tracking-wide">Pesanan</h1>
                </div>
                <button data-modal-target="order-filter-modal" data-modal-toggle="order-filter-modal" class="text-myBlack hover:text-gray-500 ease-in-out duration-300">
                    <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="currentColor" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-3 md:mt-4">
            <div class="rounded-md overflow-x-auto">
                <!-- Orders start -->
                <table class="min-w-[60rem] md:min-w-full text-sm text-gray-500 tracking-wide divide-y divide-gray-200 border border-gray-200 text-center">
                    <thead class="text-xs text-myBlack uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-4 w-fit">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-4 w-fit">
                                ID Pesanan
                            </th>
                            <th scope="col" class="px-6 py-4 w-fit">
                                Tanggal Pesanan
                            </th>
                            <th scope="col" class="px-6 py-4 w-fit">
                                Pelanggan
                            </th>
                            <th scope="col" class="px-6 py-4 w-fit">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-4 w-fit">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-center">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-myBlack font-bold"><?= $i; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap">#111</td>
                                <td class="px-6 py-4 whitespace-nowrap">12-04-2024</td>
                                <td class="px-6 py-4 whitespace-nowrap truncate max-w-10">Kurosaki Ichigo</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <a href="<?= base_url("/admin/order/$i"); ?>" class="hover:text-myBlack ease-in-out duration-300">
                                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75ZM12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
                <!-- Orders end  -->
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/admin/order/filter'); ?>

<?= $this->endSection(); ?>