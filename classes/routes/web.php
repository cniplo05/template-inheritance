<?php
    // namespace routes;
    use routes\Route;
    use http\PagesController;
    
    Route::set('home-dashboard',function(){
        PagesController::CreateView('home-dashboard');
    });
    Route::set('about-us',function(){
        PagesController::CreateView('about-us');
    });
    Route::set('add',function(){
        $name = $_POST['name'];
        $age = $_POST['age'];
        PagesController::NewUser($name,$age);
    });
    Route::set('tests',function(){
        PagesController::CreateView('tests');
    });
?>