<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql</title>
</head>
<body>
    <h3 style="color:red;">Mysql</h3><br>

    <?php
    $servername = "localhost";
    $username="username";
    $password="password";
    $dbname="database";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed :".$conn->connect_error);
    }
    //echo "Connected successfully";

    $sql="CREATE TABLE Students(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50)";
    $sql="INSERT INTO Students(id,firstname,lastname,email)VALUES(1,'John','Doe','dh@dd.com')";

    if($conn->query($sql)==TRUE){
        echo "Table is created successfully";
    }
    else{
        echo "Error creating table:".$conn->error;
    }
    $conn->error;
    ?>
</body>
</html>