<?php
include('connection.php');
$id=$_GET['id'];
$qr="DELETE FROM login WHERE username='$id' and domain='staff'";
mysql_query($qr,$con);
header("location:approveStaff.php");
?>
