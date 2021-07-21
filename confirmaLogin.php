<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$email = addslashes($_POST['perfilEmail']);
$password = md5(addslashes($_POST['perfilPassword']));
/*$sql="select perfilId from perfis where perfilEstado='ativo' and perfilEmail ='$email'";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(!isset($dados['perfilId'])){ // não existe o login

    header("location:login.php?erro");
}
else{
    $sql="select * from perfis where perfilId =".$dados['perfilId'];
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    $sistemaLogin=$dados['perfilEmail'];
    $sistemaPass=$dados['perfilPassword'];
    if($dados['perfilPassword']==$sistemaPass && $dados['perfilEmail']==$sistemaLogin){
        session_start();
        $_SESSION['id'] = $dados['perfilId'];
        $_SESSION['nome'] = $dados['perfilNome'];
        header("location:index.php");
    }
    else{
        header("location:login.php?erro");
    }

}*/
$sql = "select perfilId from perfis where perfilEmail='$email' AND perfilEstado='ativo'";
$res = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($res);
$id = $dados['perfilId'];


$sql2 = "select * from perfis where perfilId='$id'";
// buscar dados
$res2 = mysqli_query($con, $sql2);
$dados = mysqli_fetch_array($res2);

// and $dados2['perfilAdmin']=='utilizador'

if ($email == $dados['perfilEmail'] and $password == $dados['perfilPassword'] and $dados['perfilAdmin']=='utilizador' ){
    session_start();
    $_SESSION['id'] = $dados['perfilId'];
    $_SESSION['email'] = $dados['perfilEmail'];
    $_SESSION['nome'] = $dados['perfilNome'];
    header("location:index.php");


}elseif($email == $dados['perfilEmail'] AND $password == $dados['perfilPassword'] and $dados['perfilAdmin']=='admin' ) {
    session_start();
    $_SESSION['id'] = $dados['perfilId'];
    $_SESSION['nome'] = $dados['perfilNome'];
    $_SESSION['email'] = $dados['perfilEmail'];
    header("location:admin/index.php");
}
?>
