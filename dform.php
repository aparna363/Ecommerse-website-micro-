<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
     <style>
        body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

.form-container {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

form input {
    margin-bottom: 10px;
    padding: 8px;
    width: 200px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

form input[type="submit"] {
    width: 220px;
    cursor: pointer;
    background-color: #4CAF50;
    color: white;
    border: none;
}

form input[type="submit"]:hover {
    background-color: #45a049;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}
    </style>
</head>
<body>
<div class="form-container">
    <form action="delete.inc.php" method="POST">
        <label for="">Delete Any User</label>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="name" placeholder="Name"><br>
        <input type="submit" name="submit" value="Delete">
</div>
    </form>
</body>
</html>