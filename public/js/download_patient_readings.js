const downloadReadingBtn = document.getElementById('download-reading-button');
const blurOverlay = document.getElementById('blur-overlay');
const popUpBox = document.getElementById('pop-up-box');
const closePopupBtn = document.getElementById('close-pop-up-button');
const downloadBtn = document.getElementById('download-button'); 
const fromDateInput = document.getElementById('fromDate');
const toDateInput = document.getElementById('toDate');
const id = document.getElementById('user-id').value;

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

downloadBtn.addEventListener('click', function (){

    if(fromDateInput.value == ''){
        alert('Please enter start date!');
        return;
    }

    if(toDateInput.value == ''){
        alert('Please enter end data!');
        return;
    }

    var fromDate = new Date(fromDateInput.value);
    var toDate = new Date(toDateInput.value);

    if (fromDate > toDate) {
        alert("'From' date cannot be later than 'To' date.");
        return;
    } 
    
    var url = '/download_patient_readings?user_id='+id+'&start='+fromDateInput.value+'&end='+toDateInput.value;
    open(url);
    // fetch('/download_user_readings?user_id='+id+'&start='+fromDateInput.value+'&end='+toDateInput.value)
    //     .then(() => {
    //         console.log('Downloaded user readings from ' + fromDateInput.value + ' to ' + toDateInput.value);
    //     })
});                                                                                 