<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idFoto']);

$sql="select * from gostos where gostoPerfilId=".$_SESSION['id']." and gostoFotoId=".$id;
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
    $sql = "delete from gostos where gostoPerfilId=" . $_SESSION['id'] . " and gostoFotoId=" . $id;

}else{
    $sql = "insert into gostos values(".$_SESSION['id']. "," . $id.")";
}
mysqli_query($con,$sql);


?>

