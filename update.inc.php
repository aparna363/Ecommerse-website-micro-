<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $oldemail=$_POST["old"];
    $oldname=$_POST['oldn'];

    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $rol=$_POST['role'];

    try{
        require_once 'DBS.inc.php';

        $query = "UPDATE signup SET first_name = :firstname , email=:email ,password = :pass , role = :rol  WHERE email ='$oldemail' AND  first_name= '$oldname';  ";
        
        $stat= $pdo->prepare($query);
        $stat->bindParam(":firstname" ,$firstname);
        $stat->bindParam(":email" ,$email);
        $stat->bindParam(":pass" ,$pass);
        $stat->bindParam(":rol" ,$rol);

        $stat->execute();

        $pdo=null;
        $stat=null;

        header('location:upform.php'); 

        die();

    }catch(PDOExeption $er){
        die("Query Failed :" . $er->getMessage());
    }
}else{
    header('location:upform.php');
}