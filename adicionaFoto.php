<?php
include_once ("includes/body.inc.php");
top1();

$id=intval($_GET['id']);
$sql="select * from fotos inner join albuns on fotoAlbumId=albumId where fotoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>


<!-- ======= Hero Section ======= -->

<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span>Adicionar nova foto</span>
                <h2>Adicionar nova foto</h2>
            </div>



            <form action="confirmaNovaFoto.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id?>">

                <img src="<?php echo $dados['albumCapaURL']?>">


                <div class="col-lg-8 d-flex flex-column align-items-stretch">


                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <div class="row" >
                            <div class="col-lg-4">
                                <br>
                                <ul>
                                    <li> <strong>Nome da foto:</strong></li>
                                    <small> Este nome não aparecerá no site</small>
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <br>
                                <ul>
                                    <small><input type="text" name="fotoNome"></small>
                                </ul>
                                <br>

                            </div>
                        </div>
                        <div class="col-lg-12"  style="text-align: center">
                        <small><input type="file" name="fotoURL"></small>
                        </div>
                        <div class="col-lg-12"  style="text-align: center">
                            <br><button type="Submit" class="btn btn-warning">Adiciona</button><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section><!-- End About Me Section -->

</main><!-- End #main -->

