<?php
    namespace http;
    use Database;
    use Users;
    class PagesController extends Database{
        public static $data = null;
        public static function CreateView($viewName,$data = null){
            self::$data = $data;
            require_once("../resources/views/$viewName.php");
            Users::test();
        }
    }
?>