const bloodPressureInfo = document.getElementById('blood-pressure-info');
const bloodSaturationInfo = document.getElementById('blood-saturation-info');
const temperatureInfo = document.getElementById('temperature-info');
const pulseRateInfo = document.getElementById('pulse-rate-info');
const bloodPressureCauses = document.getElementById('blood-pressure-causes');
const bloodSaturationCauses = document.getElementById('blood-saturation-causes');
const temperatureCauses = document.getElementById('temperature-causes');
const pulseRateCauses = document.getElementById('pulse-rate-causes');


bloodPressureInfo.addEventListener('click', function() {
    if(bloodPressureCauses.classList.contains('hidden')){
        bloodPressureCauses.classList.remove('hidden');
    }
    else{
        bloodPressureCauses.classList.add('hidden');
    }

});

bloodSaturationInfo.addEventListener('click', function() {
    if(bloodSaturationCauses.classList.contains('hidden')){
        bloodSaturationCauses.classList.remove('hidden');
    }
    else{
        bloodSaturationCauses.classList.add('hidden');
    }

});

temperatureInfo.addEventListener('click', function() {
    if(temperatureCauses.classList.contains('hidden')){
        temperatureCauses.classList.remove('hidden');
    }
    else{
        temperatureCauses.classList.add('hidden');
    }

});

pulseRateInfo.addEventListener('click', function() {
    if(pulseRateCauses.classList.contains('hidden')){
        pulseRateCauses.classList.remove('hidden');
    }
    else{
        pulseRateCauses.classList.add('hidden');
    }

});


window.addEventListener('click', function(event){
    const withinBloodPressureInfo = event.composedPath().includes(bloodPressureInfo);
    const withinBloodSaturationInfo = event.composedPath().includes(bloodSaturationInfo);
    const withinTemperatureInfo = event.composedPath().includes(temperatureInfo);
    const withinPulseRateInfo = event.composedPath().includes(pulseRateInfo);
    const withinBloodPressureCauses = event.composedPath().includes(bloodPressureCauses);
    const withinBloodSaturationCauses = event.composedPath().includes(bloodSaturationCauses);
    const withinTemperatureCauses = event.composedPath().includes(temperatureCauses);
    const withinPulseRateCauses = event.composedPath().includes(pulseRateCauses);

    if((!withinBloodPressureInfo && !withinBloodPressureCauses) && (!withinBloodSaturationInfo && !withinBloodSaturationCauses) && (!withinTemperatureInfo && !withinTemperatureCauses) && (!withinPulseRateInfo && !withinPulseRateCauses)){
        if(!bloodPressureCauses.classList.contains('hidden')){
            bloodPressureCauses.classList.add('hidden');
        }
        if(!bloodSaturationCauses.classList.contains('hidden')){
            bloodSaturationCauses.classList.add('hidden');
        }
        if(!temperatureCauses.classList.contains('hidden')){
            temperatureCauses.classList.add('hidden');
        }
        if(!pulseRateCauses.classList.contains('hidden')){
            pulseRateCauses.classList.add('hidden');
        }
    }
})