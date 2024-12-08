<!-- <?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $rol="User";


 

    try{
        require 'DBS.inc.php';

        $query = "INSERT INTO signup(first_name,email,password,role) values(:firstname,:email,:pas, :rol);";
        
        $stat= $pdo->prepare($query);
        $stat->bindParam(":firstname" ,$firstname);
        $stat->bindParam(":email" ,$email);
        $stat->bindParam(":pas" ,$pass);
        $stat->bindParam(":rol" , $rol);
        $stat->execute();

        $pdo=null;
        $stat=null;

        header('location:login.php'); 

        exit;

    }catch(PDOException $er){
        die("Query Failed :" . $er->getMessage());
    }
}else{
    header('location:signup.php');
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="wrapper">
        <span>
        <svg width="200" height="200" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><defs><radialGradient id="bgGradient" cx="50%" cy="50%" r="50%"><stop offset="0%" style="stop-color: #d0f7d0; stop-opacity: 1" /><stop offset="100%" style="stop-color: #b4f2b4; stop-opacity: 1" /></radialGradient><filter id="shadow" x="-20%" y="-20%" width="140%" height="140%"><feDropShadow dx="4" dy="8" stdDeviation="6" flood-color="#000" flood-opacity="0.3"/></filter></defs><circle cx="512" cy="400" r="300" fill="url(#bgGradient)" filter="url(#shadow)"/><path d="M700 320H450l-25-100H180v50h130l20 80H250l-50 180h500v-50H350l15-50h400l50-150h-70z" fill="#1a475d"/><circle cx="400" cy="700" r="40" fill="#1a475d"/><circle cx="720" cy="700" r="40" fill="#1a475d"/><path d="M500 280c40 0 80 20 110 50l-40 40a120 120 0 0 0-70-30c-40 0-80 20-110 50l-40-40a180 180 0 0 1 150-70z" fill="#6ae06a"/><text x="512" y="850" text-anchor="middle" font-family="Arial, sans-serif" font-size="70" fill="#1a475d" font-weight="bold">FLASH CART</text><text x="512" y="900" text-anchor="middle" font-family="Arial, sans-serif" font-size="30" fill="#1a475d">YOUR STYLE, YOUR WAY</text></svg>
        </span>
        <h1>Signup</h1>
        <form action="" id="form" method="POST">
            <div >
                <label for="firstname-input">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg>
                </label>
                <input type="text" name="firstname" id="firstname-input" placeholder="First-Name" required>
            </div>
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
                <input type="password" name="password" id="password-input" placeholder="Password" required>
            </div>
            <div>
            <label for="repeatpassword-input">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                </label>
                <input type="password" name="repeatpassword" id="repeatpassword-input" placeholder="Repeat-Password" required>
            </div>
            <button type="submit">Signup</button>
        </form>
        <p>Already have an Account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>