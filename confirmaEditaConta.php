<?php
include_once("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['perfilNome']);

$email=addslashes($_POST['perfilEmail']);



$sql="Update perfis set perfilNome='".$nome."',perfilEmail='".$email."'";

$sql.=" where perfilId=".$id;


mysqli_query($con,$sql);
header("location: conta.php?id=".$id);
?>



