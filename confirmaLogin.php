<?php
$id=intval($_POST['utilizador']);
$con=mysqli_connect("localhost","root","","pap2021blupost");
$sql="select * from perfis where perfilId=".$id;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);
session_start();
$_SESSION['id']=$dados['perfilId'];
$_SESSION['nome']=$dados['perfilNome'];

header("location:index.php");
?>