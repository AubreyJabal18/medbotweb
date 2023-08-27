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

async function getUser(){
    const response = await fetch('/get/authenticated')
    const data = await response.json();
    return data['user'];
}

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
    getUser().then((id) => {
        renderReadingTrendsChart('weekly', trends_weekField.value, id);
    })
})

trends_monthField.addEventListener('change', function(){
    trends_weekField.value = '';
    trends_yearField.value = '';
    getUser().then((id) => {
        renderReadingTrendsChart('monthly', trends_monthField.value, id);
    })
})

trends_yearField.addEventListener('change', function(){
    trends_weekField.value = '';
    trends_monthField.value = '';
    getUser().then((id) => {
        renderReadingTrendsChart('yearly', trends_yearField.value, id);
    })
})

getUser().then((id) => {
    renderReadingTrendsChart('weekly', moment().year() + '-W' + moment().week(), id)

})

const ratingField = document.getElementById('rating');
var currentParameter = 'blood_pressure';
var selectedBy = 'weekly';
var selectedValue = '2023-W33';
var userRatingsChart = null;

async function getUserRatings(parameter, by, value) {
    const response = await fetch('/get/user_ratings?parameter=' + parameter + '&by=' + by + '&value=' + value);
    const data = await response.json();
    return data['ratings_count'];
}

function renderUserRatingsChart() {
    getUserRatings(currentParameter, selectedBy, selectedValue).then((data) => {
        var labels = [];
        var rating_counts = [];
        for (const [key, value] of Object.entries(data)) {
            labels.push(key);
            rating_counts.push(value);
        }
    
        const userRatingsData = {
            labels: ['Low', 'Normal', 'High'],
            datasets: [{
                backgroundColor: ['#FFE34F','#1BC222', '#F24242'],
                data: rating_counts,
            }]
        };
       
        const userRatingsConfig  = {
            type: 'pie',
            data: userRatingsData,
            options: {
                maintainAspectRatio: true, 
                aspectRatio: 2, 
             },
           
        };

        if (userRatingsChart != null) {
            userRatingsChart.destroy();
        }
        userRatingsChart = new Chart(
            document.getElementById('user-ratings-chart'),
            userRatingsConfig
        );
    })
}

const rating_bpField = document.getElementById('rating_bp');
const rating_bsField = document.getElementById('rating_bs');
const rating_tempField = document.getElementById('rating_temp');
const rating_prField = document.getElementById('rating_pr');
const titleField = document.getElementById('title');

rating_weekField.addEventListener('change', function(){
    selectedValue = rating_weekField.value;
    renderUserRatingsChart();
});

rating_monthField.addEventListener('change', function(){
    selectedValue = rating_monthField.value;
    renderUserRatingsChart();
});

rating_yearField.addEventListener('change', function(){
    selectedValue = rating_yearField.value;
    renderUserRatingsChart();
});

rating_selectField.addEventListener('change', function () {
    if (rating_selectField.value == 'yearly') {
        rating_yearField.classList.remove('hidden');
        rating_weekField.value = '';
        rating_monthField.value = '';
        selectedBy = rating_selectField.value;
    } 
    else {
        rating_yearField.classList.add('hidden');
    }

    if (rating_selectField.value == 'monthly') {
        rating_monthField.classList.remove('hidden');
        rating_weekField.value = '';
        rating_yearField.value = '';
        selectedBy = rating_selectField.value;
    } 
    else {
        rating_monthField.classList.add('hidden');
    }

    if (rating_selectField.value == 'weekly') {
        rating_weekField.classList.remove('hidden');
        rating_monthField.value = '';
        rating_yearField.value = '';
        selectedBy = rating_selectField.value;
    } 
    else {
        rating_weekField.classList.add('hidden');
    }
});

function deactivateAllFields() {
    rating_bpField.classList.remove('active');
    rating_bsField.classList.remove('active');
    rating_tempField.classList.remove('active');
    rating_prField.classList.remove('active');
}

rating_bpField.addEventListener('click', function () {
    currentParameter = 'blood_pressure';
    renderUserRatingsChart();
    deactivateAllFields();
    rating_bpField.classList.add('active'); 
    titleField.textContent = 'Blood Pressure'; 
});

rating_bsField.addEventListener('click', function () {
    currentParameter = 'blood_saturation';
    renderUserRatingsChart();
    deactivateAllFields();
    rating_bsField.classList.add('active'); 
    titleField.textContent = 'Oxygen Saturation'; 
});

rating_tempField.addEventListener('click', function () {
    currentParameter = 'temperature';
    renderUserRatingsChart();
    deactivateAllFields();
    rating_tempField.classList.add('active'); 
    titleField.textContent = 'Temperature'; 
});

rating_prField.addEventListener('click', function () {
    currentParameter = 'pulse_rate';
    renderUserRatingsChart();
    deactivateAllFields();
    rating_prField.classList.add('active'); 
    titleField.textContent = 'Pulse Rate'; 
});

renderUserRatingsChart();
