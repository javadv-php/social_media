<?php
require('databaseconnection.php');
$msg="";

if(isset($_POST['btn_login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $exic_query=mysqli_query($connection,"SELECT * From signup WHERE user_name='$username' AND password='$password'AND usertype=0");
    $admin_query=mysqli_query($connection,"SELECT * FROM signup WHERE user_name='$username' AND password='$password' AND usertype=1");
    if(mysqli_num_rows($exic_query)>0){
        $userdata=mysqli_fetch_array($exic_query);
        session_start();
        $_SESSION['userid']=$userdata[0];
        header('location:userpage.php');

    }
    elseif(mysqli_num_rows($admin_query)>0){
        $userdata=mysqli_fetch_array($admin_query);
        session_start();
        $_SESSION['userid']=$userdata[0];
        header('location:adminpage.php');
         
    }
    
    else{
        $msg="login failed";
    }    
}


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
form{
    margin-top:25%;
    box-sizing: border-box;
    
}
table {
    border-spacing: 20px;
    border: 2px solid green;
    border-radius: 4px;
    background:skyblue;
   
}
</style>
<body>
    
        <form action="" method="post" align="center">
        <table align="center"  >
            <tr><td><input type="text" name="username" placeholder="username"></td></tr>
            <tr><td><input type="password" name="password"placeholder="password"></td></tr>
            <tr><td><input type="submit" name="btn_login"value="login"></td></tr>
        </table>
        </form>
        <?php echo "$msg";?>
        <a href="signup.php">signup</a>
    
</body>
</html>