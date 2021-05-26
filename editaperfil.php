<?php
include_once ("includes/body.inc.php");
top1();
$id=intval($_GET['id']);
$sql="select * from fotografos where fotografoId=$id";
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
                <img src="<?php echo $dados['fotografoFotoURL']?>" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <small><input type="file" name="fotografoFotoURL" src="../<?php echo $dados['fotografoFotoURL']?>"></small>
                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong><br>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <br>
                                <ul>
                                    <li><small><input type="text" name="fotografoNome" value="<?php echo $dados['fotografoNome']?>"></small></li><br>
                                    <li><small><input type="text" name="fotografoTelemovel" value="<?php echo $dados['fotografoTelemovel']?>"></small></li><br>
                                    <li><small><input type="text" name="fotografoCidade" value="<?php echo $dados['fotografoCidade']?>"></small></li><br>
                                    <li><small><input type="text" name="fotografoEmail" value="<?php echo $dados['fotografoEmail']?>"></small></li><br>
                                    <?php
                                     if ($dados['fotografoFreelancer']==='sim'){?>
                                         <li><small><input checked type="radio" id="sim" name="freelance" value="sim">
                                            <label for="sim">Disponivel</label>
                                            <input type="radio" id="nao" name="freelance" value="nao">
                                            <label for="nao">Indisponivel</label><br></small></li>
                                     <?php } else{
                                    ?>
                                         <li><small><input type="radio" id="sim" name="freelance" value="sim">
                                            <label for="sim">Disponivel</label>
                                            <input checked type="radio" id="nao" name="freelance" value="nao">
                                            <label for="nao">Indisponivel</label><br></small></li>
                                    <?php } ?>

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
