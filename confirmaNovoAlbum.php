<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['albumNome']);
$data=$_POST['albumData'];
$imagem=$_FILES['albumCapaURL']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['albumCapaURL']['tmp_name'],$novoNome);

$sql="insert into albuns(albumNome,albumData,albumFotografoId,albumCapaURL) values('".$nome."','".$data."','".$id."','imagens/".$imagem."');";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location: perfil.php");
?>
