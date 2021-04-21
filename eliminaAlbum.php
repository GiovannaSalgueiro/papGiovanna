<?php
include_once("includes/body.inc.php");
$id=intval($_GET['id']);

$sqlFotografo="select * from albuns where albumId=".$id;
$resultFotografo=mysqli_query($con,$sqlFotografo);
$dadosFotografo=mysqli_fetch_array($resultFotografo);
$fotografoId=(int)$dadosFotografo['albumFotografoId'];

$sql="select fotoId from fotos where fotoAlbumId=$id";
$result=mysqli_query($con,$sql);
while($dados=mysqli_fetch_array($result)){
    $sql= "delete from fotos where fotoId=".$dados['fotoId'];
    $sql2= "delete from comentarios where comentarioFotoId=".$dados['fotoId'];
    $sql3= "delete from gostos where gostoFotoId=".$dados['fotoId'];
    mysqli_query($con,$sql3);
    mysqli_query($con,$sql2);
    mysqli_query($con,$sql);
}
$sql= "delete from albuns where albumId=".$id;
mysqli_query($con,$sql);
header("location:perfil.php?id=$fotografoId");

?>
