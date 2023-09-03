const html5QrCode = new Html5Qrcode('qrcode-reader');

const uploadPlaceholder = document.getElementById('upload-placeholder');
const uploadqrcode = document.getElementById('qrcode-input');
const qrData = document.getElementById('qrcode');
const form = document.getElementById('login-form');

uploadPlaceholder.addEventListener('click', function(){
    uploadqrcode.click();
})

uploadqrcode.addEventListener('change', function(){
    // form.submit();
    handleFileInput().then(() => {

    })
})

const handleFileInput = async () => {
    const fileInput = document.getElementById('qrcode-input');
    const file = fileInput.files[0];
    try {
        const decodedText = await html5QrCode.scanFile(file);
        qrData.value = decodedText;
        form.submit();
    } catch (error) {
        console.error(error);
    }
  };