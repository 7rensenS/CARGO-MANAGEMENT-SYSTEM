<?php
include('connection.php');
$id=$_GET['id'];
$qr="update cargoprocessing set status='Successfully Delivered' where num='$id'";
mysql_query($qr,$con);
header("location:branch.php");
?>