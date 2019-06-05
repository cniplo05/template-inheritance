<?php
    class User extends Database{ 
        public static $id,$name,$age,$created_at,$updated_at;

        function __construct($name, $age)
        {
            $timestamp = date("Y-m-d H:i:s");
            $params = [null,$name,$age,null,null];
            self::query('INSERT INTO users (id,username,age,created_at,updated_at) VALUES (?,?,?,?,?)',$params);
            header("Location: /tests");
        }
        public static function test()
        {
            return self::query('SELECT * FROM users');
        }
    }