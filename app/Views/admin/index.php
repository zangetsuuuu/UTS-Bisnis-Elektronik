<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-4 mt-16 bg-white rounded-lg shadow-sm md:mt-14">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 md:space-x-3">
                    <svg fill="currentColor" class="w-5 h-5 md:w-6 md:h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 352.644 352.644" xml:space="preserve">
                        <path d="M324.478,51.943L177.985,0.285c-1.076-0.38-2.25-0.38-3.326,0L28.166,51.943c-1.999,0.705-3.337,2.595-3.337,4.715c0,52.278,13.834,112.711,37.955,165.805c19.567,43.069,54.751,100.519,111.248,129.625c0.719,0.37,1.504,0.555,2.29,0.555c0.786,0,1.571-0.185,2.29-0.555c56.497-29.106,91.681-86.556,111.248-129.625c24.121-53.094,37.955-113.527,37.955-165.805C327.815,54.538,326.477,52.648,324.478,51.943z M236.322,222.07h-120c-2.549,0-4.615-2.066-4.615-4.615c0-31.84,22.326-41.677,34.321-46.961c2.31-1.018,5.394-2.376,6.478-3.226c0.269-3.704-1.259-5.735-4.534-9.705c-4.518-5.476-10.703-12.974-10.703-29.501c0-28.058,14.965-45.487,39.054-45.487c24.089,0,39.053,17.429,39.053,45.487c0,16.527-6.186,24.026-10.702,29.501c-3.276,3.971-4.804,6.001-4.535,9.705c1.084,0.85,4.168,2.208,6.479,3.225c11.994,5.285,34.321,15.121,34.321,46.962C240.937,220.003,238.871,222.07,236.322,222.07z" />
                    </svg>
                    <h1 class="text-lg font-semibold tracking-wide md:text-xl">Admin</h1>
                </div>
                <button data-modal-target="admin-search-modal" data-modal-toggle="admin-search-modal" class="duration-300 ease-in-out text-myBlack hover:text-gray-500">
                    <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6725 16.6412L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="h-full p-4 mt-3 bg-white rounded-lg shadow-sm md:mt-4">
            <?php if (isset($flashMessages)) :
                foreach ($flashMessages as $key => $flashMessage) :
                    if ($flashMessage['message']) : ?>
                        <div id="<?= $flashMessage['id'] ?>" class="flex items-center p-3 mb-4 tracking-wide text-green-800 rounded-lg md:p-4 bg-green-50" role="alert">
                            <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                <?= $flashMessage['message'] ?>
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1 md:p-1.5 hover:bg-green-200 inline-flex items-center justify-center w-7 h-7 md:w-8 md:h-8 ease-in-out duration-200" data-dismiss-target="#<?= $flashMessage['id'] ?>" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-2 h-2 md:w-3 md:h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
            <?php endif;
                endforeach;
            endif; ?>

            <?php if (session()->getFlashdata('Admin Search Info')) : ?>
                <div class="flex items-center justify-between p-3 mb-4 text-sm text-gray-800 border border-gray-300 rounded-lg md:p-4 bg-gray-50">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                <?= session()->getFlashdata('Admin Search Info'); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/list'); ?>" class="text-xs font-medium tracking-wide md:text-sm hover:underline">Reset</a>
                </div>
            <?php elseif (session()->getFlashdata('Admin Not Found')) : ?>
                <div class="flex items-center justify-between p-3 text-sm text-yellow-800 border border-yellow-300 rounded-lg md:p-4 bg-yellow-50">
                    <div class="flex items-center" role="alert">
                        <svg class="flex-shrink-0 inline w-3 h-3 md:w-4 md:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="text-xs font-medium tracking-wide ms-3 md:text-sm">
                                <?= session()->getFlashdata('Admin Not Found'); ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/list'); ?>" class="text-xs font-medium tracking-wide md:text-sm hover:underline">Kembali</a>
                </div>
            <?php endif; ?>

            <?php if (!empty($admins)) : ?>
                <!-- Admins start -->
                <div class="overflow-x-auto rounded-md">
                    <table class="min-w-[60rem] md:min-w-full text-sm text-left text-gray-500 tracking-wide divide-y divide-gray-200 border border-gray-200">
                        <thead class="text-xs text-center uppercase bg-gray-100 text-myBlack">
                            <tr>
                                <th scope="col" class="w-10 px-6 py-4">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Foto
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    No. HP
                                </th>
                                <th scope="col" class="px-6 py-4 w-fit">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center bg-white divide-y divide-gray-200">
                            <?php $i = 1; ?>
                            <?php foreach ($admins as $data) : ?>
                                <tr class="duration-150 ease-in-out hover:bg-gray-50">
                                    <td class="px-6 py-4 font-bold whitespace-nowrap text-myBlack"><?= $i; ?>.</td>
                                    <td class="flex justify-center px-6 py-4 whitespace-nowrap">
                                        <img class="rounded-full w-9 h-9 md:w-10 md:h-10" src="<?= base_url('img/blank-avatar.webp'); ?>" alt="">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="space-y-0.5">
                                            <div class="text-sm font-semibold"><?= $data['fullname']; ?></div>
                                            <div class="text-xs text-gray-400">@<?= $data['username']; ?></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= $data['email']; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= $data['phone_number']; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center justify-center space-x-3">
                                            <a href="<?= base_url("admin/info/@$data[username]"); ?>" class="duration-300 ease-in-out hover:text-myBlack">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75ZM12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                            <button data-modal-target="delete-admin-modal#<?= $data['id']; ?>" data-modal-toggle="delete-admin-modal#<?= $data['id']; ?>" class="text-red-500 duration-300 ease-in-out hover:text-red-600">
                                                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="delete" class="icon glyph">
                                                    <path d="M17,4V5H15V4H9V5H7V4A2,2,0,0,1,9,2h6A2,2,0,0,1,17,4Z"></path>
                                                    <path d="M20,6H4A1,1,0,0,0,4,8H5V20a2,2,0,0,0,2,2H17a2,2,0,0,0,2-2V8h1a1,1,0,0,0,0-2Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Admins end -->
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->include('layout/admin/delete'); ?>

<?= $this->include('layout/admin/search'); ?>

<?= $this->endSection(); ?>