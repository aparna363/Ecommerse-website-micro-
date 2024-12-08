<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $er="";
    $email = $_POST['email'];
    $password = $_POST['password']; 
    
    try {
        require 'DBS.inc.php';

        $query = "SELECT first_name, role FROM signup WHERE email = :email AND password = :password";
        $stat = $pdo->prepare($query);
        $stat->bindParam(':email', $email);
        $stat->bindParam(':password', $password);
        $stat->execute();

        $result = $stat->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $_SESSION['user'] = $result['first_name'];
            if ($result['role'] == "User") {
                header('location:user.php');
            } elseif ($result['role'] == "Manager") {
                header('location:manager.php');
            } elseif ($result['role'] == "Admin") {
                header('location:Admin.php');
            }elseif ($result['role'] == "Employee") {
                header('location:employee.php');
            } else {
                echo "Not Registered";
            }
        } else {
            echo"<p>No Match found</p>";
        }
    } catch (PDOException $er) {
        die("Database Error: " . $er->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <span>
            <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FB4C"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg>
            </a>
        </span>
        <span>
        <svg width="200" height="200" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><defs><radialGradient id="bgGradient" cx="50%" cy="50%" r="50%"><stop offset="0%" style="stop-color: #d0f7d0; stop-opacity: 1" /><stop offset="100%" style="stop-color: #b4f2b4; stop-opacity: 1" /></radialGradient><filter id="shadow" x="-20%" y="-20%" width="140%" height="140%"><feDropShadow dx="4" dy="8" stdDeviation="6" flood-color="#000" flood-opacity="0.3"/></filter></defs><circle cx="512" cy="400" r="300" fill="url(#bgGradient)" filter="url(#shadow)"/><path d="M700 320H450l-25-100H180v50h130l20 80H250l-50 180h500v-50H350l15-50h400l50-150h-70z" fill="#1a475d"/><circle cx="400" cy="700" r="40" fill="#1a475d"/><circle cx="720" cy="700" r="40" fill="#1a475d"/><path d="M500 280c40 0 80 20 110 50l-40 40a120 120 0 0 0-70-30c-40 0-80 20-110 50l-40-40a180 180 0 0 1 150-70z" fill="#6ae06a"/><text x="512" y="850" text-anchor="middle" font-family="Arial, sans-serif" font-size="70" fill="#1a475d" font-weight="bold">FLASH CART</text><text x="512" y="900" text-anchor="middle" font-family="Arial, sans-serif" font-size="30" fill="#1a475d">YOUR STYLE, YOUR WAY</text></svg>
        </span>
        <h1>Login</h1>
        <form action="" id="form" method="POST">
            <div>
                <label for="email-input">
                    <span>@</span>
                </label>
                <input type="email" name="email" id="email-input" placeholder="Email" required>
            </div>
            <div>
                <label for="password-input">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                </label>
                <input type="password" name="password" id="password-input" placeholder="Password" required><br>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>New here ? <a href="signup.php"> Create an Account</a></p>
    </div>
</body>
</html>