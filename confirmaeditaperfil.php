<?php
include_once("includes/body.inc.php");

$nome=addslashes($_POST['nomeFotografo']);
$id=intval($_POST['id']);
$imagem=$_FILES['fotoFotografo']['name'];
$novoNome="imagens/".$imagem;

$sql="Update fotografos set fotografoNome='".$nome."'";
if($imagem!=''){
    $sql.=", fotografoFotoURL='imagens/".$imagem."'";
    copy($_FILES['fotoFotografo']['tmp_name'],$novoNome);
}

$sql.=" where fotografoId=".$id;
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:perfil.php");
?>



