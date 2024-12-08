<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $search=$_POST['search'];
    
    try{
        require_once 'DBS.inc.php';

        $query = "SELECT * FROM signup WHERE first_name='$search'  OR  email='$search' OR role='$search';  ";
        
        $stat= $pdo->prepare($query);
        $stat->execute();
        $result= $stat->fetchAll(PDO::FETCH_ASSOC);

        $pdo=null;
        $stat=null;

    }catch(PDOExeption $er){
        die("Query Failed :" . $er->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All</title>
    <style>body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Optional: for better contrast */
        }
        table {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        </style>
</head>
<body>
<?php
if(empty($result)){
    echo"<div>";
    echo "<p>There is no result";
    echo"</div>";
}else{
    echo"<table border='1'>";
        echo"<tr>";
            echo"<th>Name</th>";
            echo"<th>Email</th>";
            echo"<th>Password</th>";
            echo "<th>Position</th>";
        echo"</tr>";
        foreach($result as $row){   
        echo "<tr>";
        echo"<td>".$row["first_name"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["password"]."</td>";
        echo"<td>".$row["role"]."</td>";
        echo"</tr>"; 
        }
    echo"</table>";
}

?>

</body>
</html>