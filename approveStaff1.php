<?php
include('connection.php');
$id=$_GET['id'];
$qr="update login set flag='1' where username='$id' and domain='staff'";
mysql_query($qr,$con);
header("location:approveStaff.php");
?>