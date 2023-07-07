const submitButton = document.getElementById('submit-button');
const firstNameField = document.getElementById('firstname');
const lastNameField = document.getElementById('lastname');
const suffixField = document.getElementById('suffix');

submitButton.addEventListener('click', function(){
    if(firstNameField.value.length == 0){
        alert('Enter your first name');
        return;
    }
    if(firstNameField.value.length < 2){
        alert('Name too short');
        return;
    }
    if(!/^[a-zA-Z]+$/.test(firstNameField.value)){
        alert('First Name should only be letters');
        return;
    }


    if(lastNameField.value.length == 0){
        alert('Enter your first name');
        return;
    }
    if(lastNameField.value.length < 3){
        alert('Name too short');
        return;
    }
    if(!/^[a-zA-Z]+$/.test(lastNameField.value)){
        alert('Last Name should only be letters');
        return;
    }
});