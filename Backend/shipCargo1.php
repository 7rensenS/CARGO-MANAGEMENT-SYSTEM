<?php
include('connection.php');
$id=$_GET['id'];
$qr="update cargoprocessing set Ship='Shipping' where num='$id'";
mysql_query($qr,$con);
header("location:warehouse.php");
?>