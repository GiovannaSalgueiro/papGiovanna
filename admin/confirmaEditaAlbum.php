<?php
include_once ("includes/body.inc.php");
$nome=addslashes($_POST['nomeAlbum']);
$id=intval($_POST['id']);
$imagem=$_FILES['capaAlbum']['name'];
$novoNome="imagens/".$imagem;

$sql="Update albuns set albumNome='".$nome."'";
if($imagem!=''){
    $sql.=", albumCapaURL='imagens/".$imagem."'";
    copy($_FILES['capaAlbum']['tmp_name'],$novoNome);
}

$sql.=" where albumId=".$id;
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:index.php");
?>