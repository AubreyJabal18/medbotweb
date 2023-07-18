const selectField = document.getElementById('select');
const yearField = document.getElementById('year')
const monthField = document.getElementById('month');
const weekField = document.getElementById('week');
const measure_selectField = document.getElementById('measure_select');
const measure_yearField = document.getElementById('measure_year')
const measure_monthField = document.getElementById('measure_month');
const measure_weekField = document.getElementById('measure_week');
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

measure_selectField.addEventListener('change', function(){
    if(measure_selectField.value == 'yearly'){
        measure_yearField.classList.remove('hidden')
    }
        else{
            measure_yearField.classList.add('hidden')   
        }
    
    if(measure_selectField.value == 'monthly'){
        measure_monthField.classList.remove('hidden')
   }
        else{
            measure_monthField.classList.add('hidden')
        }
    if(measure_selectField.value == 'weekly'){
        measure_weekField.classList.remove('hidden')
    }
        else{
            measure_weekField.classList.add('hidden')
        }

});

searchField.addEventListener('change', function(){
    form.submit();
})

search_buttonField.addEventListener('change', function(){
    form.submit();
})
   


