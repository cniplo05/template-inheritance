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

    Route::set('tests',function(){
        $data = [ 'asd','zxc','qwe'];
        PagesController::CreateView('tests',$data);
    });
?>