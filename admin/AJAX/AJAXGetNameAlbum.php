<?php
// dados na base de dados
include_once("includes/body.inc.php");
$id=intval($_POST['idAlbum']);
$sql="Select * from albuns where albumId=$id";
$con=mysqli_connect(HOST,USER,PWD,DATABASE);


$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['albumNome'];
?>