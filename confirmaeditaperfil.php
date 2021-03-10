<?php
include_once("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$id=intval($_GET['id']);
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

$sql.=" where albumId=".$id;


mysqli_query($con,$sql);
print_r($sql);
header("location: perfil.php");
?>



