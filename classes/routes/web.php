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
?>