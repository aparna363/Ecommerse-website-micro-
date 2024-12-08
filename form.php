<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employees</title>
    <link rel="stylesheet" href="formsty.css">
</head>
<body>
<div class="form-container"> 
<h1>Add Employee</h1>  

<form action="formhandler.inc.php" method="POST">
        <input type="text" name="firstname" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Add">
    </form>
</div>
</body>
</html>