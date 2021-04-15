<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idFotografo']);
$sql="Select count(*) as f
        from favoritos
        where favoritoFotografoId=$id";

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador favorita o criador
$sql="select * from favoritos where favoritoPerfilId=".$_SESSION['id']." and favoritoFotografoId=".$id;
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){
    ?>
    <i class="fas fa-star fa-2x" style="color: #ffb459"></i>
<?php
}else{
  ?>
    <i class="far fa-star fa-2x" aria-hidden="true" style="color: #ffb459"></i>
<?php
}
?>

</span>
