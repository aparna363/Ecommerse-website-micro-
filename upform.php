<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="u.css">
</head>
<body>
    <form action="update.inc.php" method="POST">
        <label for="">Old Info</label><br>
        <input type="email" name="old" placeholder="Email"><br>
        <input type="text" name="oldn" placeholder="Name"><br>
        <label for="">Update Employee Info</label><br>
        <input type="text" name="firstname" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="text" name="role" placeholder="Role"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>