<?php
// dados na base de dados
include_once("includes/body.inc.php");
$id=intval($_POST['idFotografo']);
$sql="Select * from fotografos where fotografoId=$id";
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['fotografoNome'];
?>
