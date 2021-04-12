<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['fotoNome']);
$imagem=$_FILES['fotoURL']['name'];
$novoNome="imagens/".$imagem;
$album=addslashes($_POST['fotoAlbumId']);


copy($_FILES['fotoURL']['tmp_name'],$novoNome);

$sql="insert into fotos(fotoNome,fotoURL,fotoAlbumId) values('".$nome."','imagens/".$imagem."','".$album."',);";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:album.php");
?>
