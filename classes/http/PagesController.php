<?php 
    namespace http;
    use Flight;
    class PagesController {
        public static function CreateView($viewName){
            
            if (file_exists("../views/$viewName.php")){
                require_once("../views/$viewName.php");
            }else{
                Flight::notFound();
            }
        }
    }
?>