const emailField = document.getElementById('email');
const passwordField = document.getElementById('password');
const submitButton = document.getElementById('submit-button');
const form = document.getElementById('form');

submitButton.addEventListener('click', function(){
    submitButton.disabled = true;
    if(emailField.value.length == 0){
        alert('Username is required');
        submitButton.disabled = false;
        return;
    }

    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailField.value)){
        alert('Invalid email format');
        submitButton.disabled = false;
        return;
    }

    if(passwordField.value.length == 0){
        alert('Password is required');
        submitButton.disabled = false;
        return;
    }

    form.submit();
})


