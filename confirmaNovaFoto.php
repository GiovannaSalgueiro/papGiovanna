<?php
include_once ("includes/body.inc.php");

$nome=addslashes($_POST['fotoNome']);
$imagem=$_FILES['fotoURL']['name'];
$novoNome="imagens/".$imagem;


$sql="insert into fotos(fotoNome,fotoURL,fotoAlbumId) values('".$nome."','".$imagem."',1,);";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:port11.php");
?>
