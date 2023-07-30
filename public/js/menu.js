const profileIcon = document.getElementById('profile-menu');
const menu = document.getElementById('menu');

profileIcon.addEventListener('click', function(){
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    }
    else{
        menu.classList.add('hidden');
    }
})