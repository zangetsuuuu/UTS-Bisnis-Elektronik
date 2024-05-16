<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/output.css'); ?>">
    <title><?= $title; ?></title>
</head>

<body>
    <?php if ($title !== 'Login | ADMIN') : ?>
        <nav class="fixed top-0 z-40 w-full bg-white border-b border-gray-200">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ease-in-out duration-200">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                            </svg>
                        </button>
                        <a href="<?= base_url('admin/dashboard'); ?>" class="flex ms-2 md:me-24">
                            <img src="" class="h-8 me-3" alt="" />
                            <span class="self-center text-xl font-semibold sm:text-2xl">Admin</span>
                        </a>
                    </div>
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-200 ease-in-out duration-200" aria-expanded="false" data-dropdown-toggle="dropdown-user" data-dropdown-placement="bottom-start">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="<?= base_url('img/blank-avatar.webp'); ?>" alt="User photo">
                            </button>
                        </div>
                        <div class="z-40 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-semibold text-myBlack tracking-wide truncate" role="none">
                                    Admin
                                </p>
                                <p class="text-xs font-medium text-gray-500 tracking-wide truncate" role="none">
                                    onlinestore@admin.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="<?= base_url('admin/profile'); ?>" class="block px-4 py-2 text-sm text-myBlack tracking-wide hover:bg-gray-100 ease-in-out duration-200" role="menuitem">Profil</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/create'); ?>" class="block px-4 py-2 text-sm text-myBlack tracking-wide hover:bg-gray-100 ease-in-out duration-200" role="menuitem">Tambah admin</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/change-password'); ?>" class="block px-4 py-2 text-sm text-myBlack tracking-wide hover:bg-gray-100 ease-in-out duration-200" role="menuitem">Ganti password</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <button data-modal-target="logout-modal" data-modal-toggle="logout-modal" type="button" class="flex items-center space-x-2 px-4 py-2 text-sm text-red-500 font-semibold tracking-wide w-full hover:bg-red-500 hover:text-white ease-in-out duration-200" role="menuitem">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.125 12C16.125 11.5858 15.7892 11.25 15.375 11.25L4.40244 11.25L6.36309 9.56944C6.67759 9.29988 6.71401 8.8264 6.44444 8.51191C6.17488 8.19741 5.7014 8.16099 5.38691 8.43056L1.88691 11.4306C1.72067 11.573 1.625 11.7811 1.625 12C1.625 12.2189 1.72067 12.427 1.88691 12.5694L5.38691 15.5694C5.7014 15.839 6.17488 15.8026 6.44444 15.4881C6.71401 15.1736 6.67759 14.7001 6.36309 14.4306L4.40244 12.75L15.375 12.75C15.7892 12.75 16.125 12.4142 16.125 12Z" fill="currentColor" />
                                        <path d="M9.375 8C9.375 8.70219 9.375 9.05329 9.54351 9.3055C9.61648 9.41471 9.71025 9.50848 9.81946 9.58145C10.0717 9.74996 10.4228 9.74996 11.125 9.74996L15.375 9.74996C16.6176 9.74996 17.625 10.7573 17.625 12C17.625 13.2426 16.6176 14.25 15.375 14.25L11.125 14.25C10.4228 14.25 10.0716 14.25 9.8194 14.4185C9.71023 14.4915 9.6165 14.5852 9.54355 14.6944C9.375 14.9466 9.375 15.2977 9.375 16C9.375 18.8284 9.375 20.2426 10.2537 21.1213C11.1324 22 12.5464 22 15.3748 22L16.3748 22C19.2032 22 20.6174 22 21.4961 21.1213C22.3748 20.2426 22.3748 18.8284 22.3748 16L22.3748 8C22.3748 5.17158 22.3748 3.75736 21.4961 2.87868C20.6174 2 19.2032 2 16.3748 2L15.3748 2C12.5464 2 11.1324 2 10.2537 2.87868C9.375 3.75736 9.375 5.17157 9.375 8Z" fill="currentColor" />
                                    </svg>
                                    <span>Logout</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <aside id="sidebar" class="fixed top-0 left-0 z-[35] w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="<?= base_url('admin/dashboard'); ?>" class="flex items-center p-2 rounded-lg hover:text-emerald-500 hover:bg-gray-100 group ease-in-out duration-200 <?= ($title == 'Dashboard | ADMIN') ? 'bg-gray-100 text-emerald-500' : 'text-myBlack' ?>">
                            <svg fill="currentColor" class="w-5 h-5 md:w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="dashboard" class="icon glyph">
                                <rect x="2" y="2" width="9" height="11" rx="2"></rect>
                                <rect x="13" y="2" width="9" height="7" rx="2"></rect>
                                <rect x="2" y="15" width="9" height="7" rx="2"></rect>
                                <rect x="13" y="11" width="9" height="11" rx="2"></rect>
                            </svg>
                            <span class="tracking-wide ms-3 whitespace-nowrap">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/products'); ?>" class="flex items-center p-2 rounded-lg hover:text-emerald-500 hover:bg-gray-100 group ease-in-out duration-200 <?= ($title == 'Daftar Produk | ADMIN') ? 'bg-gray-100 text-emerald-500' : 'text-myBlack' ?>">
                            <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="icon" fill="currentColor" transform="translate(64.000000, 34.346667)">
                                        <path d="M192,7.10542736e-15 L384,110.851252 L384,332.553755 L192,443.405007 L1.42108547e-14,332.553755 L1.42108547e-14,110.851252 L192,7.10542736e-15 Z M127.999,206.918 L128,357.189 L170.666667,381.824 L170.666667,231.552 L127.999,206.918 Z M42.6666667,157.653333 L42.6666667,307.920144 L85.333,332.555 L85.333,182.286 L42.6666667,157.653333 Z M275.991,97.759 L150.413,170.595 L192,194.605531 L317.866667,121.936377 L275.991,97.759 Z M192,49.267223 L66.1333333,121.936377 L107.795,145.989 L233.374,73.154 L192,49.267223 Z" id="Combined-Shape">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="tracking-wide ms-3 whitespace-nowrap">Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/orders'); ?>" class="flex items-center p-2 rounded-lg hover:text-emerald-500 hover:bg-gray-100 group ease-in-out duration-200 <?= ($title == 'Daftar Pesanan | ADMIN') ? 'bg-gray-100 text-emerald-500' : 'text-myBlack' ?>">
                            <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 4.58579C5 5.17157 5 6.11438 5 8V17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V8C19 6.11438 19 5.17157 18.4142 4.58579C17.8284 4 16.8856 4 15 4H9C7.11438 4 6.17157 4 5.58579 4.58579ZM9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10H15C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8H9ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9ZM9 16C8.44772 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H9Z" fill="currentColor" />
                            </svg>
                            <span class="tracking-wide ms-3 whitespace-nowrap">Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/customers'); ?>" class="flex items-center p-2 rounded-lg hover:text-emerald-500 hover:bg-gray-100 group ease-in-out duration-200 <?= ($title == 'Daftar Pelanggan | ADMIN') ? 'bg-gray-100 text-emerald-500' : 'text-myBlack' ?>">
                            <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="6" r="4" fill="currentColor" />
                                <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="currentColor" />
                            </svg>
                            <span class="tracking-wide ms-3 whitespace-nowrap">Pelanggan</span>
                        </a>
                    </li>
                </ul>
                <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200">
                    <li>
                        <a href="<?= base_url('admin/list'); ?>" class="flex items-center ps-2.5 p-2 rounded-lg hover:text-emerald-500 hover:bg-gray-100 group ease-in-out duration-200 <?= ($title == 'Daftar Admin | ADMIN') ? 'bg-gray-100 text-emerald-500' : 'text-myBlack' ?>">
                            <svg fill="currentColor" class="w-5 h-5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 352.644 352.644" xml:space="preserve">
                                <path d="M324.478,51.943L177.985,0.285c-1.076-0.38-2.25-0.38-3.326,0L28.166,51.943c-1.999,0.705-3.337,2.595-3.337,4.715c0,52.278,13.834,112.711,37.955,165.805c19.567,43.069,54.751,100.519,111.248,129.625c0.719,0.37,1.504,0.555,2.29,0.555c0.786,0,1.571-0.185,2.29-0.555c56.497-29.106,91.681-86.556,111.248-129.625c24.121-53.094,37.955-113.527,37.955-165.805C327.815,54.538,326.477,52.648,324.478,51.943z M236.322,222.07h-120c-2.549,0-4.615-2.066-4.615-4.615c0-31.84,22.326-41.677,34.321-46.961c2.31-1.018,5.394-2.376,6.478-3.226c0.269-3.704-1.259-5.735-4.534-9.705c-4.518-5.476-10.703-12.974-10.703-29.501c0-28.058,14.965-45.487,39.054-45.487c24.089,0,39.053,17.429,39.053,45.487c0,16.527-6.186,24.026-10.702,29.501c-3.276,3.971-4.804,6.001-4.535,9.705c1.084,0.85,4.168,2.208,6.479,3.225c11.994,5.285,34.321,15.121,34.321,46.962C240.937,220.003,238.871,222.07,236.322,222.07z" />
                            </svg>
                            <span class="tracking-wide ms-3 whitespace-nowrap">Admin</span>
                        </a>
                    </li>
                </ul>
                <div class="absolute bottom-2 left-0 px-4 py-2 w-full">
                    <p class="text-sm font-semibold tracking-wide">&copy; 2024 Rafif Athallah.</p>
                </div>
            </div>
        </aside>
    <?php endif; ?>