const downloadReadingBtn = document.getElementById('download-reading-button');
const blurOverlay = document.getElementById('blur-overlay');
const popUpBox = document.getElementById('pop-up-box');
const closePopupBtn = document.getElementById('close-pop-up-button');

downloadReadingBtn.addEventListener('click',openDownloadModal);

blurOverlay.addEventListener('click',closeDownloadModal);

function openDownloadModal(){
    blurOverlay.classList.remove('hidden');
    popUpBox.classList.remove('hidden');
    downloadReadingBtn.classList.add('hidden');
}

function closeDownloadModal(){
    blurOverlay.classList.add('hidden');
    popUpBox.classList.add('hidden');
    downloadReadingBtn.classList.remove('hidden');
}
  
