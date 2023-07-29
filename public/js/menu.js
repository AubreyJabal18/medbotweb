const profile = document.getElementById('profile-menu');
const menu = document.getElementById('menu');

profile.addEventListener('click', function(){
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    }
    else{
        menu.classList.add('hidden');
    }
})