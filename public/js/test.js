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
        new gridjs.Grid({
        columns: [
            {name:'Date', width:'15%'},
            {name:'Time', width:'15%'}, 
            {name: 'Blood Pressure', width: '15%',
                formatter: (cell, row) => {
                    const blood_pressure_rating = row.cells[2];
                    let ratingImage = '';
                
                    if (blood_pressure_rating == 'low') {
                        ratingImage = '/images/dashboard/low.svg';
                    } else if (blood_pressure_rating == 'normal') {
                        ratingImage = '/images/dashboard/normal.svg';
                    } else if (blood_pressure_rating == 'high') {
                        ratingImage = '/images/dashboard/high.svg';
                    }
                
                    return gridjs.html(`
                    <div class="text-center">
                        <div class="flex flex-row items-center justify-center">
                            <div><img src="${ratingImage}" class="w-8 h-8 mx-auto"></div>
                            <div>${cell}</div>
                        </div>
                    </div>`);
                }},
            {name:'Oxygen Saturation', width:'15%'},        
            {name:'Temperature', width:'15%'},           
            {name:'Pulse Rate', width:'15%'}
        ],
        
        sort: true,
        resizable: true,
        data: data,
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
})


