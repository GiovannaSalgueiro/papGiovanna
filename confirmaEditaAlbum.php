<?php
include_once("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['albumNome']);
$data=addslashes($_POST['albumData']);

$imagem=$_FILES['albumCapaURL']['name'];
$novoNome="imagens/".$imagem;

$sql="Update albuns set albumNome='".$nome."', albumData='".$data."'";
if($imagem!=''){
    $sql.=", albumCapaURL='imagens/".$imagem."'";
    copy($_FILES['albumCapaURL']['tmp_name'],$novoNome);
}

$sql.=" where albumId=".$id;

mysqli_query($con,$sql);
header("location:perfil.php?id=1");
?>