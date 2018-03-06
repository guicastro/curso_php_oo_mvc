<?php


namespace App;


class Conn
{
    public static function getDb() {

        return new \PDO("mysql:host=localhost;dbname=php_oo_mvc","banco_dados","abcd1234");
    }

}