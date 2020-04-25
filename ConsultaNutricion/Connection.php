<?php


class Connection
{
    public static function make()
    {
        try{
            $opciones=[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT=>true
            ];
            $connection=new PDO(
                'mysql:host=127.0.0.1;dbname=consulta;charset=utf8',
                'nacho',
                "1234",
                $opciones
            );
        } catch(PDOException $PDOException){
            die($PDOException->getMessage());
        }
        return $connection;
    }

}