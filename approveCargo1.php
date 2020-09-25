<?php
include('connection.php');
$id=$_GET['id'];
$qr="update cargoprocessing set Approve='Approved' where num='$id' ";
mysql_query($qr,$con);
header("location:Cargoprocess.php");
?>