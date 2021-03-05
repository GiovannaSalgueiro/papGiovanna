<?php
// dados na base de dados
include_once("includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$result=mysqli_query($con,$sql);

?>

<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <span>Perfil</span>
            <h2>Perfil</h2>
        </div>

        <div class="row">
            <img src="assets/img/me.jpg" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            <div class="col-lg-8 d-flex flex-column align-items-stretch">
                <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                    <!-- <a href="#" data-toggle="modal" data-target="#edita"> --><a href="editaperfil.php"><i class="far fa-edit" style="color: #ffb459; text-align: right"></i></a>
                    <div class="row">
                        <div class="col-lg-6">
                            <br>
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong> <?php echo $dados['fotografoId']?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong> 918 632 176 </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong> Maceira, Leiria</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> anaSilva@gmail.com</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Disponível</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-n4">
                        <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-heart-alt" style="color:#FA5858;"></i>
                                <span data-toggle="counter-up">25</span>
                                <p><strong>Gostos</strong> Total de gostos</p>
                            </div>
                        </div>

                        <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                                <span data-toggle="counter-up">4</span>
                                <p><strong>Projetos</strong> concluidos</p>
                            </div>
                        </div>

                        <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                                <span data-toggle="counter-up">0.5</span>
                                <p><strong>Anos de experiencia </strong> </p>
                            </div>
                        </div>

                        <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-star" style="color: #ffb459;"></i>
                                <span data-toggle="counter-up">4</span>
                                <p><strong>Recomendado</strong> Pessoas que gostaram do meu trabalho e recomendam.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
                <br>

            </div>
        </div>

    </div>
</section><!-- End About Me Section -->
