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
        resizable: true,
        data: data,
        className: {
            table: 'min-w-full divide-y divide-gray-700',
            thead: 'bg-gray-700',
            th: 'px-6 py-3 text-left text-base bg-gray-300 font-medium text-black tracking-wider',
            tbody: 'bg-white divide-y divide-gray-300',
            td: 'px-6 py-4 whitespace-nowrap'
        },

        style: {
            table: {
              border: '3px solid black'
            },
            th: {
              'background-color': 'rgba(0, 0, 0, 0.1)',
              color: 'black',
              'border-bottom': '3px solid black',
              'text-align': 'center'
            },
            td: {
              'text-align': 'center'
            }
          }


        }).render(table);
    })
})


