<?php
require('databaseconnection.php');
require('session.php');
$id=$_id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<style>
    div{
        background: lightgreen;
        height:300px;
        width:75%;
    }
    a{
        text-decoration:none;
        size:15px;

    }
</style>
<body bgcolor="skyblue">
    <div class="container row mt-5">
    <h1 align="center" >welcome</h1>
    <a href="createpost.php">createpost</a><br><br>
    <a href="viewuser.php">viewposts</a><br><br>
    <button><a href="logout.php">logout</a></button>
    </div>
</body>
</html>
