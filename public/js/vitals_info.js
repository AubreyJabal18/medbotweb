const bloodPressureInfo = document.getElementById('blood-pressure-info');
const bloodSaturationInfo = document.getElementById('blood-saturation-info');
const TemperatureInfo = document.getElementById('temperature-info');
const pulseRateInfo = document.getElementById('pulse-rate-info');
const bloodPressureCauses = document.getElementById('blood-pressure-causes');
const bloodSaturationCauses = document.getElementById('blood-saturation-causes');
const TemperatureCauses = document.getElementById('temperature-causes');
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

TemperatureInfo.addEventListener('click', function() {
    if(TemperatureCauses.classList.contains('hidden')){
        TemperatureCauses.classList.remove('hidden');
    }
    else{
        TemperatureCauses.classList.add('hidden');
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