<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$nome=addslashes($_POST['nome']);
$password=md5(addslashes($_POST['password']));
$sql="select perfilId from perfis where perfilEstado='ativo' and perfilNome ='$nome'";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(!isset($dados['perfilId'])){ // não existe o login

    header("location:login.php?erro");
}
else{
    $sql="select perfilId, perfilPassword, perfilNome from perfis where perfilId =".$dados['perfilId'];
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    $sistemaLogin=$dados['perfilNome'];
    $sistemaPass=$dados['perfilPassword'];
    if($dados['perfilPassword']==$sistemaPass && $dados['perfilName']==$sistemaLogin){
        session_start();
        $_SESSION['id'] = $dados['perfilId'];
        $_SESSION['nome'] = $dados['perfilName'];
        header("location:index.php");
    }
    else{
        header("location:login.php?erro");
    }

}
?>
