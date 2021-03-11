<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['nomeAlbum']);
$id=intval($_POST['id']);
$imagem=$_FILES['albumCapaURL']['name'];
$novoNome="imagens/".$imagem;

$sql="Update albuns set albumNome='".$nome."'";
if($imagem!=''){
    $sql.=", albumCapaURL='imagens/".$imagem."'";
    copy($_FILES['albumCapaURL']['tmp_name'],$novoNome);
}

$sql.=" where albumId=".$id;

mysqli_query($con,$sql);
header("location:perfil.php");
?>