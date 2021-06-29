<?php
// dados na base de dados
include_once("includes/body.inc.php");
$id=intval($_POST['idComentarioFoto']);
$sql="Select * from comentarios where comentarioFotoId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
