const trends_selectField = document.getElementById('trends_select');
const trends_yearField = document.getElementById('trends_year')
const trends_monthField = document.getElementById('trends_month');
const trends_weekField = document.getElementById('trends_week');
const rating_selectField = document.getElementById('rating_select');
const rating_yearField = document.getElementById('rating_year')
const rating_monthField = document.getElementById('rating_month');
const rating_weekField = document.getElementById('rating_week');
const idField = document.getElementById('user-id');
const id = idField.value;

trends_selectField.addEventListener('change', function(){
    if(trends_selectField.value == 'yearly'){
        trends_yearField.classList.remove('hidden')
    }
    else{
        trends_yearField.classList.add('hidden')   
    }

    if(trends_selectField.value == 'monthly'){
        trends_monthField.classList.remove('hidden')
    }
    else{
        trends_monthField.classList.add('hidden')
    }
    
    if(trends_selectField.value == 'weekly'){
        trends_weekField.classList.remove('hidden')
    }
    else{
        trends_weekField.classList.add('hidden')
    }
});

rating_selectField.addEventListener('change', function(){
    if(rating_selectField.value == 'yearly'){
        rating_yearField.classList.remove('hidden')
    }
    else{
        rating_yearField.classList.add('hidden')   
    }

    if(rating_selectField.value == 'monthly'){
        rating_monthField.classList.remove('hidden')
    }
    else{
        rating_monthField.classList.add('hidden')
    }

    if(rating_selectField.value == 'weekly'){
        rating_weekField.classList.remove('hidden')
    }
    else{
        rating_weekField.classList.add('hidden')
    }
});

// Render Reading Trends Chart

async function getReadings(by, value, id){
    const response = await fetch('/get/reading_trends?by=' + by + '&value=' + value + '&id=' + id);
    const data = await response.json();
    return data['readings'];
}

var readingTrendsChart = null;

function renderReadingTrendsChart(by, value, id){
    getReadings(by, value, id).then((data) => {
        if(by == 'weekly'){
            labels = [];
            readings = [];
            systolics =[];
            diastolics = [];
            bloodSaturation =[];
            temperature =[];
            pulseRate =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    systolics.push(readings[i]['blood_pressure_systolic']);
                }
                else{
                    systolics.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    diastolics.push(readings[i]['blood_pressure_diastolic']);
                }
                else{
                    diastolics.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    bloodSaturation.push(readings[i]['blood_saturation']);
                }
                else{
                    bloodSaturation.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    temperature.push(readings[i]['temperature']);
                }
                else{
                    temperature.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    pulseRate.push(readings[i]['pulse_rate']);
                }
                else{
                    pulseRate.push(0);
                }
            }
            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Systolic',
                        data: systolics,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    },
                    {
                        label: 'Diastolic',
                        data: diastolics,
                        fill: false,
                        borderColor: 'rgb(23, 202, 92)',
                        tension: 0.1
                    },
                    {
                        label: 'Blood Saturation',
                        data: bloodSaturation,
                        fill: false,
                        borderColor: 'red',
                        tension: 0.1
                    },
                    {
                        label: 'Temperature',
                        data: temperature,
                        fill: false,
                        borderColor: 'orange',
                        tension: 0.1
                    },
                    {
                        label: 'Pulse Rate',
                        data: pulseRate,
                        fill: false,
                        borderColor: 'violet',
                        tension: 0.1
                    }
                    
                ]
            };
            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
            };
            if(readingTrendsChart != null){
                readingTrendsChart.destroy();
            }
            readingTrendsChart = new Chart(
                document.getElementById('reading-trends'),
                readingTrendsConfig
            )
        }
        else if(by == 'monthly'){
            labels = [];
            readings = [];
            systolics =[];
            diastolics = [];
            bloodSaturation =[];
            temperature =[];
            pulseRate =[];
            console.log(data)
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    systolics.push(readings[i]['blood_pressure_systolic']);
                }
                else{
                    systolics.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    diastolics.push(readings[i]['blood_pressure_diastolic']);
                }
                else{
                    diastolics.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    bloodSaturation.push(readings[i]['blood_saturation']);
                }
                else{
                    bloodSaturation.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    temperature.push(readings[i]['temperature']);
                }
                else{
                    temperature.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    pulseRate.push(readings[i]['pulse_rate']);
                }
                else{
                    pulseRate.push(0);
                }
            }
            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Systolic',
                        data: systolics,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    },
                    {
                        label: 'Diastolic',
                        data: diastolics,
                        fill: false,
                        borderColor: 'rgb(23, 202, 92)',
                        tension: 0.1
                    },
                    {
                        label: 'Blood Saturation',
                        data: bloodSaturation,
                        fill: false,
                        borderColor: 'red',
                        tension: 0.1
                    },
                    {
                        label: 'Temperature',
                        data: temperature,
                        fill: false,
                        borderColor: 'orange',
                        tension: 0.1
                    },
                    {
                        label: 'Pulse Rate',
                        data: pulseRate,
                        fill: false,
                        borderColor: 'violet',
                        tension: 0.1
                    }
                    
                ]
            };
            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
            };
            if(readingTrendsChart != null){
                readingTrendsChart.destroy();
            }
            readingTrendsChart = new Chart(
                document.getElementById('reading-trends'),
                readingTrendsConfig
            )
        }
        else if(by == 'yearly'){
            labels = [];
            readings = [];
            systolics =[];
            diastolics = [];
            bloodSaturation =[];
            temperature =[];
            pulseRate =[];
            console.log(data)
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    systolics.push(readings[i]['blood_pressure_systolic']);
                }
                else{
                    systolics.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    diastolics.push(readings[i]['blood_pressure_diastolic']);
                }
                else{
                    diastolics.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    bloodSaturation.push(readings[i]['blood_saturation']);
                }
                else{
                    bloodSaturation.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    temperature.push(readings[i]['temperature']);
                }
                else{
                    temperature.push(0);
                }
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    pulseRate.push(readings[i]['pulse_rate']);
                }
                else{
                    pulseRate.push(0);
                }
            }
            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Systolic',
                        data: systolics,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    },
                    {
                        label: 'Diastolic',
                        data: diastolics,
                        fill: false,
                        borderColor: 'rgb(23, 202, 92)',
                        tension: 0.1
                    },
                    {
                        label: 'Blood Saturation',
                        data: bloodSaturation,
                        fill: false,
                        borderColor: 'red',
                        tension: 0.1
                    },
                    {
                        label: 'Temperature',
                        data: temperature,
                        fill: false,
                        borderColor: 'orange',
                        tension: 0.1
                    },
                    {
                        label: 'Pulse Rate',
                        data: pulseRate,
                        fill: false,
                        borderColor: 'violet',
                        tension: 0.1
                    }
                    
                ]
            };
            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
            };
            if(readingTrendsChart != null){
                readingTrendsChart.destroy();
            }
            readingTrendsChart = new Chart(
                document.getElementById('reading-trends'),
                readingTrendsConfig
            )
        }
    })
    
}

trends_weekField.addEventListener('change', function(){
    trends_monthField.value = '';
    trends_yearField.value = '';
    renderReadingTrendsChart('weekly', trends_weekField.value, id);
})

trends_monthField.addEventListener('change', function(){
    trends_weekField.value = '';
    trends_yearField.value = '';
    renderReadingTrendsChart('monthly', trends_monthField.value, id);
})

trends_yearField.addEventListener('change', function(){
    trends_weekField.value = '';
    trends_monthField.value = '';
    renderReadingTrendsChart('yearly', trends_yearField.value, id);
})

renderReadingTrendsChart('weekly', moment().year() + '-W' + moment().week(), id)
