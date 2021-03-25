<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);
$sql="select * from perfis inner join comentarios on perfilId=comentarioPerfilId 
                            inner join fotos on fotoId=comentarioFotoId where perfilId=$id" ;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);


$texto=$_POST['comentarioTexto'];


$sqlComen="insert into comentarios(comentarioPerfilId,comentarioFotoId,comentarioTexto) values('".$dados['perfilId']."','".$dados['fotoId']."','".$texto."');";
mysqli_query($con,$sql);
//header("location:index.php");
?>

