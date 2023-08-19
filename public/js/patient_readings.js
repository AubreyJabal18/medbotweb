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
                `<div class="flex flex-row items-center justify-center">
                    <img src="/images/dashboard/${data[i][3]}.svg" class="w-6 h-6 mr-2">${data[i][2]}
                </div>`
            ),
            gridjs.html(
                `<div class="flex flex-row items-center justify-center">
                    <img src="/images/dashboard/${data[i][5]}.svg" class="w-6 h-6 mr-2">${data[i][4]}
                </div>`
            ),
            gridjs.html(
                `<div class="flex flex-row items-center justify-center">
                    <img src="/images/dashboard/${data[i][7]}.svg" class="w-6 h-6 mr-2">${data[i][6]}
                </div>`
            ),
            gridjs.html(
                `<div class="flex flex-row items-center justify-center">
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
            name:'Date', 
            width:'15%'
        },
        {
            name:'Time',
            width:'15%'}, 
        {
            name: 'Blood Pressure', 
            width: '15%'
        },
        {
            name:'Oxygen Saturation', 
            width:'15%',
        },        
        {
            name:'Temperature', 
            width:'15%',
        },           
        {
            name:'Pulse Rate', 
            width:'15%',
        }
    ],
    
    sort: true,
    resizable: true,
    data: formattedData,
    className: {
        table: 'min-w-full divide-y divide-gray-700',
        thead: 'bg-gray-200',
        th: 'px-6 py-3 text-left text-base bg-gray-300 font-medium tracking-wider',
        tbody: 'bg-white divide-y divide-gray-300',
        td: 'px-4 py-4 whitespace-nowrap'
    },

    style: {

        th: {
        'background-color': 'bg-gray-200',
        color: 'gray',
        'border-bottom': '2px solid black',
        'text-align': 'center',
        textTransform: 'uppercase',
        'font-size':'14px'
        },

        td: {
        'text-align': 'center',
        border:'1px solid gray',    
        'background-color':'white',

        
        },
    },  
    
        }).render(table);
})


