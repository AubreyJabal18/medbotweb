const patients_tableField = document.getElementById('patients-table');
var activeId = 0;

async function getPatientListInProfessionalDashboard(){
    const response = await fetch('/get/patients')
    const data = await response.json();
    return data['patients_list'];
}

getPatientListInProfessionalDashboard().then((data) => {
    console.log(data);
    new gridjs.Grid({
        columns: ['Id', 'User', 'Sex', 'Birthdate', 'Address', 'Email', 
            {
                name: 'Action',
                formatter: (_, row) => gridjs.html(`<a href="/patients/dashboard?user=${row.cells[0].data}" class="text-color">Visit</a>`)
            }
        ],
        search: true,
        data: data,
        pagination: {
            limit: 5,
            summary: false
        }

    }).render(patients_tableField);
})
