<?php
include('connection.php');
$id=$_GET['id'];
$qr="DELETE FROM cargoprocessing WHERE num='$id'";
mysql_query($qr,$con);
header("location:barnch.php");
?>
