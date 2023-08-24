const confirmDeleteOverlay = document.getElementById('confirm-delete-overlay');
const noticeDeletePatientModal = document.getElementById('notice-delete-patient');
const cancelButton = document.getElementById('cancel-button');
const deleteButton = document.getElementById('delete-button');
const deleteForm = document.getElementById('delete-form');
const deleteIdField = document.getElementById('delete-id');
const deleteField = document.querySelectorAll('.delete');
var activeCardId = -1;

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
            columns: ['Id', 'Id Number', 'Type', 'Sex', 'Birthdate', 'Address', 
                {
                    name: 'Action',
                    formatter: (cell, row) => {
                        return gridjs.h('button',{
                            className: 'py-1 mb-4 px-2 border rounded-full rounded-md text-white bg-color',
                            onClick: () => {
                                openNoticeDeletePatientModal();
                                activeCardId = row.cells[0].data;
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
                limit: 10,
                summary: false
            },
            sort: true,
            className:{
                th: 'text-roboto text-black'
            }
    
        }).render(users_tableField);
    }
)

//FOR DELETING USER IN USERS LIST//

function closeNoticeDeletePatientModal(){
    if (!confirmDeleteOverlay.classList.contains('hidden')){
        confirmDeleteOverlay.classList.add('hidden');
        noticeDeletePatientModal.classList.add('hidden');
    }
}

function openNoticeDeletePatientModal(){
    if (confirmDeleteOverlay.classList.contains('hidden')){
        confirmDeleteOverlay.classList.remove('hidden');
        noticeDeletePatientModal.classList.remove('hidden');
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
    deleteIdField.value = activeCardId;      
    deleteForm.submit();
});

//FOR USERS BY MUNICIPALITY GRAPH//

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



//FOR USERS WHO USED EHNACED MED-BOT GRAPH//


const selectField = document.getElementById('select');
const yearField = document.getElementById('year')
const monthField = document.getElementById('month');
const weekField = document.getElementById('week');

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



async function getUsersCountByUsed(by, value){
    const response = await fetch('/get/used_count?by=' + by + '&value=' + value)
    const data = await response.json();
    return data['users_count'];
    
}

var usersCountByUsedChart = null;

function renderUsersCountByUsedChart(by, value){
    getUsersCountByUsed(by, value).then((data) => {
        console.log(data);
        var patients = data['patient'];
        var professionals = data['professional'];
        if(by == 'weekly'){
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
        else if(by == 'monthly'){
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
        else {
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

        const usersCountByUsedData = {
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
        
        const usersCountByUsedConfig = { 
            type: 'bar',    
            data: usersCountByUsedData,
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
        if( usersCountByUsedChart != null){
            usersCountByUsedChart.destroy();
        }
        usersCountByUsedChart = new Chart(
            document.getElementById('countUsed'),
            usersCountByUsedConfig
        );  
    })
}

weekField.addEventListener('change', function(){
    monthField.value = '';
    yearField.value = '';
    console.log(weekField.value);
    renderUsersCountByUsedChart('weekly', weekField.value);
})

monthField.addEventListener('change', function(){
    weekField.value = '';
    yearField.value = '';
    console.log(monthField.value);
    renderUsersCountByUsedChart('monthly', monthField.value);
})

yearField.addEventListener('change', function(){
    weekField.value = '';
    monthField.value = '';
    console.log(yearField.value);
    renderUsersCountByUsedChart('yearly', yearField.value);
})

renderUsersCountByUsedChart('weekly', moment().year() + '-W' + moment().week())
















