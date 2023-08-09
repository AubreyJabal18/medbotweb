// const reading_selectField = document.getElementById('reading_select');
// const reading_yearField = document.getElementById('reading_year')
// const reading_monthField = document.getElementById('reading_month');
// const reading_weekField = document.getElementById('reading_week');
// const pervasiveness_selectField = document.getElementById('pervasiveness_select');
// const pervasiveness_yearField = document.getElementById('pervasiveness_year')
// const pervasiveness_monthField = document.getElementById('pervasiveness_month');
// const pervasiveness_weekField = document.getElementById('pervasiveness_week');
const searchField = document.getElementById('search');
const search_buttonField = document.getElementById('search_button');
const form = document.getElementById('form');

// PATIENT THAT USED MEDBOT CHART//
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
// Render Patient Uses Chart

var patientUsesChart = null;

async function getPatientUses(by, value){
    const response = await fetch('/get/patient_uses?by=' + by + '&value=' + value)
    const data = await response.json();
    return data['uses'];
}

function generateRandomNum(){
    return Math.floor(Math.random() * (235 - 52 + 1) + 52);
}
function generateRandomColor(){
    return `rgb(${generateRandomNum()}, ${generateRandomNum()}, ${generateRandomNum()})`
}

function renderPatientUsesChart(by, value){
    getPatientUses(by, value).then((data) => {
        if(by == 'weekly'){
            labels = [];
            uses = [];
            backgroundColors = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                uses.push(value);
            }
            for(let i = 0; i < uses.length; i++){
                backgroundColors.push(generateRandomColor());
            }
            const patientUsesData = {
                labels: labels,
                datasets: [{
                    label: 'Patient',
                    backgroundColor: '#213E76',
                    data: uses,
                }]
            };
           
            const patientUsesConfig = {
                type: 'bar',
                data: patientUsesData,
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
            if(patientUsesChart != null){
                patientUsesChart.destroy();
            }
            patientUsesChart = new Chart(
                document.getElementById('patientUses'),
                patientUsesConfig
            );
        }
        else if(by == 'monthly'){
            labels = [];
            uses = [];
            backgroundColors = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                uses.push(value);
            }
            for(let i = 0; i < uses.length; i++){
                backgroundColors.push(generateRandomColor());
            }
            const patientUsesData = {
                labels: labels,
                datasets: [{
                    label: 'Count',
                    backgroundColor: '#213E76',
                    data: uses,
                }]
            };
            const patientUsesConfig = {
                type: 'bar',
                data: patientUsesData,
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
            if(patientUsesChart != null){
                patientUsesChart.destroy();
            }
            patientUsesChart = new Chart(
                document.getElementById('patientUses'),
                patientUsesConfig
            );
        }
        else {
            labels = [];
            uses = [];
            backgroundColors = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                uses.push(value);
            }
            for(let i = 0; i < uses.length; i++){
                backgroundColors.push(generateRandomColor());
            }
            const patientUsesData = {
                labels: labels,
                datasets: [{
                    label: 'Patient',
                    backgroundColor: '#213E76',
                    data: uses,
                }]
            };
            const patientUsesConfig = {
                type: 'bar',
                data: patientUsesData,
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
            if(patientUsesChart != null){
                patientUsesChart.destroy();
            }
            patientUsesChart = new Chart(
                document.getElementById('patientUses'),
                patientUsesConfig
            );    
        }
    })
}

weekField.addEventListener('change', function(){
    monthField.value = '';
    yearField.value = '';
    renderPatientUsesChart('weekly', weekField.value);
})

monthField.addEventListener('change', function(){
    weekField.value = '';
    yearField.value = '';
    renderPatientUsesChart('monthly', monthField.value);
})

yearField.addEventListener('change', function(){
    weekField.value = '';
    monthField.value = '';
    renderPatientUsesChart('yearly', yearField.value);
})

renderPatientUsesChart('weekly', moment().year() + '-W' + moment().week())



// PATIENT THAT REGISTERED TO MEDBOT CHART//

const registered_selectField = document.getElementById('registered_select');
const registered_yearField = document.getElementById('registered_year')
const registered_monthField = document.getElementById('registered_month');
const registered_weekField = document.getElementById('registered_week');

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

var patientRegistersChart = null;

async function getPatientRegisters(registered_by, registered_value){
    const response = await fetch('/get/patient_registers?registered_by=' + registered_by + '&registered_value=' + registered_value)
    const data = await response.json();
    return data['registers'];
}

function renderPatientRegistersChart(registered_by, registered_value){
    getPatientRegisters(registered_by, registered_value).then((data) => {
        if(registered_by == 'weekly'){
            labels = [];
            registers = [];
            backgroundColors = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                registers.push(value);
            }
            for(let i = 0; i < registers.length; i++){
                backgroundColors.push(generateRandomColor());
            }
            const patientRegistersData = {
                labels: labels,
                datasets: [{
                    label: 'Patient',
                    backgroundColor: '#7472C2',
                    data: registers,
                }]
            };
        
            const patientRegistersConfig = {
                type: 'bar',
                data: patientRegistersData,
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
            if(patientRegistersChart != null){
                patientRegistersChart.destroy();
            }
            patientRegistersChart = new Chart(
                document.getElementById('patientRegisters'),
                patientRegistersConfig
            );
        }
        else if(registered_by == 'monthly'){
            labels = [];
            registers = [];
            backgroundColors = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                registers.push(value);
            }
            for(let i = 0; i < registers.length; i++){
                backgroundColors.push(generateRandomColor());
            }
            const patientRegistersData = {
                labels: labels,
                datasets: [{
                    label: 'Patient',
                    backgroundColor: '#7472C2',
                    data: registers,
                }]
            };
            const patientRegistersConfig = {
                type: 'bar',
                data: patientRegistersData,
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
            if(patientRegistersChart != null){
                patientRegistersChart.destroy();
            }
            patientRegistersChart = new Chart(
                document.getElementById('patientRegisters'),
                patientRegistersConfig
            );
        }
        else {
            labels = [];
            registers = [];
            backgroundColors = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                registers.push(value);
            }
            for(let i = 0; i < registers.length; i++){
                backgroundColors.push(generateRandomColor());
            }    
            const patientRegistersData = {
                labels: labels,
                datasets: [{
                    label: 'Patient',
                    backgroundColor: '#7472C2',
                    data: registers,
                }]
            };
           
            const patientRegistersConfig = {
                type: 'bar',
                data: patientRegistersData,
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
            if(patientRegistersChart != null){
                patientRegistersChart.destroy();
            }
            patientRegistersChart = new Chart(
                document.getElementById('patientRegisters'),
                patientRegistersConfig
            );    
        }
    })
}

registered_weekField.addEventListener('change', function(){
    registered_monthField.value = '';
    registered_yearField.value = '';
    renderPatientRegistersChart('weekly', registered_weekField.value);
})

registered_monthField.addEventListener('change', function(){
    registered_weekField.value = '';
    registered_yearField.value = '';
    renderPatientRegistersChart('monthly', registered_monthField.value);
})

registered_yearField.addEventListener('change', function(){
    registered_weekField.value = '';
    registered_monthField.value = '';
    renderPatientRegistersChart('yearly', registered_yearField.value);
})

renderPatientRegistersChart('weekly', moment().year() + '-W' + moment().week())


// reading_selectField.addEventListener('change', function(){
//     if(reading_selectField.value == 'yearly'){
//         reading_yearField.classList.remove('hidden')
//     }
//         else{
//             reading_yearField.classList.add('hidden')   
//         }

//     if(reading_selectField.value == 'monthly'){
//         reading_monthField.classList.remove('hidden')
//     }
//         else{
//             reading_monthField.classList.add('hidden')
//         }
//     if(reading_selectField.value == 'weekly'){
//         reading_weekField.classList.remove('hidden')
//     }
//     else{
//         reading_weekField.classList.add('hidden')
//     }
 
// });

// pervasiveness_selectField.addEventListener('change', function(){
//     if(pervasiveness_selectField.value == 'yearly'){
//         pervasiveness_yearField.classList.remove('hidden')
//     }
//         else{
//             pervasiveness_yearField.classList.add('hidden')   
//         }
    
//     if(pervasiveness_selectField.value == 'monthly'){
//         pervasiveness_monthField.classList.remove('hidden')
//    }
//         else{
//             pervasiveness_monthField.classList.add('hidden')
//         }
//     if(pervasiveness_selectField.value == 'weekly'){
//         pervasiveness_weekField.classList.remove('hidden')
//     }
//         else{
//             pervasiveness_weekField.classList.add('hidden')
//         }

// });

searchField.addEventListener('change', function(){
    form.submit();
})

search_buttonField.addEventListener('change', function(){
    form.submit();
})
   
// PATIENTS COUNT BY AGE//

const select_patientByMunicipalityAge = document.getElementById('select-patientByMunicipalityAge');

select_patientByMunicipalityAge.addEventListener('change', function(){
    console.log(select_patientByMunicipalityAge.value);
})

var patientCountByAge = null;

async function getPatientCountByAge(municipality){
    const response = await fetch ('get/age_count?municipality=' + municipality)
    const data = await response.json();
    return data = ['age_count'];

// function renderPatientCountByAgeChart(municipality){
//     getPatientCountByAge(municipality).then((data) =>)
// }    

}

// PATIENTS COUNT BY SEX//

const select_patientByMunicipalitySex = document.getElementById('select-patientByMunicipalitySex');

select_patientByMunicipalitySex.addEventListener('change', function(){
    renderPatientCountBySexChart(select_patientByMunicipalitySex.value);
    console.log(select_patientByMunicipalitySex.value);
})

var patientCountBySexChart = null;

async function getPatientCountBySex(municipality){
    const response = await fetch('/get/sex_count?municipality=' + municipality)
    const data = await response.json();
    return data['sex_count'];
}
function renderPatientCountBySexChart(municipality){
    getPatientCountBySex(municipality).then((data) => {
        var females = data['female'];
        var males = data['male'];
        if(municipality == 'All'){
            var labels = [];
            var female_counts = [];
            var male_counts = [];
            for (const [key, value] of Object.entries(females)) {
                labels.push(key);
                female_counts.push(value);
            }
            for (const [key, value] of Object.entries(males)) {
                male_counts.push(value);
            }
            
        }
        else{
            var labels = [];
            var female_counts = [];
            var male_counts = [];
            for (const [key, value] of Object.entries(females)) {
                labels.push(key);
                female_counts.push(value);
            }
            for (const [key, value] of Object.entries(males)) {
                male_counts.push(value);
            }
        }

        const patientCountBySexData = {
            labels: labels,
            datasets: [{
                label: 'Female',
                backgroundColor: '#FCA0C1',
                data: female_counts,
            },{
                label: 'Male',
                backgroundColor: '#213E76',
                data: male_counts,
            }]
        };
       
        const patientCountBySexConfig = {
            type: 'bar',
            data: patientCountBySexData,
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
        if(patientCountBySexChart != null){
            patientCountBySexChart.destroy();
        }
        patientCountBySexChart = new Chart(
            document.getElementById('patientsBySex'),
            patientCountBySexConfig
        );
    } )   
}
renderPatientCountBySexChart('All');

 // PATIENT COUNT BY LOCATION//

const select_patientByMunicipalityLocation = document.getElementById('select-patientByMunicipalityLocation');

select_patientByMunicipalityLocation.addEventListener('change', function(){
    renderPatientCountByLocationChart(select_patientByMunicipalityLocation.value);
    console.log(select_patientByMunicipalityLocation.value);
})
    
var patientCountByLocationChart = null;

async function getPatientCountByLocation(municipality){
    const response = await fetch('/get/location_count?municipality=' + municipality)
    const data = await response.json();
    return data['location_count'];
}
function renderPatientCountByLocationChart(municipality){
    getPatientCountByLocation(municipality).then((data) => {
        var patients = data['patient'];
        if(municipality == 'All'){
            var labels = [];
            var patient_counts = [];
            for (const [key, value] of Object.entries(patients)) {
                labels.push(key);
                patient_counts.push(value);
            }
        }
        else{
            var labels = [];
            var patient_counts = [];
            for (const [key, value] of Object.entries(patients)) {
                labels.push(key);
                patient_counts.push(value);
            }
        }

        const patientCountByLocationData = {
            labels: labels,
            datasets: [{
                label: 'Patient',
                backgroundColor: '#276BF0',
                data: patient_counts,
            }]
        };
       
        const patientCountByLocationConfig  = {
            type: 'bar',
            data: patientCountByLocationData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                },
                legend: {
                    display: false
                }
              },
        };
        if(patientCountByLocationChart != null){
            patientCountByLocationChart.destroy();
        }
        patientCountByLocationChart = new Chart(
            document.getElementById('patientsByLocation'),
            patientCountByLocationConfig
        );
    }
)
            
} 
renderPatientCountByLocationChart('All');   







