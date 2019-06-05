<?php
    class Users extends Database{ 
        public static $id,$name,$age,$created_at,$updated_at;

        function __construct()
        {
            
        }
        public static function test()
        {
            print_r(self::query('SELECT * FROM users'));
        }
    }