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
            <form action="confirmaEditaConta.php" method="post" enctype="multipart/form-data">
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
                                    <li><i class="icofont-rounded-right"></i> <strong>Fotógrafo:</strong></li><br>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><small><input type="text" name="perfilNome" value="<?php echo $dados['perfilNome']?>"></small></li><br>
                                    <li><small><input type="text" name="perfilEmail" value="<?php echo $dados['perfilEmail']?>"></small></li><br>
                                    <li><small><input type="text" name="perfilPassword" value="<?php echo $dados['perfilPassword']?>"></small></li><br>
                                    <?php
                                    if ($dados['perfilFotografo']==='sim'){?>
                                        <li><small>
                                                <input checked type="radio" id="sim" name="perfilFotografo" value="sim">
                                                <label for="sim">Sim</label>
                                                <input type="radio" id="nao" name="perfilFotografo" value="nao">
                                                <label for="nao">Não</label><br></small></li>
                                    <?php } else{
                                        ?>
                                        <li><small>
                                                <input type="radio" id="sim" name="perfilFotografo" value="sim">
                                                <label for="sim">Sim</label>
                                                <input checked type="radio" id="nao" name="perfilFotografo" value="nao">
                                                <label for="nao">Não</label><br></small></li>
                                    <?php } ?>

                                </ul>
                            </div>

                            <div class="col-lg-12"  style="text-align: center">
                                <button type="Submit" class="btn btn-warning">Edita</button><br>
                            </div>
                        </div>
                    </div>

                    </div>
                    <br>
                </div>
            </form>
            <div class="col-lg-9">
                <?php
                if ($dados['perfilFotografo']==='sim'){?>

                <?php } else{
                    ?>
                    <i class="fas fa-camera" style="color: #ffb727"></i> <strong>Mudar para conta como fotógrafo</strong>
                <?php } ?>
            </div>
            </div>
        </div>
    </section><!-- End About Me Section -->
</main><!-- End #main -->



</body>
<?php
bottom();
?>
