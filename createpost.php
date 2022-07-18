<?php
require('databaseconnection.php');
require('session.php');

$msg="";
if(isset($_POST['btn_save'])){
    $text=$_POST['text'];

    if(empty($text)){
        $msg="write something";
        
    }
    else{
    $name_query=mysqli_query($connection,"SELECT name FROM signup WHERE id=$_id;");
    $name_fetch=mysqli_fetch_assoc($name_query);
    $name=$name_fetch['name'];

    $exec_query=mysqli_query($connection,"INSERT INTO post(user_id,post,name) values('$_id','$text','$name')");
    $msg="inserted succefully";
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

    <style>
    form{
    margin-top:25%;
    box-sizing: border-box;
    background:skyblue;
    padding-bottom: 10px;
    padding-top:10px;
    }    
    div{
        margin-left:25%;
        margin-right:25%;

    }
</style>
</head>

<body>
<div class="container-fluid">
    <form action="" method="POST" align="center" name="form">
    
        <label for=""><h1>creat your post</h1></label><br><br>
        <textarea name="text" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" name="btn_save" value="CreatePost">

    </form>
    
    <p><?php echo $msg; ?></p>
    <button><a href="logout.php">logout</a></button><br><br>
    <button><a href="userpage.php">home page</a></button>
</div>

    
    <!-- <h1> ?></h1>
    <a href="logout.php">logout</a> -->

</body>
</html>