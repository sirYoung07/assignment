<?php
class Database{

   function connect(){

        try {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbName = 'blogprojectpdo';
            
            $conn = new PDO("mysql:host = $host; dbname=$dbName", "$username", "$password");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
               
    }

}



