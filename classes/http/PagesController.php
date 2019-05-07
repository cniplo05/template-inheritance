<?php 
    namespace http;
    class PagesController {
        public static function CreateView($viewName){
            require_once("../views/$viewName.php");
        }
    }
?>