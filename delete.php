<?php
include 'connect.php';
include 'display.php';


if(isset($_GET['deleteid'])){

    $query=$_GET['deleteid'];
   
    $sql="Delete from `trip`.`trip` where id='$query'";

    $result=$con->query($sql);//iterate over the table foor your action that we wrote on $sql

    if($result){
       
        header('location: display.php');
    }
    else{
        die(mysqli_error($con));
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete page</title>
</head>
<body>
    
</body>
</html>