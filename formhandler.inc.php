<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $rol='Employee';


 

    try{
        require_once 'DBS.inc.php';

        $query = "INSERT INTO signup(first_name,email,password,role) values(:firstname,:email,:pas, :rol);";
        
        $stat= $pdo->prepare($query);
        $stat->bindParam(":firstname" ,$firstname);
        $stat->bindParam(":email" ,$email);
        $stat->bindParam(":pas" ,$pass);
        $stat->bindParam(":rol" , $rol);
        $stat->execute();

        $pdo=null;
        $stat=null;

        header('location:form.php'); 

        die();

    }catch(PDOExeption $er){
        die("Query Failed :" . $er->getMessage());
    }
}else{
    header('location:form.php');
}