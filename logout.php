<?php
session_start();
$_session['userid']=NULL;
session_destroy();
header('location:login.php');
?>