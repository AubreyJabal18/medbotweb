const submitButton = document.getElementById('submit-button');
const firstNameField = document.getElementById('firstname');
const lastNameField = document.getElementById('lastname');
const suffixField = document.getElementById('suffix');
const sexField = document.getElementById('sex');
const birthdayField = document.getElementById('birthday');
const municipalityField = document.getElementById('municipality');
const barangayField = document.getElementById('barangay');
const contactField = document.getElementById('contact');
const emailField = document.getElementById('email');
const form = document.getElementById('form');
const terms = document.getElementById('terms')

function toTitleCase(str){
    const arr = str.split(" ");
    for (var i = 0; i < arr.length; i++) {
        arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
    }
    const titleCased = arr.join(" ");
    return titleCased; 
}

submitButton.addEventListener('click', function(){
    submitButton.disabled = true;
    if(firstNameField.value.length == 0){
        alert('Enter your first name');
        submitButton.disabled = false;
        return;
    }
    if(firstNameField.value.length < 2){
        alert('Name too short');
        submitButton.disabled = false;
        return;
    }
    if(!/^[a-zA-Z\s]+$/.test(firstNameField.value)){
        alert('First Name should only be letters');
        submitButton.disabled = false;
        return;
    }

    if(lastNameField.value.length == 0){
        alert('Enter your last name');
        submitButton.disabled = false;
        return; 
    }
    if(lastNameField.value.length < 3){
        alert('Name too short');
        submitButton.disabled = false;
        return;
    }
    if(!/^[a-zA-Z\s]+$/.test(lastNameField.value)){
        alert('Last Name should only be letters');
        submitButton.disabled = false;
        return;
    }

    if (suffixField.value.length > 0 && !/^[a-zA-Z]+$/.test(suffixField.value)) {
        alert('Suffix should only contain letters');
        submitButton.disabled = false;
        return;
    }

    if(sexField.value == 'null'){
        alert('Select your sex');
        submitButton.disabled = false;
        return;
    }

    if (birthdayField.value ==''){
        alert('Select your birthdate');
        submitButton.disabled = false;
        return;
    }

    if (municipalityField.value =='null'){
        alert('Select your municipality');
        submitButton.disabled = false;
        return;
    }

    if (barangayField.value =='null') {
        alert('Select your barangay');
        submitButton.disabled = false;
        return;
    }

    if (contactField.value.length === 0) {
        alert('Enter your contact number');
        submitButton.disabled = false;
        return;
    }

    if (!/^\d{11}$/.test(contactField.value)) {
        alert('Enter your valid 11-digit contact number');
        submitButton.disabled = false;
        return;
    }

    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailField.value)){
        alert('Invalid Email Address');
        submitButton.disabled = false;
        return;
    }

    if(!terms.checked) {
        alert("Please accept the Terms and Conditions");
        form.terms.focus();
        submitButton.disabled = false;
        return;
    }

    firstNameField.value = toTitleCase(firstNameField.value);
    lastNameField.value = toTitleCase(lastNameField.value);
    suffixField.value = toTitleCase(suffixField.value);
    
    form.submit();
    
});