<?php

class Database{

    public static $connection;

    public static function setupConnection(){

        if(!isset(Database::$connection)){
            Database::$connection = new mysqli("localhost","root","Mewantha@555","online_db","3306");
            //check whether theres a connection and if not setting a new connection//
        }
    }

    public static function iud($q){

        Database::setupConnection();
        Database::$connection->query($q);
    }

    public static function search($q){

        Database::setupConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}

?>