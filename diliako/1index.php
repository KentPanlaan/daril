<?php
session_start();
if(isset($_SESSION['username'])){
    echo "WELCOME";
} else {
    header("Location: login.php");
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Welcome" .$_SESSION['name'];
    ?>

    <a href="destroy.php">logout</a>
    
</body>
</html>