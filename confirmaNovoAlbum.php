<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['albumNome']);
$data=$_POST['albumData'];
$imagem=$_FILES['albumCapaURL']['name'];
$novoNome="imagens/".$imagem;



$sql="insert into albuns(albumNome,albumData,albumFotografoId,albumCapaURL) values('".$nome."','".$data."',1,'".$imagem."');";

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location: perfil.php");
?>
