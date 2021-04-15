<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idFoto']);
$sql="Select count(*) as n
        from gostos 
        where gostoFotoId=$id";

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador gosta da foto
$sql="select * from gostos where gostoPerfilId=".$_SESSION['id']." and gostoFotoId=".$id;
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){
    ?>
    <i class="fas fa-heart" style="color: red" aria-hidden="true"></i>
<?php
}else{
  ?>
    <i class="fa fa-heart-o" aria-hidden="true"></i>
<?php
}
?>

</span>
<small id="gostar" style="text-align: center"> <?php echo $dados['n']?>  gostos</small>
