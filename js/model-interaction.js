var spinning = true;
var lightOn = true;

function spin() {
    spinning = !spinning;
    document.getElementById('starhopper__TouchSensor001-SENSOR').setAttribute('enabled', spinning.toString());
}

function wireframe() {
    var e = document.getElementById('model3D');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

function lighting() {
    lightOn = !lightOn;
    document.getElementById('starhopper__Omni001').setAttribute('on', lightOn.toString());
    document.getElementById('starhopper__Omni002').setAttribute('on', lightOn.toString());
    document.getElementById('starhopper__Omni003').setAttribute('on', lightOn.toString());
    document.getElementById('starhopper__Omni004').setAttribute('on', lightOn.toString());
}

function cam1() {
    document.getElementById('starhopper__FRONT').setAttribute('bind', 'true');
}

function cam2() {
    document.getElementById('starhopper__BACK').setAttribute('bind', 'true');
}