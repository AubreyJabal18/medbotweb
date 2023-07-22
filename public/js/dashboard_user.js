const trends_selectField = document.getElementById('trends_select');
const trends_yearField = document.getElementById('trends_year')
const trends_monthField = document.getElementById('trends_month');
const trends_weekField = document.getElementById('trends_week');
const rating_selectField = document.getElementById('rating_select');
const rating_yearField = document.getElementById('rating_year')
const rating_monthField = document.getElementById('rating_month');
const rating_weekField = document.getElementById('rating_week');
const medbot_selectField = document.getElementById('medbot_select');
const medbot_yearField = document.getElementById('medbot_year')
const medbot_monthField = document.getElementById('medbot_month');
const medbot_weekField = document.getElementById('medbot_week');

trends_selectField.addEventListener('change', function(){
    if(trends_selectField.value == 'yearly'){
        trends_yearField.classList.remove('hidden')
    }
    else{
        trends_yearField.classList.add('hidden')   
    }

    if(trends_selectField.value == 'monthly'){
        trends_monthField.classList.remove('hidden')
    }
    else{
        trends_monthField.classList.add('hidden')
    }
    
    if(trends_selectField.value == 'weekly'){
        trends_weekField.classList.remove('hidden')
    }
    else{
        trends_weekField.classList.add('hidden')
    }
});

rating_selectField.addEventListener('change', function(){
    if(rating_selectField.value == 'yearly'){
        rating_yearField.classList.remove('hidden')
    }
    else{
        rating_yearField.classList.add('hidden')   
    }

    if(rating_selectField.value == 'monthly'){
        rating_monthField.classList.remove('hidden')
    }
    else{
        rating_monthField.classList.add('hidden')
    }

    if(rating_selectField.value == 'weekly'){
        rating_weekField.classList.remove('hidden')
    }
    else{
        rating_weekField.classList.add('hidden')
    }
});

medbot_selectField.addEventListener('change', function(){
    if(medbot_selectField.value == 'yearly'){
        medbot_yearField.classList.remove('hidden')
    }
    else{
        medbot_yearField.classList.add('hidden')   
    }

    if(medbot_selectField.value == 'monthly'){
        medbot_monthField.classList.remove('hidden')
    }
    else{
        medbot_monthField.classList.add('hidden')
    }

    if(medbot_selectField.value == 'weekly'){
        medbot_weekField.classList.remove('hidden')
    }
    else{
        medbot_weekField.classList.add('hidden')
    }
});