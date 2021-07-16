<?php
    include_once ("../includes/body.inc.php");
    $id=intval($_POST['idPerfil']);
    $ano=intval($_POST['ano']);

?>

<ul id="portfolio-flters" class="d-flex justify-content-center">
    <li onclick="fillTablePortfolio(<?php echo $id?>,-1)" <?php
    if($ano==-1)
        echo 'class="filter-active"'
    ?>
    >Todos</li>
    <?php
    $sql="select year(albumData) as ano from albuns where albumFotografoId=".$id." group by 1 order by 1 desc";
    $res=mysqli_query($con,$sql);
    while($dadosAno=mysqli_fetch_array($res)){  ?>
        <li onclick="fillTablePortfolio(<?php echo $id.",".$dadosAno[0]?>)" <?php
        if($ano==$dadosAno[0])
            echo 'class="filter-active"'
        ?> ><?php echo $dadosAno[0]?></li>
    <?php } ?>


</ul>

<?php
$sql="select * from albuns where albumFotografoId=$id ";
if($ano!=-1) {
    $sql .= "and year(albumData)=" . $ano;
}
 $sql.=" order by albumData desc";
$resultAlbum=mysqli_query($con,$sql);
?>
<div class="row portfolio-container">
    <?php
    while ($dadosAlbum=mysqli_fetch_array($resultAlbum)) {
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php echo $dadosAlbum['albumCapaURL']; ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
                <h4><?php echo $dadosAlbum['albumNome']?></h4>
                <p><?php echo $dadosAlbum['albumData']?></p>
                <a href="album.php?idAlbum=<?php echo $dadosAlbum["albumId"]?>"><i class="far fa-eye"></i></a>

                <?php
                if(isset($_SESSION['id'])){
                    if($id==$_SESSION['id']){
                        ?>

                        <a href="editaAlbum.php?id=<?php echo $dadosAlbum["albumId"]?>"><i class="far fa-edit"></i></a>
                        <a href="#" onclick="confirmaEliminaAlbum(<?php echo $dadosAlbum['albumId']?>);"><i class="fas fa-trash-alt" style="color: #ffb459; text-align: right"></i></a>

                        <?php
                    }}?>


            </div>
        </div>
        <?php
    }
    ?>

</div>