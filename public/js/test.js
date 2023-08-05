const table = document.getElementById('test-table');

async function getUser(){
    const response = await fetch('/get/authenticated')
    const data = await response.json();
    return data['user'];
}

async function getUserReadings(id){
    const response = await fetch('/get/readings?id=' + id)
    const data = await response.json();
    return data['readings'];
}

getUser().then((id) => {
    getUserReadings(id).then((data) => {
        console.log(data)
        new gridjs.Grid({
        columns: ['Date', 'Blood Pressure', 'Oxygen Saturation', 'Temperature', 'Pulse Rate'],
        sort: true,
        data: data,
        className: {
            table: 'min-w-full divide-y divide-gray-600',
            thead: 'bg-gray-300',
            th: 'px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider',
            tbody: 'bg-white divide-y divide-gray-200',
            td: 'px-6 py-4 whitespace-nowrap'
        }
    }).render(table);
    })
})


