<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All</title>
    <style>
        /* Apply some styles to center the form */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Optional: for better contrast */
        }
        form {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        button {
            padding: 10px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="view.inc.php" method="POST">
        <label for="">View All </label>
        <button type="submit">Click Here</button>
    </form>
</body>
</html>