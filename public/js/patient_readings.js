const table = document.getElementById('reading-table');
const idField = document.getElementById('user-id');

id = idField.value;
// console.log(id);

async function getPatientReadingsInProfessionalDashboard(id){
    const response = await fetch('/get/patient/readings?id=' + id)
    const data = await response.json();
    return data['readings'];
}

getPatientReadingsInProfessionalDashboard(id).then((data) => {
    formattedData = [];
    for(let i = 0; i < data.length; i++){
        
        temp = [
            data[i][0],
            data[i][1],
            gridjs.html(
                `<div class="flex flex-row items-center justify-evenly">
                    <img src="/images/dashboard/${data[i][3]}.svg" class="w-6 h-6 md:mr-2">${data[i][2]}
                </div>`
            ),
            gridjs.html(
                `<div class="flex flex-row items-center justify-evenly">
                    <img src="/images/dashboard/${data[i][5]}.svg" class="w-6 h-6 mr-2">${data[i][4]}
                </div>`
            ),
            gridjs.html(
                `<div class="flex flex-row items-center justify-evenly">
                    <img src="/images/dashboard/${data[i][7]}.svg" class="w-6 h-6 mr-2">${data[i][6]}
                </div>`
            ),
            gridjs.html(
                `<div class="flex flex-row items-center justify-evenly">
                    <img src="/images/dashboard/${data[i][9]}.svg" class="w-6 h-6 mr-2">${data[i][8]}
                </div>`
            ),
        ]
        formattedData.push(temp)
    }
    console.log(formattedData)
    new gridjs.Grid({
    columns: [
        {
            name:'Date'
        },
        {
            name:'Time'
        }, 
        {
            name: 'Blood Pressure'
        },
        {
            name:'Oxygen Saturation'
        },        
        {
            name:'Temperature'
        },           
        {
            name:'Pulse Rate'
        }
    ],
    
    sort: true,
    resizable: true,
    data: formattedData,
    style: { 
        table: { 
          'white-space': 'nowrap'
        },
        th: {
            'text-align': 'center'
        },
        td:{
            'text-align': 'center'
        }
      },
    }).render(table);
})


