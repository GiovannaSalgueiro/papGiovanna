<?php
include_once ("includes/body.inc.php");


$imagem=$_FILES['fotoURL']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['fotoURL']['tmp_name'],$novoNome);

$sql="insert into fotos(fotoURL) values('imagens/".$imagem."');";
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:port11.php");
?>
