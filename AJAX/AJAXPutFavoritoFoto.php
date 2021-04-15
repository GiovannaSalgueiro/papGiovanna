<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idFotografo']);

$sql="select * from favoritos where favoritoPerfilId=".$_SESSION['id']." and favoritoFotografoId=".$id;
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
    $sql = "delete from favoritos where favoritoPerfilId=" . $_SESSION['id'] . " and favoritoFotografoId=" . $id;

}else{
    $sql = "insert into favoritos values(".$_SESSION['id']. "," . $id.")";
}
mysqli_query($con,$sql);


?>

