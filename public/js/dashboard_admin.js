const select_usersByMunicipalityField = document.getElementById('select-usersByMunicipality');
const select_usedField = document.getElementById('select_used');
const year_usedField = document.getElementById('year_used')
const month_usedField = document.getElementById('month_used');
const week_usedField = document.getElementById('week_used');

select_usersByMunicipalityField.addEventListener('change', function(){
    renderUsersCountChart(select_usersByMunicipalityField.value);
    console.log(select_usersByMunicipalityField.value);
})

var usersCountChart = null;
 
async function getUsersCount(municipality){
    const response = await fetch('/get/users_count?municipality=' + municipality)
    const data = await response.json();
    return data['users_count'];
}

function renderUsersCountChart(municipality){
        getUsersCount(municipality).then((data) => {
            var patients = data['patient'];
            var professionals = data['professional'];
            if(municipality == 'All'){
                var labels = [];
                var patient_counts = [];
                var professional_counts = [];
                for (const [key, value] of Object.entries(patients)) {
                    labels.push(key);
                    patient_counts.push(value);
                }
                for (const [key, value] of Object.entries(professionals)) {
                    professional_counts.push(value);
                }
            }
            else{
                var labels = [];
                var patient_counts = [];
                var professional_counts = [];
                for (const [key, value] of Object.entries(patients)) {
                    labels.push(key);
                    patient_counts.push(value);
                }
                for (const [key, value] of Object.entries(professionals)) {
                    professional_counts.push(value);
                }
            }

            const usersCountData = {
                labels: labels,
                datasets: [{
                    label: 'Patient',
                    backgroundColor: '#213E76',
                    data: patient_counts,
                },{
                    label: 'Professional',
                    backgroundColor: '#FFFF00',
                    data: professional_counts,
                }]
            };
           
            const usersCountConfig = {
                type: 'bar',
                data: usersCountData,
                options: {
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            beginAtZero: true,
                            stacked: true
                        }
                    },
                    legend: {
                        display: false
                    }
                  },
            };
            if(usersCountChart != null){
                usersCountChart.destroy();
            }
            usersCountChart = new Chart(
                document.getElementById('users-count'),
                usersCountConfig
            );
        }
    )
                
}    

renderUsersCountChart('All');


select_usedField.addEventListener('change', function(){
    if(select_usedField.value == 'yearly'){
        year_usedField.classList.remove('hidden')
    }
        else{
            year_usedField.classList.add('hidden')   
        }
    
    if(select_usedField.value == 'monthly'){
        month_usedField.classList.remove('hidden')
   }
        else{
            month_usedField.classList.add('hidden')
        }
    if(select_usedField.value == 'weekly'){
        week_usedField.classList.remove('hidden')
    }
        else{
            week_usedField.classList.add('hidden')
        }

});


const select_userField = document.getElementById('select_user');
const for_userField = document.getElementById('for_user');

const usersListField = document.getElementById('users-list');


select_userField.addEventListener('change', function(){
    if(select_userField.value == 'patient'){
        for_userField.placeholder = 'Search for Patient';
        
    }
    else{
        for_userField.placeholder = 'Search for Professional'
    }
})

 

   
