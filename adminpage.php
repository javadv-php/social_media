<?php
require('databaseconnection.php');
require('session.php');
$msg="";
$exic_query=mysqli_query($connection,"SELECT * FROM post WHERE usertype=0;");

if(isset($_POST['btn_approve'])){

    $passid=$_POST['btn_approve'];
    $insert_query=mysqli_query($connection,"UPDATE post SET usertype=1 WHERE postid=$passid;");
    header('location:adminpage.php');
    $msg="updated succesfully";

}
elseif(isset($_POST['btn_decline'])){
    $passid=$_POST['btn_decline'];
    $delete_query=mysqli_query($connection,"DELETE FROM post WHERE postid=$passid;");
    header('location:adminpage.php');
    echo "post removed";



}



// $id=$_id;
// echo $id;



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
           <textarea   name="textarea" ><?php echo $row['post'];?></textarea>
        <br> <td><button type="submit" name="btn_approve" value="<?php echo $row['postid'];?>">approve</button>
        <br><button type="submit" name="btn_decline" value="<?php echo $row['postid'];?>" >decline</td></tr></button></td>
      <?php
    }
}
?>
        
        

    </form>
    <button><a href="logout.php">logout</a></button>
    <?php echo $msg;?>
</table>

</body>
</html>