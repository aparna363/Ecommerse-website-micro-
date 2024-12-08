<?php

$db="mysql:host=localhost;dbname=shopping";
$dbusername="root";
$dbpassword="";

try{
    $pdo= new PDO($db,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $er){
     echo "Connection Faied: " .$er->getMessage() ;
}