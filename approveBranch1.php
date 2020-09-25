<?php
include('connection.php');
$id=$_GET['id'];
$qr="update login set flag='1' where username='$id' and domain='branch'";
mysql_query($qr,$con);
header("location:approveBranch.php");
?>