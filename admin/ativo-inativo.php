<?php
$id=intval($_GET['id']);
include_once ("includes/body.inc.php");

echo $sql="select * from perfis where perfilId=".$id;
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
if ($dados['perfilEstado']=='ativo'){
    $sqlDesativa="update perfis set perfilEstado ='inativo' where perfilId=".$id;
    mysqli_query($con, $sqlDesativa);
}else
    $sqlAtiva="update perfis set perfilEstado ='ativo' where perfilId=".$id;
    mysqli_query($con, $sqlAtiva);

header("location:criador.php");
?>

