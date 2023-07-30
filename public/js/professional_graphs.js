async function getUsers(){
    const response = await fetch('/get/users');
    const users = await response.json();
    console.log(users['users'][0]);
}

getUsers();

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

renderPatientUsesChart('weekly', '2023-W29')


async function getRegister(){
    const response = await fetch('/get/registers');
    const users = await response.json();
    console.log(users['users'][0]);
}

getRegister();

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
                    label: 'Count',
                    backgroundColor: '#213E76',
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
                    label: 'Count',
                    backgroundColor: '#213E76',
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
                    label: 'Count',
                    backgroundColor: '#213E76',
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

renderPatientRegistersChart('weekly', '2023-W29')

async function getReadings(){
    const response = await fetch('/get/readings');
    const users = await response.json();
    console.log(users['users'][0]);
}

getReadings();

var patientReadingsChart = null;

async function getPatientReadings(reading_by, reading_value){
    const response = await fetch('/get/patient_readings?reading_by=' + registered_by + '&reading_value=' + registered_value + '&reading_byMunicipality=' + reading_byMunicipality)
    const data = await response.json();
    return data['patient_readings'];
}
