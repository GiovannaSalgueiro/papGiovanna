<?php
include_once("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['fotografoNome']);
$telemovel=addslashes($_POST['fotografoTelemovel']);
$cidade=addslashes($_POST['fotografoCidade']);
$email=addslashes($_POST['fotografoEmail']);
$imagem=$_FILES['fotografoFotoURL']['name'];
$novoNome="imagens/".$imagem;

$sql="Update fotografos set fotografoNome='".$nome."', fotografoTelemovel='".$telemovel."', fotografoEmail='".$email."', fotografoCidade='".$cidade."' ";

if($imagem!=''){
    $sql.=", fotografoFotoURL='imagens/".$imagem."'";
    copy($_FILES['fotografoFotoURL']['tmp_name'],$novoNome);
}

$sql.=" where fotografoId=".$id;


mysqli_query($con,$sql);
header("location: perfil.php");
?>



