const uploadPlaceholder = document.getElementById('upload-placeholder');
const qrcode = document.getElementById('qrcode');
const form = document.getElementById('form');

uploadPlaceholder.addEventListener('click', function(){
    qrcode.click();
})

qrcode.addEventListener('change', function(){
    form.submit();
})