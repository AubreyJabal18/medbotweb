const table = document.getElementById('readings-table');

async function getUser(){
    const response = await fetch('/get/authenticated')
    const data = await response.json();
    return data['user'];
}

async function getProfessionalReadings(id){
    const response = await fetch('/get/professional_readings?id=' + id)
    const data = await response.json();
    return data['readings'];
}

getUser().then((id) => {
    getProfessionalReadings(id).then((data) => {
        console.log(data)
        new gridjs.Grid({
        columns: ['Date', 'Blood Pressure', 'Oxygen Saturation', 'Temperature', 'Pulse Rate'],
        sort: true,
        pagination: {
            limit: 10,
            summary: false
        },
        data: data,
        className: {
            table: 'min-w-full divide-y divide-gray-700',
            thead: 'bg-gray-300',
            th: 'px-6 py-3 text-left text-base bg-gray-300 font-medium text-black tracking-wider',
            tbody: 'bg-white divide-y divide-gray-300',
            td: 'px-6 py-4 whitespace-nowrap'
        },

        style: {
            th: {
              'background-color': 'bg-gray-200',
              color: 'gray',
              'border-bottom': '2px solid black',
              'text-align': 'center',
              textTransform: 'uppercase'
            },
            td: {
              'text-align': 'center',
              border:'1px solid gray',
              'background-color':'white'
            },
        },
    }).render(table);
    })
})


