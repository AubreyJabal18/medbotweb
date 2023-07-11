const swapCameraButton = document.getElementById('swap-camera');
const qrcodeDataField = document.getElementById('qrcode');
const loginForm = document.getElementById('login-form');

function onScanSuccess(decodedText, decodedResult) {
    html5QrCode.stop()
    console.log(`Code matched = ${decodedText}`, decodedResult);
    qrcodeDataField.value = decodedText;
    loginForm.submit();
  }
  
  function onScanFailure(error) {
    // console.warn(`Code scan error = ${error}`);
  }

var currentMode = 'user';
Html5Qrcode.getCameras().then(devices => {
  if(devices && devices.length){
      var cameraId = devices[0].id;
      const html5QrCode = new Html5Qrcode(/* element id */ "camera-placeholder");
      html5QrCode.start(cameraId, {fps: 10, facingMode: 'user'}, onScanSuccess, onScanFailure);

      swapCameraButton.addEventListener('click', function(){
        if(currentMode == 'user'){
          html5QrCode.stop().then( ()=> {
            html5QrCode.start(cameraId, {fps: 10, qrbox: 250, facingMode: 'environment'}, onScanSuccess, onScanFailure);
            currentMode = 'environment';
          });
        }
        else if(currentMode == 'environment'){
          html5QrCode.stop().then( ()=> {
            html5QrCode.start(cameraId, {fps: 10, qrbox: 250, facingMode: 'user'}, onScanSuccess, onScanFailure);
            currentMode = 'user';
          });
        }
      });

  }})
  .catch( error => {
      alert(error);
    }
  )






  