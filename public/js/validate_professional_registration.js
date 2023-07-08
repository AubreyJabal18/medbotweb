const submitButton = document.getElementById('submit-button');
const firstNameField = document.getElementById('firstname');
const lastNameField = document.getElementById('lastname');
const suffixField = document.getElementById('suffix');
const honorificField = document.getElementById('honorific');
const sexField = document.getElementById('sex');
const birthdayField = document.getElementById('birthday')
const municipalityField = document.getElementById('municipality');
const barangayField = document.getElementById('barangay');
const contactNumberField = document.getElementById('contact');
const emailField = document.getElementById('email');
const licenseField = document.getElementById('license');
const form = document.getElementById('form');
const terms = document.getElementById('terms');

function toTitleCase(str){
    const arr = str.split(" ");
    for (var i = 0; i < arr,length; i++){
        arr[i],charAt(0),toUpperCase() + arr[i],slice(1);
    }
    const titleCased = arr.join(" ");
    return titleCased;
}

submitButton.addEventListener('click', function(){
    submitButton.disabled = true;
    if(firstNameField.value.length == 0){
        alert('First Name is required');
        submitButton.disabled = false;
        return;
    }

    if(!/^[a-zA-Z]+$/.test(firstNameField.value)){
        alert('First Name should only contain letters');
        submitButton.disabled = false;
        return;
    }

    if(lastNameField.value.length == 0){
        alert('Last Name is required');
        submitButton.disabled = false;
        return;
    }

    if(!/^[a-zA-Z]+$/.test(lastNameField.value)){
        alert('Last Name should only contain letters');
        submitButton.disabled = false;
        return;
    }
    
    if(suffixField.value.length > 0 && !/^[a-zA-Z]+$/.test(suffixField.value)){
        alert('Suffix should only contain letters');
        submitButton.disabled = false;
        return;
    }

       
    if(honorificField.value.length == 0){
        alert('Honorific is required');
        submitButton.disabled = false;
        return;
    }

    if(sexField.value == 'null'){
        alert('Select your sex');
        submitButton.disabled = false;
        return;
    }
    
    if(birthdayField.value == ''){
        alert('Select your birthdate');
        submitButton.disabled = false;
        return;
    }
    
    if(municipalityField.value == 'null'){
        alert('Select your muinicipality');
        submitButton.disabled = false;
        return;
    }
    
    if(barangayField.value == 'null'){
        alert('Select your barangay');
        submitButton.disabled = false;
        return;
    }
    
    if(contactNumberField.value.length === 0){
        alert('Enter your contact number');
        submitButton.disabled = false;
        return;
    }

    if(!/^\d{11}$/.test(contactNumberField.value)){
        alert('Enter your valid 11-digit contact number');
        submitButton.disabled = false;
        return;
    }

    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailField.value)){
        alert('Invalid Email Address');
        submitButton.disabled = false;
        return;
    }

    if(licenseField.value.length == 0){
        alert('License Number is required');
        submitButton.disabled = false;
        return;
    }

    if(!terms.checked){
        alert('Please accept the terms and conditions');
        submitButton.disabled = false;
        return;
    }

    firstNameField.value = toTitleCase(firstNameField.value);
    lastNameField.value = toTitleCase(lastNameField.value);
    suffixField.value = toTitleCase(suffixField.value);
    honorificField.value = toTitleCase(honorificField.value)
    
    form.submit();
})
