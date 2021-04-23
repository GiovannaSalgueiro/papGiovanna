<?php
include_once ("includes/body.inc.php");
top1();
$id=intval($_GET['id']);
$sql="select * from perfis where perfilId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);


?>

<body>

<!-- ======= Hero Section ======= -->

<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span>Editar o perfil</span>
                <h2>Editar o perfil</h2>
            </div>
            <form action="confirmaEditaPerfil.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Palavra Passe:</strong></li><br>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><small><input type="text" name="contaNome" value="<?php echo $dados['perfilNome']?>"></small></li><br>
                                    <li><small><input type="text" name="fotografoEmail" value="fesd"></small></li><br>
                                    <li><small><input type="text" name="contaPP" value="*************"></small></li><br>

                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Fotografo:</strong></li><br>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><small><input type="text" name="contaCriador" value="sim"></small></li><br>
                                    <i class="fas fa-camera"></i><strong>Mudar para conta de fotografo</strong>

                                </ul>
                            </div>


                            <div class="col-lg-12"  style="text-align: center">
                                <button type="Submit" class="btn btn-warning">Edita</button><br>
                            </div>

                            </div>


                        </div>

                    </div><!-- End .content-->
                    <br>

                </div>
            </form>
            </div>

        </div>
    </section><!-- End About Me Section -->

</main><!-- End #main -->



<!-- ======= Adiciona======= -->
<div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adiciona Galeria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputName">Nome:</label>
                        <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Ana Silva">
                    </div>
                    <div class="form-group">
                        <label for="InputName">Data:</label>
                        <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="20.05.2019">
                    </div>

                    <label>Foto de capa</label>
                    <input type="file" name="logoEmpresa">
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Adiciona</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Adiciona -->



<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>
<?php
bottom();
?>
