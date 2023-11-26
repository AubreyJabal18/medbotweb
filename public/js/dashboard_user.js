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

let userId;
var readingTrendsChart = null;

function renderBloodPressureReadingChart(by, value, id){
    getReadings(by, value, id).then((data) => {
        if(by == 'weekly'){
            labels = [];
            readings = [];
            systolics =[];
            diastolics =[];
            mbps = [];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    const mbp = readings[i]['blood_pressure_diastolic'] +
                        (1 / 3) * (readings[i]['blood_pressure_systolic'] - readings[i]['blood_pressure_diastolic']);
                    mbps.push(mbp);
                }
                else{
                    mbps.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Blood Pressure',
                        data: mbps,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               BpLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Blood Pressure Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                BpNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Blood Pressure Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                BpHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Blood Pressure High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            diastolics =[];
            mbps = [];
            console.log(data)
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    const mbp = readings[i]['blood_pressure_diastolic'] +
                        (1 / 3) * (readings[i]['blood_pressure_systolic'] - readings[i]['blood_pressure_diastolic']);
                    mbps.push(mbp);
                }
                else{
                    mbps.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets:[
                    {
                    label: 'Blood Pressure',
                        data: mbps,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    },
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
            diastolics =[];
            mbps = [];
            console.log(data)
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    const mbp = readings[i]['blood_pressure_diastolic'] +
                        (1 / 3) * (readings[i]['blood_pressure_systolic'] - readings[i]['blood_pressure_diastolic']);
                    mbps.push(mbp);
                }
                else{
                    mbps.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Blood Pressure',
                        data: mbps,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
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

function renderBloodSaturationReadingChart(by, value, id){
    getReadings(by, value, id).then((data) => {
        if(by == 'weekly'){
            labels = [];
            readings = [];
            bloodSaturation =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    bloodSaturation.push(readings[i]['blood_saturation']);
                }
                else{
                    bloodSaturation.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Oxygen Saturation',
                        data: bloodSaturation,
                        fill: false,
                        borderColor: 'red',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               OsLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                OsNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                OsHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            bloodSaturation =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    bloodSaturation.push(readings[i]['blood_saturation']);
                }
                else{
                    bloodSaturation.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Oxygen Saturation',
                        data: bloodSaturation,
                        fill: false,
                        borderColor: 'red',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               OsLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                OsNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                OsHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            bloodSaturation =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    bloodSaturation.push(readings[i]['blood_saturation']);
                }
                else{
                    bloodSaturation.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Oxygen Saturation',
                        data: bloodSaturation,
                        fill: false,
                        borderColor: 'red',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               OsLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                OsNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                OsHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Oxygen Saturation High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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

function renderTemperatureReadingChart(by, value, id){
    getReadings(by, value, id).then((data) => {
        if(by == 'weekly'){
            labels = [];
            readings = [];
            temperature =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    temperature.push(readings[i]['temperature']);
                }
                else{
                    temperature.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Temperature',
                        data: temperature,
                        fill: false,
                        borderColor: 'orange',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               TempLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                TempNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                TempHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            temperature =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    temperature.push(readings[i]['temperature']);
                }
                else{
                    temperature.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Temperature',
                        data: temperature,
                        fill: false,
                        borderColor: 'orange',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               TempLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                TempNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                TempHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            temperature =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
            }
            for(let i = 0; i < readings.length; i++){
                if(readings[i] != null){
                    temperature.push(readings[i]['temperature']);
                }
                else{
                    temperature.push(0);
                }
            }

            const readingTrendsData = {
                labels: labels,
                datasets: [
                    {
                    label: 'Temperature',
                        data: temperature,
                        fill: false,
                        borderColor: 'orange',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               TempLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                TempNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                TempHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Temperature High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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

function renderPulseRateReadingChart(by, value, id){
    getReadings(by, value, id).then((data) => {
        if(by == 'weekly'){
            labels = [];
            readings = [];
            pulseRate =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
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
                    label: 'Pulse Rate',
                        data: temperature,
                        fill: false,
                        borderColor: 'violet',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               PrLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                PrNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                PrHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            pulseRate =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
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
                    label: 'Pulse Rate',
                        data: temperature,
                        fill: false,
                        borderColor: 'violet',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               PrLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                PrNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                PrHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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
            pulseRate =[];
            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                readings.push(value);
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
                    label: 'Pulse Rate',
                        data: temperature,
                        fill: false,
                        borderColor: 'violet',
                        tension: 0.1
                    },
                    
                ]
            };

            const readingTrendsConfig = {
                type: 'line',
                data: readingTrendsData,
                options: {
                    plugins: {
                        annotation: {
                            annotations: {
                               PrLowLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 30,
                                    borderColor: 'rgb(0, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate Low',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                PrNormalLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 60,
                                    borderColor: 'rgb(255, 255, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate Normal',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                                PrHighLine: {
                                    type: 'line',
                                    mode: 'horizontal',
                                    scaleID: 'y',
                                    value: 120,
                                    borderColor: 'rgb(255, 0, 0)',
                                    borderWidth: 2,
                                    label: {
                                        content: 'Pulse Rate High',
                                        enabled: true,
                                        position: 'left',
                                    },
                                },
                            }
                        }
                    }
                }
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

const reading_bpField = document.getElementById('reading_bp');
const reading_bsField = document.getElementById('reading_bs');
const reading_tempField = document.getElementById('reading_temp');
const reading_prField = document.getElementById('reading_pr');
const reading_titleField = document.getElementById('reading_title');

function deactivateAllReadingFields() {
    reading_bpField.classList.remove('active');
    reading_bsField.classList.remove('active');
    reading_tempField.classList.remove('active');
    reading_prField.classList.remove('active');
}

function updateChart(parameter, id) {
    currentParameter = 'blood_pressure';
    by = trends_selectField.value;
    value = '';
    if(by == 'weekly'){
        value = trends_weekField.value; 
    }
    else if(by == 'monthly'){
        value = trends_monthField.value;
    }
    else if(by == 'yeerly'){
        value = trends_yearField.value;
    }
    deactivateAllReadingFields();

    if (parameter === 'blood_pressure') {
        renderBloodPressureReadingChart(by, value, id);
    } else if (parameter === 'blood_saturation') {
        renderBloodSaturationReadingChart(by, value, id);
    } else if (parameter === 'temperature') {
        renderTemperatureReadingChart(by, value, id);
    } else if (parameter === 'pulse_rate') {
        renderPulseRateReadingChart(by, value, id);
    }
}

reading_bpField.addEventListener('click', function () {
    getUser().then((id) => {
        updateChart('blood_pressure', id);
    });
    reading_bpField.classList.add('active');
    reading_titleField.textContent = 'Blood Pressure';
});

reading_bsField.addEventListener('click', function () {
    getUser().then((id) => {
        updateChart('blood_saturation', id);
    });
    reading_bsField.classList.add('active');
    reading_titleField.textContent = 'Oxygen Saturation';
});

reading_tempField.addEventListener('click', function () {
    getUser().then((id) => {
        updateChart('temperature', id);
    });
    reading_tempField.classList.add('active');
    reading_titleField.textContent = 'Temperature';
});

reading_prField.addEventListener('click', function () {
    getUser().then((id) => {
        updateChart('pulse_rate', id);
    });
    reading_prField.classList.add('active');
    reading_titleField.textContent = 'Pulse Rate';
});

trends_weekField.addEventListener('change', function(){
    trends_monthField.value = '';
    trends_yearField.value = '';
    getUser().then((id) => {
        renderBloodPressureReadingChart('weekly', trends_weekField.value, id);
    });
});

trends_monthField.addEventListener('change', function(){
    trends_weekField.value = '';
    trends_yearField.value = '';
    getUser().then((id) => {
        renderBloodPressureReadingChart('monthly', trends_monthField.value, id);
    });
});

trends_yearField.addEventListener('change', function(){
    trends_weekField.value = '';
    trends_monthField.value = '';
    getUser().then((id) => {
        renderBloodPressureReadingChart('yearly', trends_yearField.value, id);
    });
});


getUser().then((id) => {
    userId = id;
    renderBloodPressureReadingChart('weekly', moment().year() + '-W' + moment().week(), id);
});



//readings rating of patient//

const ratingField = document.getElementById('rating');
var currentParameter = 'blood_pressure';
var selectedBy = 'weekly';
var selectedValue = moment().year() + '-W' + moment().week();
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
                backgroundColor: ['#38B6FF','#1BC222', '#F24242'],
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
