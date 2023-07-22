const html5QrCode = new Html5Qrcode('camera-placeholder');
      const qrCodeSuccessCallback = (decodedText, decodedResult) => {
          console.log(decodedText);
          html5QrCode.stop().then((ignore) => {
            // QR Code scanning is stopped.
          }).catch((err) => {
            // Stop failed, handle it.
          });
          document.getElementById('qrcode').value = decodedText;
          document.getElementById('qrcode_form').submit();
      };
      const config = { fps: 10, qrbox: { width: 250, height: 250 } };
      html5QrCode.start({ facingMode: 'environment' }, config, qrCodeSuccessCallback);
    
      var mode = 'user';
      document.getElementById('front_camera').addEventListener('click', switchCamera());
      document.getElementById('back_camera').addEventListener('click', switchCamera());
      function switchCamera(){
        if(mode == 'user'){
          html5QrCode.stop().then((ignore) => {
            html5QrCode.start({ facingMode: 'environment' }, config, qrCodeSuccessCallback);
          }).catch((err) => {
            // Stop failed, handle it.
          });
          mode = 'environment';
        }
        else if(mode == 'environment'){
          html5QrCode.stop().then((ignore) => {
            html5QrCode.start({ facingMode: 'user' }, config, qrCodeSuccessCallback);
          }).catch((err) => {
            // Stop failed, handle it.
          });
          mode = 'user';
        }
      }
  
   
 