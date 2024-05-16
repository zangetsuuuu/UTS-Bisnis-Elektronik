function rupiahFormat(amount) {
    var numberString = amount.toString(),
        remainder = numberString.length % 3,
        rupiah = numberString.substr(0, remainder),
        thousands = numberString.substr(remainder).match(/\d{3}/g);

    if (thousands) {
        separator = remainder ? '.' : '';
        rupiah += separator + thousands.join('.');
    }

    return 'Rp. ' + rupiah;
}

const $quantityInputs = $('input.quantity');
const $priceCells = $('td.price');
const $totalQuantityCell = $('#totalQuantity');
const $totalPriceCell = $('#totalPrice');

function calculateTotal() {
    let totalQuantity = 0;
    let totalPrice = 0;

    $quantityInputs.each(function(index, input) {
        const quantity = parseInt($(input).val());
        const price = parseInt($(priceCells[index]).data('original-value'));

        totalQuantity += quantity;
        totalPrice += quantity * price;
    });

    $totalQuantityCell.text(totalQuantity);
    $totalPriceCell.text(rupiahFormat(totalPrice));
}

calculateTotal();
$quantityInputs.on('input', calculateTotal);

function previewImage() {
    const imageInput = document.querySelector('#fileInput');
    const imagePreview = document.querySelector('#frame');

    if (imageInput.files && imageInput.files[0]) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(imageInput.files[0]);

        fileReader.onload = function(e) {
            imagePreview.src = e.target.result;
        }
    }
}
