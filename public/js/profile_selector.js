const profilePlaceholder = document.getElementById('profile-placeholder');
const profile = document.getElementById('profile');

profilePlaceholder.addEventListener('click', function(){
    profile.click();
})

profile.addEventListener('change', function(){
    profilePlaceholder.src = URL.createObjectURL(profile.files[0]);
})