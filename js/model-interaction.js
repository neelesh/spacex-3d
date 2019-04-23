var spinning = true;
var lightOn = true;

function spin(namespace) {
    spinning = !spinning;
    document.getElementById(namespace+'__TouchSensor001-SENSOR').setAttribute('enabled', spinning.toString());
}

function wireframe(namespace) {
    var e = document.getElementById(namespace).getElementsByClassName("x3dmodel")[0];
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

function lighting(namespace) {
    lightOn = !lightOn;
    document.getElementById(namespace+'__Omni001').setAttribute('on', lightOn.toString());
    document.getElementById(namespace+'__Omni002').setAttribute('on', lightOn.toString());
    document.getElementById(namespace+'__Omni003').setAttribute('on', lightOn.toString());
    document.getElementById(namespace+'__Omni004').setAttribute('on', lightOn.toString());
}

function front(namespace) {
    document.getElementById(namespace+'__FRONT').setAttribute('bind', 'true');
}

function back(namespace) {
    document.getElementById(namespace+'__BACK').setAttribute('bind', 'true');
}


function above(namespace) {
    document.getElementById(namespace+'__ABOVE').setAttribute('bind', 'true');
}


function bottom(namespace) {
    document.getElementById(namespace+'__BOTTOM').setAttribute('bind', 'true');
}