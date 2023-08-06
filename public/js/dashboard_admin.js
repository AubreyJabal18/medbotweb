const select_usedField = document.getElementById('select_used');
const year_usedField = document.getElementById('year_used')
const month_usedField = document.getElementById('month_used');
const week_usedField = document.getElementById('week_used');

const select_usersByMunicipalityField = document.getElementById('select-usersByMunicipality');
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
                    backgroundColor: '#19FBC5',
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


// select_usedField.addEventListener('change', function(){
//     if(select_usedField.value == 'yearly'){
//         year_usedField.classList.remove('hidden')
//     }
//         else{
//             year_usedField.classList.add('hidden')   
//         }
    
//     if(select_usedField.value == 'monthly'){
//         month_usedField.classList.remove('hidden')
//    }
//         else{
//             month_usedField.classList.add('hidden')
//         }
//     if(select_usedField.value == 'weekly'){
//         week_usedField.classList.remove('hidden')
//     }
//         else{
//             week_usedField.classList.add('hidden')
//         }

// });

//FOR USERS LIST TABLE//

const users_tableField = document.getElementById('users-table');

async function getUserListInAdminDashboard(){
    const response = await fetch('/get/users_list')
    const data = await response.json();
    return data['users-list'];
    }

getUserListInAdminDashboard().then((data) => {
        console.log(data);
        new gridjs.Grid({
            columns: ['Id', 'User', 'Type', 'Sex', 'Birthdate', 'Address', 'Email', 
                {
                    name: 'Action',
                    formatter: (cell, row) => {
                        return gridjs.h('button',{
                            className: 'py-1 mb-4 px-2 border rounded-full rounded-md text-white bg-color',
                            onClick: () => {
                                openNoticeDeletePatientModal();
                                activeId = row.cells[0].data;
                                console.log(activeId);
                            },
                        }, 'Remove'   
                    );
                }
                }    
            ],
            search: true,
            autoWidth: true,
            data: data,
            pagination: {
                limit: 5,
                summary: false
            },
            sort: true, 
    
        }).render(users_tableField);
    }
)

const confirmDeleteOverlay = document.getElementById('confirm-delete-overlay');
const noticeDeletePatientModal = document.getElementById('notice-delete-patient');
const cancelButton = document.getElementById('cancel-button');
const deleteButton = document.getElementById('delete-button');
const deleteForm = document.getElementById('delete-form');
const deleteIdField = document.getElementById('delete-id');

function openNoticeDeletePatientModal(){
    if (confirmDeleteOverlay.classList.contains('hidden')){
        confirmDeleteOverlay.classList.remove('hidden');
        noticeDeletePatientModal.classList.remove('hidden');
    }
}

function closeNoticeDeletePatientModal(){
    if (!confirmDeleteOverlay.classList.contains('hidden')){
        confirmDeleteOverlay.classList.add('hidden');
        noticeDeletePatientModal.classList.add('hidden');
    }
}

confirmDeleteOverlay.addEventListener('click', closeNoticeDeletePatientModal);
cancelButton.addEventListener('click', closeNoticeDeletePatientModal);
window.addEventListener('keydown', function(event){
    if(event.key == 'Escape'){
        closeNoticeDeletePatientModal();
    }
});

deleteButton.addEventListener('click', function(){

});

