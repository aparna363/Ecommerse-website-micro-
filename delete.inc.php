<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $name=$_POST['name'];

    
    try{
        require_once 'DBS.inc.php';

        $query = "DELETE FROM signup WHERE email = '$email' AND first_name = '$name';  ";
        
        $stat= $pdo->prepare($query);
        $stat->execute();

        $pdo=null;
        $stat=null;

        header('location:dform.php'); 

        die();

    }catch(PDOExeption $er){
        die("Query Failed :" . $er->getMessage());
    }
}else{
    header('location:dform.php');
}