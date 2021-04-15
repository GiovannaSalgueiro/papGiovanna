<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idFoto']);

$sql="select * from comentarios where comentarioPerfilId=".$_SESSION['id']." and comentarioFotoId=".$id;
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
    $sql = "delete from comentarios where comentarioPerfilId=" . $_SESSION['id'] . " and comentarioFotoId=" . $id;

}else{
    $sql = "insert into comentarios values(".$_SESSION['id']. "," . $id.")";
}
mysqli_query($con,$sql);

?>

