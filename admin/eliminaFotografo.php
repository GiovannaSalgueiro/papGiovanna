<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select fotografoId from fotografos where fotografoId=".$id;
$result=mysqli_query($con,$sql);


while($dados=mysqli_fetch_array($result)){
    $sql2= "delete from albuns where albumFotografoId=".$dados['fotografoId'];
    $sql3= "delete from fotos where fotoAlbumId=".$dados['fotografoId'];
    $sql4= "delete from comentarios where comentarioFotoId=".$dados['fotografoId'];
    $sql5= "delete from gostos where gostoFotoId=".$dados['fotografoId'];
    $sql6= "delete from favoritos where favoritoFotografoId=".$dados['fotografoId'];


    mysqli_query($con,$sql6);
    mysqli_query($con,$sql5);
    mysqli_query($con,$sql4);
    mysqli_query($con,$sql3);
    mysqli_query($con,$sql2);
}

echo $sql= "delete from fotografos where fotografoId=".$id;
mysqli_query($con,$sql);
//header("location:criador.php");
?>