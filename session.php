<?php
require('databaseconnection.php');
session_start();
if(isset($_SESSION['userid'])){
    $_id=$_SESSION['userid'];
    $exec_query=mysqli_query($connection,"SELECT * FROM signup WHERE id='$_id'");
    $userdata=mysqli_fetch_array($exec_query);
    
   

}
else{
?>
<script>
    alert('please login');
    window.location="login.php";
</script>
<?php
}
?>