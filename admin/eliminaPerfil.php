<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select perfilId from perfis where perfilId=$id";
$result=mysqli_query($con,$sql);


while($dados=mysqli_fetch_array($result)){
    $sql= "delete from fotografos where fotografoPerfilId=".$id;
    $sql2= "delete from albuns where albumFotografoId=".$id;
    $sql3= "delete from fotos where fotoId=".$id;
    $sql4= "delete from comentarios where comentarioFotoId=".$id;
    $sql5= "delete from gostos where gostoFotoId=".$id;
    $sql6= "delete from favoritos where favoritoPerfilId=".$id;

    mysqli_query($con,$sql6);
    mysqli_query($con,$sql5);
    mysqli_query($con,$sql4);
    mysqli_query($con,$sql3);
    mysqli_query($con,$sql2);
    mysqli_query($con,$sql);
}

echo $sql= "delete from perfis where perfilId=".$id;
mysqli_query($con,$sql);
header("location:criador.php");
?>