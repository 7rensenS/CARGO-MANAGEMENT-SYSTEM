<?php
include('connection.php');
$id=$_GET['id'];
$qr="update cargoprocessing set status='Cargo Return' where num='$id'";
mysql_query($qr,$con);
header("location:staff.php");
?>