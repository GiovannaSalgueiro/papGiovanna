<?php
include_once("includes/body.inc.php");


$id = intval($_GET['id']);
$sql2 = "select * from perfis where perfilId=" . $id;
$res = mysqli_query($con, $sql2);
$dados = mysqli_fetch_array($res);


$oldPass = addslashes($_POST['oldPass']);
$newPass = addslashes($_POST['newPass']);
$newPassEncrypt = md5($newPass);


if ($oldPass != $newPassEncrypt) {
    $sql = "update perfis set perfilPassword='" . $newPassEncrypt . "' where perfilId=" . $id;
}else{
    echo "<script>   
            alert('A palavra-pass nova é igual à antiga!');
            window.location='../editaPerfil.php?id='.$id;
        </script>";
}



print_r($sql);
mysqli_query($con, $sql);
header("location: editaConta.php?id=" . $id);
?>