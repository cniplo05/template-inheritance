<?php
    // namespace routes;
    use http\PagesController;
    
    
    Flight::route('/@url',function($url){
        PagesController::CreateView($url);
    });
    Flight::route('/@name/@id', function($name, $id){
        echo "hello, $name ($id)!";
    });
?>
