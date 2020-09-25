<?php
include('connection.php');
$id=$_GET['id'];
$qr="update cargotodapp set AddToBlockchain='Added' where num='$id'"; 
mysql_query($qr,$con);
header("location:ManageAdmin.php");
?>