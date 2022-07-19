<?php
class PostgressConnection
{
    static function ConnectDB()
    {
        $host = 'localhost';
        $db = 'krsystem';
        $user = 'postgres';
        $password = 'Arrieta27'; // change to your password
        try{    
            $conn = new Pdo("pgsql:host=$host;dbname=$db",$user,$password,);
            echo "connected to table:$db";
            
        }
        catch(PDOException $exp_error){
            echo("failed connection error:$exp_error");
        }
    }
}
