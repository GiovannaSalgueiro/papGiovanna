<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['fotoNome']);
$album=addslashes($_POST['fotoAlbumId']);
$imagem=$_FILES['fotoURL']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['fotoURL']['tmp_name'],$novoNome);

$sql="insert into fotos(fotoId,fotoNome,fotoURL,fotoAlbumId) values('".$id."','".$nome."','".$imagem."','".$album."',);";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:album.php");
?>
