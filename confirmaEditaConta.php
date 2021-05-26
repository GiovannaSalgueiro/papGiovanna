<?php
include_once("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['perfilNome']);
$estado=addslashes($_POST['perfilEstado']);
$email=addslashes($_POST['perfilEmail']);
$password=addslashes($_POST['perfilPassword']);
$perfilfotografo=addslashes($_POST['perfilFotografo']);



$sql="Update perfis set perfilNome='".$nome."', perfilEmail='".$email."', perfilPassword='".$password."', perfilFotografo='".$perfilfotografo."'";

$sql.=" where perfilId=".$id;


mysqli_query($con,$sql);
header("location: conta.php?id=".$id);
?>



