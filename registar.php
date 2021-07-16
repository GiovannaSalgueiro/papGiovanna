<?php
include_once("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$perfilEmail=addslashes($_POST['perfilEmail']);
$perfilNome=addslashes($_POST['perfilNome']);
$perfilPassword=addslashes($_POST['perfilPassword']);
$perfilPassword=md5($perfilPassword);
$sql="insert into perfis(perfilId,perfilNome,perfilEmail,perfilPassword) values (0,'".$perfilNome."','".$perfilEmail."','".$perfilPassword."')";
mysqli_query($con,$sql);
if(mysqli_errno($con)){
    header("location: index.php?err=1");
}else{
    $lastId=mysqli_insert_id($con);
    $sql="insert into fotografos(fotografoPerfilId) values ($lastId)";
    mysqli_query($con,$sql);
    session_start();
    $_SESSION['id']=$lastId;
    $_SESSION['nome']=$perfilNome;
    header("location: index.php");
}




?>