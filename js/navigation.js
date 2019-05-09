

function home(){
    hideAll();
    $("#home").show();
    $("#home-button").addClass("active");
}

function rockets(){
    hideAll();
    $("#rockets").show();
    $("#rockets-button").addClass("active");    
}

function beyond(){
    hideAll();
    $("#beyond").show();
    $("#beyond-button").addClass("active");    
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
    $("#about-button").addClass("active");
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
    $("#beyond").hide();

    $("#home-button").removeClass("active");
    $("#about-button").removeClass("active");
    $("#rockets-button").removeClass("active");
    $("#beyond-button").removeClass("active");
}