<?php
class database{
    private static $conn=null;
    public static function pdo_getconnection(){
        $username = "root";
        $host = "localhost";
        $password = "21mis0204@siteora";
        $dname = "issproject";
        try{
            //to set the connection
            if(database::$conn == null)//scope resolution operator
            {
                $connection=new PDO("mysql:host=$host;dbname=$dname",$username,$password);
                $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                database::$conn=$connection;
                return database::$conn;
            }
            else{
                return database::$conn;
            }
        }
            catch(PDOException $e){
                echo"<br>" .$e->getmessage();
            }
    }
}

?>