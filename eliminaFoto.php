<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sqlAlbum="select * from fotos where fotoId=".$id;
$result=mysqli_query($con,$sqlAlbum);
$dados=mysqli_fetch_array($result);
$albumId=(int)$dados['fotoAlbumId'];
echo $sql= "delete from fotos where fotoId=".$id;
echo $sql2= "delete from comentarios where comentarioFotoId=".$id;
echo $sql3= "delete from gostos where gostoFotoId=".$id;
mysqli_query($con,$sql3);
mysqli_query($con,$sql2);
mysqli_query($con,$sql);
header("location:album.php?idAlbum=$albumId");

?>
