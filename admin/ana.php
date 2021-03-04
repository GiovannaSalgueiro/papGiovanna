<?php
include_once("includes/body.inc.php");
top();

?>

<body>
<main id="main">
    <!-- ======= About Me Section ======= -->
    <section id="about1" class="about">
        <div class="container">

            <div class="section-title">
                <span>Ana Silva</span>
                <h2>Ana Silva</h2>
            </div>

            <div class="row">
                <img src="assets/img/me.jpg" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">

                        <div class="row">
                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong> Ana Silva</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong> 918 632 176 </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong> Maceira, Leiria</li>
                                    <!-- <li><i class="icofont-rounded-right"></i> <strong>Idade:</strong> 18</li> -->
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <ul>

                                    <!-- <li><i class="icofont-rounded-right"></i> <strong>Grau:</strong> Amador</li> -->
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
                    <div class="social-links">
                        <br>
                        &nbsp<a href="https://www.instagram.com/realdonaldtrump/?hl=pt" class="instagram"><i class="fab fa-instagram fa-2x"></i></a>
                        &nbsp
                        &nbsp
                        <a href=""><i class="fas fa-globe fa-2x"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Me Section -->
    <!-- ======= Posts ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <span>Portfolio</span>
                <h2>Portfolio</h2>
            </div>

            <table class="table table-hover table-striped">
                <tr>
                    <th>Id da Galeria</th>
                    <th>Nome da Galeria</th>
                    <th> Capa </th>
                    <th>Nº de fotografias</th>
                    <th>Data</th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Sessão de fotografias da primavera</td>
                    <td><img src="img/principal1.jpg" width="102"></td>
                    <td>9</td>
                    <td>22.11.2020</td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><a href="port1"><span class="btn-sm btn-success">Detalhes</span></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Almoço americano</td>
                    <td><img src="assets/img/portfolio/portfolio-4.jpg" width="102"></td>
                    <td>4</td>
                    <td>15.10.2019</td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>

            </table>
            <br>
        </div>

    </section>
</main><!-- End #main -->

</body>

<?php
bottom();

?>
