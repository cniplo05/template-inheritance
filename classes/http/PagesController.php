<?php
    namespace http;
    use Database;
    use User;
    class PagesController extends Database{
        public static $data = null;
        public static function CreateView($viewName,$data = null){
            $data = User::test();
            require_once("../resources/views/$viewName.php");
        }

        //add user
        public static function NewUser($name,$age){
            $new_user = new User($name,$age);
        }
    }
?>