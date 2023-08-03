const select_usedField = document.getElementById('select_used');
const year_usedField = document.getElementById('year_used')
const month_usedField = document.getElementById('month_used');
const week_usedField = document.getElementById('week_used');

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



// async function getPatientList(){
//     const response = await fetch('/get/patient_list');
//     const users = await response.json();
//     console.log(users['users'][0]);
// }

// getPatientList();

// var patientUserTable = null;


// axios.then(
//     (response) =>{
   
//        this.setState({
//          patient: response.data
//        });
//      }
//    );


const select_usersByMunicipalityField = document.getElementById('select-usersByMunicipality');

select_usersByMunicipalityField.addEventListener('change', function(){
    console.log(select_usersByMunicipalityField.value);
})


var usersCountChart = null;
 
async function getUsersCount(by, value){
    const response = await fetch('/get/users_count?by=' + by + '&value=' + value)
    const data = await response.json();
    return data['users_count'];
}

function renderUsersCountChart(by, value){
        getUsersCount(by, value).then((data) => {
            if(by == 'All'){
                labels = ['Boac', 'Gasan', 'Buenavista' , 'Torrijos', 'Sta.Cruz', 'Mogpog'];
                count = [];
                backgroundColors = [];
                for (const [key, value] of Object.entries(data)) {
                    labels.push(key);
                    count.push(value);
                }
                for(let i = 0; i < uses.length; i++){
                
                }
                const usersCountData = {
                    labels: labels,
                    datasets: [{
                        label: 'Count',
                        backgroundColor: '#213E76',
                        data: count,
                    }]
                };
               
                const usersCountConfig = {
                    type: 'bar',
                    data: usersCountData,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
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
        }
    )
                
}        

 

   
