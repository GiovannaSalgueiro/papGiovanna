<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['fotoNome']);
$imagem=$_FILES['fotoURL']['name'];
$novoNome="imagens/".$imagem;


$sql="insert into fotos(fotoNome,fotoURL,fotoAlbumId) values('".$nome."','".$imagem."','".$id."',);";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:album.php");
?>
