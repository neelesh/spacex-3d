<?php
Route::set('index.php', function(){
    Home::CreateView('Home');
});

Route::set('about', function(){
    About::CreateView('About');
});

Route::set('rockets', function(){
    Rockets::CreateView('Rockets');
});

?>