<?php
include_once ("includes/body.inc.php");
top1();

$id=intval($_GET['id']);
$sql="select * from albuns where albumId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>


<!-- ======= Hero Section ======= -->

<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span>Adicionar novo album</span>
                <h2>Adicionar novo album</h2>
            </div>
            <form action="confirmaNovoAlbum.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id?>">

                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <small><input type="file" name="albumCapaURL"></small>

                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-4">
                                <br>
                                <ul>
                                    <li> <strong>Nome do album:</strong></li>
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <br>
                                <ul>
                                    <small><input type="text" name="albumNome"></small>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <br>
                                <ul>
                                    <li> <strong>Data do album:</strong></li>
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <br>
                                <ul>
                                    <small><input type="date" name="albumData"></small>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12"  style="text-align: center">
                            <button type="Submit" class="btn btn-warning">Adiciona</button><br>
                        </div>
                    </div>
                </div>
            </form>
        </div><br><hr>

        </div>
    </section><!-- End About Me Section -->

</main><!-- End #main -->

