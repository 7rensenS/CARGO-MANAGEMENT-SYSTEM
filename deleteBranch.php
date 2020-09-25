<?php
include('connection.php');
$id=$_GET['id'];
$qr="DELETE FROM login WHERE username='$id' and domain='branch'";
mysql_query($qr,$con);
header("location:approveBranch.php");
?>
