<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$sql="Select * from fotografos inner join perfis on fotografoPerfilId=perfilId";

$result=mysqli_query($con,$sql);
?>

<section >

    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>
        <td><?php echo $dados['fotografoId']?></td>
        <td><?php echo $dados['fotografoNome']?></td>
        <td><?php echo $dados['fotografoEmail']?></td>
        <td><img src="../<?php echo $dados['fotografoFotoURL']?>" width="102"></td>

        <td><a href="ativo-inativo.php?id=<?php echo $dados['perfilId']?>"><span class="btn-sm btn-primary"><?php echo $dados['perfilEstado']?></span></a></td>


        <td><a href="fotografo.php?id=<?php echo $dados['fotografoId']?>"><span class="btn-sm btn-success">Ver perfil</span></a></td>
        <td><span class="btn-sm btn-warning">2&nbsp;<i class="fas fa-bell"></i></span></td>
        <td><a href="#" onclick="confirmaEliminaCriador(<?php echo $dados['fotografoId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>
        </tr>
        <?php
    }
    ?>
</section>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>
    $('document').ready(function(){
        fillTableFotografos();
        $('#search').keyup(function (){
            fillTableFotografos(this.value);
        });
    })
</script>


