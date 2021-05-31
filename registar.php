<?php
include_once("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$perfilEmail=addslashes($_POST['perfilEmail']);
$perfilPassword=addslashes($_POST['perfilPassword']);
$sql="insert into perfis(perfilId,perfilNome,perfilEmail,perfilPassword) values (0,'".$perfilEmail."','".$perfilPassword."')";
mysqli_query($con,$sql);
$lastId=mysqli_insert_id($con);
session_start();
$_SESSION['id']=$lastId;
$_SESSION['email']=$perfilEmail;
header("location: index.php");

?>