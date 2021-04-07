<?php
include_once("includes/body.inc.php");
top1();
$sql = "select *, count(*) as n from fotos left join gostos on fotoId=gostoFotoId inner join albuns on fotoAlbumId=albumId group by fotoId, fotoURL order by albumData desc";
$result = mysqli_query($con, $sql);

?>

<body>



<!-- ======= Hero Section ======= -->

<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services" class="services">
        <div class="container">


            <div class="section-title">
                <span>Publicações</span>
                <h2>Publicações</h2>
            </div>
            <!-- <small>Pesquisar:</small><br><input type="text" id="search"> -->
            <div class="row">
                <?php
                while ($dados = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <a href="#" data-toggle="modal" onclick="mostraFoto(<?php echo $dados['fotoId']?>)">
                            <img width="320" src="<?php echo $dados['fotoURL']?>" class="post-img" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4 class="title"><?php echo $dados['n']?> gostos</h4>

                            <a href="<?php echo $dados['fotoURL']?>" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>


        </div>
    </section>
</main><!-- End #main -->

<!-- ======= Post ======= -->

<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
</div>

<!-- End Post -->


<!-- ======= PERFIL ======= -->
<div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="perfil.php"><h5 class="modal-title" id="exampleModalLabel">Perfil</h5></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputEmail">Nome de Utilizador:</label>
                        <input type="email" class="form-control" id="InputNomUti" placeholder="anaSilva1">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email:</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="anaSilva@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>

                </form>
                <small><button type="submit" class="btn btn-warning">Editar</button></small>
            </div>

            <div class="modal-footer">
                <h7>Sair da conta</h7>
                <i class="fas fa-sign-out-alt" style="color: #ffb727"></i>
            </div>
        </div>
    </div>
</div>
<!-- End Login -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    function fecha(){
        $('#regista').modal('toggle');
        $('#login').modal('toggle');
    }

</script>
<script>
    function gosto() {
        document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
        document.getElementById("gostar").innerHTML = "23 gostos";
    }
</script>>

</body>
<?php
bottom(HOME);

?>
