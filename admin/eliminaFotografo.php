<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);



while($dados=mysqli_fetch_array($result)){
    $sql= "delete from fotos where fotoId=".$dados['fotoId'];
    $sql2= "delete from comentarios where comentarioFotoId=".$dados['fotoId'];
    $sql3= "delete from gostos where gostoFotoId=".$dados['fotoId'];
    $sql4= "delete from albuns where albumFotografoId=".$dados['fotoId'];
    $sql5= "delete from perfis where fotografoPerfilId=".$dados['fotoId'];
    mysqli_query($con,$sql5);
    mysqli_query($con,$sql4);
    mysqli_query($con,$sql3);

    mysqli_query($con,$sql2);
    mysqli_query($con,$sql);
}



echo $sql= "delete from fotografo where fotografoId=".$id;
mysqli_query($con,$sql);
header("location:criador.php");
?>