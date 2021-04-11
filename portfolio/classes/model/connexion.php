<?php
function connexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "portfolio";
    $dsn= "mysql:host=$servername;dbname=$dbname;charset=utf8";
    try {
        $idcon = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        return $idcon;
    } catch (PDOException $msg) {
        echo "Connection failed: " . $msg->getMessage();
        return FALSE;
        exit();
    }

}


?> 


