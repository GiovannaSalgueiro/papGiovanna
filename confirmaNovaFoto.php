<?php
include_once ("includes/body.inc.php");

$nome=addslashes($_POST['fotoNome']);
$imagem=$_FILES['fotoURL']['name'];
$album=addslashes($_GET['id']);

$novoNome="imagens/".$imagem;
copy($_FILES['fotoURL']['tmp_name'],$novoNome);

echo $sql="insert into fotos(fotoNome,fotoURL,fotoAlbumId) values('".$nome."','".$novoNome."','".$album."');";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location: album.php?id=$album");
?>
