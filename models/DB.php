<?php

class DBConnection{
    private static $connection;

    public static function getConnection(){
        if(self::$connection == null){
            //Crear objeto de conexion
            self::$connection = new PDO ('mysql:host=localhost;dbname=web;charset=utf8','root','12345');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        }
        return self::$connection;
    }
}    

?>