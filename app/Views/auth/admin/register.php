<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-16 md:mt-14">
            <div class="flex items-center space-x-2 md:space-x-3">
                <svg class="inline w-6 h-6 md:w-7 md:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="6" r="4" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 22C14.8501 22 14.0251 22 13.5126 21.4874C13 20.9749 13 20.1499 13 18.5C13 16.8501 13 16.0251 13.5126 15.5126C14.0251 15 14.8501 15 16.5 15C18.1499 15 18.9749 15 19.4874 15.5126C20 16.0251 20 16.8501 20 18.5C20 20.1499 20 20.9749 19.4874 21.4874C18.9749 22 18.1499 22 16.5 22ZM17.0833 16.9444C17.0833 16.6223 16.8222 16.3611 16.5 16.3611C16.1778 16.3611 15.9167 16.6223 15.9167 16.9444V17.9167H14.9444C14.6223 17.9167 14.3611 18.1778 14.3611 18.5C14.3611 18.8222 14.6223 19.0833 14.9444 19.0833H15.9167V20.0556C15.9167 20.3777 16.1778 20.6389 16.5 20.6389C16.8222 20.6389 17.0833 20.3777 17.0833 20.0556V19.0833H18.0556C18.3777 19.0833 18.6389 18.8222 18.6389 18.5C18.6389 18.1778 18.3777 17.9167 18.0556 17.9167H17.0833V16.9444Z" fill="currentColor" />
                    <path d="M15.6782 13.5028C15.2051 13.5085 14.7642 13.5258 14.3799 13.5774C13.737 13.6639 13.0334 13.8705 12.4519 14.4519C11.8705 15.0333 11.6639 15.737 11.5775 16.3799C11.4998 16.9576 11.4999 17.6635 11.5 18.414V18.586C11.4999 19.3365 11.4998 20.0424 11.5775 20.6201C11.6381 21.0712 11.7579 21.5522 12.0249 22C12.0166 22 12.0083 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C13.3262 13 14.577 13.1815 15.6782 13.5028Z" fill="currentColor" />
                </svg>
                <h1 class="text-lg md:text-xl font-semibold tracking-wide">Tambah Admin</h1>
            </div>
        </div>
        <div class="h-full bg-white rounded-lg shadow-sm p-4 mt-3 md:mt-4">
            <form action="<?= base_url('admin/save'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-0 gap-y-4 md:gap-x-4">
                        <div class="rounded-full w-48 h-48 md:w-56 md:h-56 overflow-hidden border mx-auto relative">
                            <img id="frame" src="<?= base_url('img/bg-1.jpg'); ?>" class="object-cover w-full h-full" alt="">
                            <div class="flex items-center justify-center absolute inset-0 bg-myBlack/20">
                                <label data-tooltip-target="edit-user-picture-tooltip" for="fileInput" class="text-white hover:text-gray-300 p-3 rounded-full cursor-pointer ease-in-out duration-300">
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.77778 21H14.2222C17.3433 21 18.9038 21 20.0248 20.2646C20.51 19.9462 20.9267 19.5371 21.251 19.0607C22 17.9601 22 16.4279 22 13.3636C22 10.2994 22 8.76721 21.251 7.6666C20.9267 7.19014 20.51 6.78104 20.0248 6.46268C19.3044 5.99013 18.4027 5.82123 17.022 5.76086C16.3631 5.76086 15.7959 5.27068 15.6667 4.63636C15.4728 3.68489 14.6219 3 13.6337 3H10.3663C9.37805 3 8.52715 3.68489 8.33333 4.63636C8.20412 5.27068 7.63685 5.76086 6.978 5.76086C5.59733 5.82123 4.69555 5.99013 3.97524 6.46268C3.48995 6.78104 3.07328 7.19014 2.74902 7.6666C2 8.76721 2 10.2994 2 13.3636C2 16.4279 2 17.9601 2.74902 19.0607C3.07328 19.5371 3.48995 19.9462 3.97524 20.2646C5.09624 21 6.65675 21 9.77778 21ZM12 9.27273C9.69881 9.27273 7.83333 11.1043 7.83333 13.3636C7.83333 15.623 9.69881 17.4545 12 17.4545C14.3012 17.4545 16.1667 15.623 16.1667 13.3636C16.1667 11.1043 14.3012 9.27273 12 9.27273ZM12 10.9091C10.6193 10.9091 9.5 12.008 9.5 13.3636C9.5 14.7192 10.6193 15.8182 12 15.8182C13.3807 15.8182 14.5 14.7192 14.5 13.3636C14.5 12.008 13.3807 10.9091 12 10.9091ZM16.7222 10.0909C16.7222 9.63904 17.0953 9.27273 17.5556 9.27273H18.6667C19.1269 9.27273 19.5 9.63904 19.5 10.0909C19.5 10.5428 19.1269 10.9091 18.6667 10.9091H17.5556C17.0953 10.9091 16.7222 10.5428 16.7222 10.0909Z" fill="currentColor" />
                                    </svg>
                                </label>
                                <input type="file" name="userProfilePicture" id="fileInput" class="hidden" accept="image/*" onchange="previewImage()">
                            </div>
                            <div id="edit-user-picture-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs tracking-wide font-medium text-white transition-opacity duration-300 bg-myBlack rounded-lg shadow-sm opacity-0 tooltip group">
                                Ganti Foto
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                        <div class="col-span-2 space-y-5">
                            <div>
                                <label for="fullname" class="text-sm font-medium text-myBlack tracking-wide">Nama Lengkap <span class="text-red-500">*</span></label>
                                <input type="text" name="fullname" id="fullname" class="<?= ($validation && $validation->hasError('fullname')) ? 'input-error' : 'input-admin' ?>" <?= ($validation && $validation->hasError('fullname')) ? 'autofocus' : '' ?> placeholder="John Doe" value="<?= old('fullname') ?>" />
                                <?php if ($validation && $validation->hasError('fullname')) : ?>
                                    <div class="input-error-message">
                                        <?= $validation->getError('fullname'); ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="username" class="text-sm font-medium text-myBlack tracking-wide">Username <span class="text-red-500">*</span></label>
                                <input type="text" name="username" id="username" class="<?= ($validation && $validation->hasError('username')) ? 'input-error' : 'input-admin' ?>" <?= ($validation && $validation->hasError('username')) ? 'autofocus' : '' ?> value="<?= old('username'); ?>" placeholder="johndoe" />
                                <?php if ($validation && $validation->hasError('username')) : ?>
                                    <p class="input-error-message">
                                        <?= $validation->getError('username'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="email" class="text-sm font-medium text-myBlack tracking-wide">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" class="<?= ($validation && $validation->hasError('email')) ? 'input-error' : 'input-admin' ?>" <?= ($validation && $validation->hasError('email')) ? 'autofocus' : '' ?> placeholder="someone@example.com" value="<?= old('email') ?>" />
                                <?php if ($validation && $validation->hasError('email')) : ?>
                                    <div class="input-error-message">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="phone_number" class="text-sm font-medium text-myBlack tracking-wide">No. HP <span class="text-red-500">*</span></label>
                                <input type="text" name="phone_number" id="phone_number" class="<?= ($validation && $validation->hasError('phone_number')) ? 'input-error' : 'input-admin' ?>" <?= ($validation && $validation->hasError('phone_number')) ? 'autofocus' : '' ?> placeholder="+62" value="<?= old('phone_number') ?>" />
                                <?php if ($validation && $validation->hasError('phone_number')) : ?>
                                    <div class="input-error-message">
                                        <?= $validation->getError('phone_number'); ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="password" class="text-sm font-medium text-myBlack tracking-wide">Password <span class="text-red-500">*</span></label>
                                <input type="password" name="password" id="password" class="<?= ($validation && $validation->hasError('password')) ? 'input-error' : 'input-admin' ?>" <?= ($validation && $validation->hasError('password')) ? 'autofocus' : '' ?> placeholder="••••••••" value="<?= old('password') ?>" />
                                <?php if ($validation && $validation->hasError('password')) : ?>
                                    <div class="input-error-message">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="confirm_password" class="text-sm font-medium text-myBlack tracking-wide">Konfirmasi Password <span class="text-red-500">*</span></label>
                                <input type="password" name="confirm_password" id="confirm_password" class="<?= ($validation && $validation->hasError('confirm_password')) ? 'input-error' : 'input-admin' ?>" <?= ($validation && $validation->hasError('confirm_password')) ? 'autofocus' : '' ?> placeholder="••••••••" value="<?= old('confirm_password') ?>" />
                                <?php if ($validation && $validation->hasError('confirm_password')) : ?>
                                    <div class="input-error-message">
                                        <?= $validation->getError('confirm_password'); ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <button type="submit" class="btn-admin w-full">Tambah Admin</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>