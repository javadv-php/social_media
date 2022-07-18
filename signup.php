<?php
require('databaseconnection.php');
$msg="";
if(isset($_POST['btn_submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $checkuser=mysqli_query($connection,"SELECT * FROM signup WHERE user_name='$username'");
    if(mysqli_num_rows($checkuser)>0){
        echo "<span style='color:red'>username already exist try another</span>";
    }
    // else{
    //     echo "<span style='color:red'>username already exist try another</span>";
    // }
    else{
        $query="INSERT INTO signup(name,user_name,password) VALUES('$name','$username','$password')";
        $exec_query=mysqli_query($connection,$query);
        if($exec_query){
        $msg="registered succefully";

        }
        else{
        $msg=" error";
        }
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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    table {
    border-spacing: 20px;
    border: 2px solid pink;
    border-radius: 4px;
    background:skyblue;
    margin-top:20px;


   
}


</style>
<body>
<div class="container-fluid" align="center">
   
<form name="f1" action="" method="POST" onsubmit="return matchpass()">
<table>
        
    <tr><td> <label for="">Name</label></td> 
    <td><input type="text" id="_name"  name="name"></td></tr>
    <tr><td><label for="">User Name:</label></td>
    <td><input type="text" id="user_name" name="username"></td></tr>
    <tr><td><label for="">Password:</label></td>
    <td><input type="password" id="pass_word" name="password"></td></tr>
    <tr><td><label for="cnf_password">ConfirmPassword:</label></td>
    <td><input type="password" name="cnf_password"></td></tr>
        <tr><td><input type="submit" name="btn_submit" value="signup"></tr></td>
</table> 
<?php echo $msg;?> 

    </form>
    
</div>

<script type="text/javascript">  
function matchpass(){  
var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.cnf_password.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
}  
</script>  
<a href="login.php">login</a>
    
</body>
</html>