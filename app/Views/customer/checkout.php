<?= $this->extend('layout/customer/template'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="h-full p-4 mt-16 bg-white rounded-lg shadow-sm md:mt-14">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 md:space-x-3">
                    <svg class="w-6 h-6 md:w-7 md:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 4.58579C5 5.17157 5 6.11438 5 8V17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V8C19 6.11438 19 5.17157 18.4142 4.58579C17.8284 4 16.8856 4 15 4H9C7.11438 4 6.17157 4 5.58579 4.58579ZM9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10H15C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8H9ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9ZM9 16C8.44772 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H9Z" fill="currentColor" />
                    </svg>
                    <h1 class="text-lg font-semibold tracking-wide md:text-xl">Detail Pesanan</h1>
                </div>
                <p class="text-gray-500 trac-king-wide text-[0.65rem] md:text-xs"><?= date('d M Y, H:i', strtotime($transaction_details['created_at'])); ?> WIB</p>
            </div>
        </div>
        <div class="h-full p-4 mt-4 bg-white rounded-lg">
            <!-- Order start -->
            <div class="p-4 mb-4 rounded-lg bg-gray-50">
                <h2 class="mb-3 text-base font-semibold tracking-wide md:text-lg">Ringkasan Pesanan</h2>
                <?php foreach ($cart as $item) : ?>
                    <div class="mb-2 space-y-2">
                        <div class="flex items-center justify-between">
                            <p class="w-2/4 text-xs tracking-wide text-left text-gray-500 md:text-sm"><?= $item['product_name']; ?> &times;<?= $item['quantity']; ?></p>
                            <p class="w-1/4 text-xs tracking-wide text-gray-500 md:text-sm text-end"><?= 'Rp. ' . number_format($item['total'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="flex items-center justify-between pt-2 border-t">
                    <p class="text-base font-semibold tracking-wide md:text-lg">Total</p>
                    <p class="text-base font-semibold tracking-wide md:text-lg"><?= 'Rp. ' . number_format($total_price, 0, ',', '.'); ?></p>
                </div>
            </div>
            <!-- Order end -->
            <button id="pay-button" type="button" class="flex items-center justify-center w-full space-x-2 btn-primary">
                <svg class="w-5 h-5" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="ic_fluent_payment_24_filled" fill="currentColor" fill-rule="nonzero">
                            <path d="M21.9883291,10.9947074 L21.9888849,16.275793 C21.9888849,17.7383249 20.8471803,18.9341973 19.4064072,19.0207742 L19.2388849,19.025793 L4.76104885,19.025793 C3.29851702,19.025793 2.10264457,17.8840884 2.01606765,16.4433154 L2.01104885,16.275793 L2.01032912,10.9947074 L21.9883291,10.9947074 Z M18.2529045,14.5 L15.7529045,14.5 L15.6511339,14.5068466 C15.2850584,14.556509 15.0029045,14.8703042 15.0029045,15.25 C15.0029045,15.6296958 15.2850584,15.943491 15.6511339,15.9931534 L15.7529045,16 L18.2529045,16 L18.3546751,15.9931534 C18.7207506,15.943491 19.0029045,15.6296958 19.0029045,15.25 C19.0029045,14.8703042 18.7207506,14.556509 18.3546751,14.5068466 L18.2529045,14.5 Z M19.2388849,5.0207074 C20.7014167,5.0207074 21.8972891,6.162412 21.9838661,7.60318507 L21.9888849,7.7707074 L21.9883291,9.4947074 L2.01032912,9.4947074 L2.01104885,7.7707074 C2.01104885,6.30817556 3.15275345,5.11230312 4.59352652,5.02572619 L4.76104885,5.0207074 L19.2388849,5.0207074 Z" id="🎨-Color">
                            </path>
                        </g>
                    </g>
                </svg>
                <span>Pilih Metode Pembayaran</span>
            </button>
        </div>
    </div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Wg9fR-ViVgBSDeDQ"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function() {
        // SnapToken acquired from Payment controller
        window.snap.pay('<?= $snapToken; ?>', {
            onSuccess: function(result) {
                console.log(result);
                $.ajax({
                    url: '<?= base_url('payment/save-transaction'); ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: JSON.stringify(result),
                    contentType: 'application/json',
                    success: function(response) {
                        console.log(result);
                        if (result.transaction_status == 'settlement') {
                            // Redirect to success page
                            document.location.href = '<?= base_url('payment/success'); ?>';
                        } else {
                            // Redirect to failed page
                            document.location.href = '<?= base_url('payment/failed'); ?>';
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to send transaction data to server!');
                    }
                });
            },
            onPending: function(result) {
                console.log(result);
            },
            onError: function(result) {
                console.log(result);
                // Redirect to failed page
                document.location.href = '<?= base_url('payment/failed'); ?>';
            }
        });
    };
</script>
<?= $this->endSection(); ?>