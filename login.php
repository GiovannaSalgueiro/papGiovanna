<?php
include_once ("includes/config.inc.php");
    $con=mysqli_connect("localhost","root","","pap2021blupost");
    $sql="Select * from perfis";
    $res=mysqli_query($con,$sql);

    $email=addslashes($_POST['perfilEmail']);
    $pwd=addslashes($_POST['perfilPassword']);



while ($dados=mysqli_fetch_array($res)){
    if ($email === $dados['perfilEmail'] AND $pwd === $dados['perfilPassword'] AND $dados['perfilEstado'] == 'ativo') {
        session_start();
        $_SESSION['id'] = $dados['perfilId'];
        $_SESSION['nome'] = $dados['perfilNome'];
        header("location: ".$_SERVER['HTTP_REFERER']);
    }elseif($email === $dados['perfilEmail'] AND $pwd === $dados['perfilPassword'] AND $dados['perfilEstado'] == 'inativo' ) {
        $verificacao = 'sim';
        isset($message);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }elseif($email != $dados['perfilEmail'] OR $pwd != $dados['perfilPassword'] AND $dados['perfilEstado'] == 'ativo'){
        isset($msg);

        header("location: ".$_SERVER['HTTP_REFERER']);
    }
}

?>
