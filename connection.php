<?php


$sName = "localhost";
$uName = "root";
$pass = "";
$dbName = "user";

try{
    $con = new PDO("mysql:host=$sName; dbname=$dbName", $uName, $pass);
    $con-> SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection Failed: ". $e->getMessage();

}


?>