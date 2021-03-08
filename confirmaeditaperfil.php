<?php
include_once("includes/body.inc.php");

$nome=addslashes($_POST['nomeFotografo']);
$telemovel=addslashes($_POST['telemovelFotografo']);
$cidade=addslashes($_POST['cidadeFotografo']);
$email=addslashes($_POST['emailFotografo']);
$id=intval($_POST['id']);
$imagem=$_FILES['fotoFotografo']['name'];
$novoNome="imagens/".$imagem;

$sql="Update fotografos set fotografoNome='".$nome."'";
$sql="Update fotografos set fotografoTelemovel='".$telemovel."'";
$sql="Update fotografos set fotografoCidade='".$cidade."'";
$sql="Update fotografos set fotografoEmail='".$email."'";
if($imagem!=''){
    $sql.=", fotografoFotoURL='imagens/".$imagem."'";
    copy($_FILES['fotoFotografo']['tmp_name'],$novoNome);
}

$sql.=" where fotografoId=".$id;
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
header("location:perfil.php");
?>



