<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$email=addslashes($_POST['email']);
$sql="Select perfilEmail from perfis where perfilEmail='$email'";
$con=mysqli_connect(HOST,USER,PWD,DATABASE);


$result=mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>
