

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
    $("#booster").show();

}


function falcon9(){
    hideModels();
    $("#falcon9").show();

}


function about(){
    hideAll();
    $("#about").show();
}


function hideModels(){
    $("#starhopper").hide();
    $("#starship").hide();
    $("#booster").hide();
    $("#falcon9").hide();
}

function hideAll(){
    $("#home").hide();
    $("#about").hide();
    $("#rockets").hide();
}