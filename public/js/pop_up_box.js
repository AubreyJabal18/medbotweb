const downloadBtn = document.getElementById('download-button'); 
const fromDateInput = document.getElementById('fromDate');
const toDateInput = document.getElementById('toDate');
const id = document.getElementById('user-id').value;

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
    else {
        console.log('Downloading readings from', fromDate, 'to', toDate);
    }
});                                                                                 