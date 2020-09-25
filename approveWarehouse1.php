<?php
include('connection.php');
$id=$_GET['id'];
$qr="update login set flag='1' where username='$id' and domain='warehouse'";
mysql_query($qr,$con);
header("location:approveWarehouse.php");
?>