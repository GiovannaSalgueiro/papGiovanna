<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idFoto']);
$txt=addslashes($_POST['txt']);
$sql = "insert into comentarios values(0,".$_SESSION['id']. "," . $id.",'".$txt."')";
mysqli_query($con,$sql); echo $sql;

?>

