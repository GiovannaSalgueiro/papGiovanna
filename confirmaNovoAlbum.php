<?php
include_once ("includes/body.inc.php");


$nome=$_POST['albumNome'];
$data=$_POST['albumData'];
$imagem=$_FILES['albumCapaURL']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['capaAlbum']['tmp_name'],$novoNome);

$sql="insert into albuns(albumNome,albumCapaURL,albumData) values('".$nome."','imagens/".$imagem."','".$data."');";
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:perfil.php");
?>
