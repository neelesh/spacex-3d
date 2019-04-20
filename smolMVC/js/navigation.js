

function home(){
    hideAll();
    $("#home").show();
}

function rockets(){
    hideAll();
    $("#rockets").show();
}

function starhopper(){
    hideModels();
    $("#starhopper").show();
}

function starship(){
    hideModels();
    $("#starship").show();
}

function booster(){
    hideModels();
    $("#superheavy_booster").show();

}


function its(){
    hideModels();
    $("#its").show();

}


function about(){
    hideAll();
    $("#about").show();
}


function hideModels(){
    $("#starhopper").hide();
    $("#starship").hide();
    $("#superheavy_booster").hide();
    $("#its").hide();
}

function hideAll(){
    $("#home").hide();
    $("#about").hide();
    $("#rockets").hide();
}