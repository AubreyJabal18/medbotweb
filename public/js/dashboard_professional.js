const selectField = document.getElementById('select');
const yearField = document.getElementById('year')
const monthField = document.getElementById('month');
const weekField = document.getElementById('week');
const registered_selectField = document.getElementById('registered_select');
const registered_yearField = document.getElementById('registered_year')
const registered_monthField = document.getElementById('registered_month');
const registered_weekField = document.getElementById('registered_week');
const reading_selectField = document.getElementById('reading_select');
const reading_yearField = document.getElementById('reading_year')
const reading_monthField = document.getElementById('reading_month');
const reading_weekField = document.getElementById('reading_week');
const pervasiveness_selectField = document.getElementById('pervasiveness_select');
const pervasiveness_yearField = document.getElementById('pervasiveness_year')
const pervasiveness_monthField = document.getElementById('pervasiveness_month');
const pervasiveness_weekField = document.getElementById('pervasiveness_week');
const searchField = document.getElementById('search');
const search_buttonField = document.getElementById('search_button');
const form = document.getElementById('form');

selectField.addEventListener('change', function(){
    if(selectField.value == 'yearly'){
        yearField.classList.remove('hidden')
    }
        else{
            yearField.classList.add('hidden')   
        }

    if(selectField.value == 'monthly'){
        monthField.classList.remove('hidden')
    }
        else{
            monthField.classList.add('hidden')
        }
    if(selectField.value == 'weekly'){
        weekField.classList.remove('hidden')
    }
    else{
        weekField.classList.add('hidden')
    }
 
}); 

registered_selectField.addEventListener('change', function(){
    if(registered_selectField.value == 'yearly'){
        registered_yearField.classList.remove('hidden')
    }
        else{
            registered_yearField.classList.add('hidden')   
        }
    
    if(registered_selectField.value == 'monthly'){
        registered_monthField.classList.remove('hidden')
   }
        else{
            registered_monthField.classList.add('hidden')
        }
    if(registered_selectField.value == 'weekly'){
        registered_weekField.classList.remove('hidden')
    }
        else{
            registered_weekField.classList.add('hidden')
        }

});

reading_selectField.addEventListener('change', function(){
    if(reading_selectField.value == 'yearly'){
        reading_yearField.classList.remove('hidden')
    }
        else{
            reading_yearField.classList.add('hidden')   
        }

    if(reading_selectField.value == 'monthly'){
        reading_monthField.classList.remove('hidden')
    }
        else{
            reading_monthField.classList.add('hidden')
        }
    if(reading_selectField.value == 'weekly'){
        reading_weekField.classList.remove('hidden')
    }
    else{
        reading_weekField.classList.add('hidden')
    }
 
});

pervasiveness_selectField.addEventListener('change', function(){
    if(pervasiveness_selectField.value == 'yearly'){
        pervasiveness_yearField.classList.remove('hidden')
    }
        else{
            pervasiveness_yearField.classList.add('hidden')   
        }
    
    if(pervasiveness_selectField.value == 'monthly'){
        pervasiveness_monthField.classList.remove('hidden')
   }
        else{
            pervasiveness_monthField.classList.add('hidden')
        }
    if(pervasiveness_selectField.value == 'weekly'){
        pervasiveness_weekField.classList.remove('hidden')
    }
        else{
            pervasiveness_weekField.classList.add('hidden')
        }

});

searchField.addEventListener('change', function(){
    form.submit();
})

search_buttonField.addEventListener('change', function(){
    form.submit();
})
   


