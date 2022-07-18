<?php
require('databaseconnection.php');
require('session.php');
$msg="";
$exic_query=mysqli_query($connection,"SELECT * FROM post WHERE usertype=1;");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    table{
    
    background:skyblue;
    width: 30%;
    
    
    }    
    textarea{
        border: 1px solid;
        

    }
    input{
        border: 0px solid;
        background:skyblue;


    }
    
</style>
</head>

<body><table align="center">
    



<tr><h1 align="center">posts</h1></tr>
<?php
if(mysqli_num_rows($exic_query)>0){
    while($row=mysqli_fetch_assoc($exic_query)){

    ?>

    <form action="" method="POST" >
    <tr align="center"><td><input type="text" name="" id="" value="<?php echo $row['name'] ;?>"><br>
           <textarea  disable name="textarea" ><?php echo $row['post'];?></textarea></tr>
      <?php
    }
}
?>
        
        

    </form>
    
</table>
<button><a href="logout.php">logout</a></button>