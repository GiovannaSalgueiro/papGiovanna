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
                <span>Editar o conta</span>
                <h2>Editar o conta</h2>
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
                                    <li><a href="#" data-toggle="modal" data-target="#password"><i class="icofont-rounded-right"><span style="color: #444444"><strong> Alterar palavra passe</strong></span></i></a></li>


                                </ul>
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><small><input type="text" name="perfilNome" value="<?php echo $dados['perfilNome']?>"></small></li><br>
                                    <li><small><input type="text" name="perfilEmail" value="<?php echo $dados['perfilEmail']?>"></small></li><br>

                                </ul>
                            </div>

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
            </div>
        </div>
    </section><!-- End About Me Section -->
</main><!-- End #main -->


<div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Alterar palavra-passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                $sql2="select * from perfis where perfilId=".$id;
                $res=mysqli_query($con,$sql2);
                $dados2=mysqli_fetch_array($res);

                ?>
                <form action="confirmaEditaPerfilPass.php?id=<?php echo $dados2['perfilId'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group"><div class="row">
                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <strong>Palavra-passe atual:</strong><br><br><br><br>
                                    <strong>Nova palavra-passe:</strong><br><br><br>
                                    <strong>Repita a nova palavra-passe:</strong><br><br>



                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <small><input type="password" class="form-control" name="oldPass"  required></small><br><br>
                                    <small><input type="password" class="form-control" name="newPass" required></small><br><br>
                                    <small><input type="password" class="form-control" name="newPass" required></small><br><br>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-warning">Editar palavra-passe</button>
                </form>
            </div>


        </div>

    </div>
</div>
</body>
<?php
bottom();
?>
