<?php
include_once("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['perfilNome']);
$telemovel=addslashes($_POST['fotografoTelemovel']);
$fotografofreelance=addslashes($_POST['freelance']);
$cidade=addslashes($_POST['fotografoCidade']);
$email=addslashes($_POST['perfilEmail']);
$imagem=$_FILES['fotografoFotoURL']['name'];
$novoNome="imagens/".$imagem;

$sql="Update fotografos set  fotografoTelemovel='".$telemovel."', fotografoCidade='".$cidade."', fotografoFreelancer='".$fotografofreelance."'";
$sql.="Update perfis set perfilNome='".$nome."', perfilEmail='".$email."'";

if($imagem!=''){
    $sql.=", fotografoFotoURL='imagens/".$imagem."'";
    copy($_FILES['fotografoFotoURL']['tmp_name'],$novoNome);
}

$sql.=" where fotografoId=".$id;


mysqli_query($con,$sql);
//header("location: perfil.php?id=".$id);
?>



