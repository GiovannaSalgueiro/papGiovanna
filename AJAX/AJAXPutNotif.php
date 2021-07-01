<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idPerfil']);

$sql="select * from perfis where perfilId=".$_SESSION['id']." and perfilNotificacao=".$id;
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
    $sql = "delete from perfis where perfilId=".$_SESSION['id']." and perfilNotificacao=".$id;

}else{
    $sql = "insert into perfis values(".$_SESSION['id']. "," . $id.")";
}
mysqli_query($con,$sql);


?>

