<?php
include_once("includes/body.inc.admin.php");
top();

?>
<head>
    <title>BluPost</title>

</head>
<body>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <h1>BluPost</h1>
        <h2>Unidos pela fotografia</h2>
        <a href="#services" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
        <h5 style="padding-top: 5%">O nosso objetivo é ajudar fotógrafos amadores que acabam por não ter o conhecimento que merecem.</h5>
    </div>


</section><!-- End Hero -->
<main id="main">

    <!-- ======= Top post ======= -->
    <section id="topPost" class="services">
        <div class="container">
            <div class="section-title">
                <span>Top Posts</span>
                <h2>Top Posts</h2>
                <p>Imagens mais populares da semana</p>
            </div>
            <table class="table table-hover table-striped">
                <tr>
                    <th> Nome do álbum </th>
                    <th> Capa </th>
                    <th> #Fotos </th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>
                    <td>Sessão fotográfica da primavera</td>
                    <td><img src="img/1.jpg" width="102"> </td>
                    <td>16</td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><a href="#" data-toggle="modal" data-target="#post1"><span class="btn-sm btn-success"><span class="btn-sm btn-success">Detalhes</span></a></td>
                </tr>
                <tr>
                    <td>Almoço Americano</td>
                    <td><img src="assets/img/portfolio/portfolio-details-2.jpg" width="102"> </td>
                    <td>17</td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>Sessão fotográfica da primavera</td>
                    <td><img src="img/2.jpg" width="102"> </td>
                    <td>18</td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
            </table>
            <br>
        </div>
    </section>
    <!-- End Top posts Section -->

    <!-- ======= Novidades ======= -->
    <div class="container">
        <div class="section-title">
            <span>Novidades</span>
            <h2>Novidades</h2>
            <p>Últimas entradas</p>
        </div>
        <table class="table table-hover table-striped">
            <tr>
                <th> Nome do álbum </th>
                <th> Capa </th>
                <th> Nº de Fotos </th>
                <th colspan="3"> Opções </th>
            </tr>
            <tr>
                <td>Sessão fotográfica da primavera</td>
                <td><img src="img/principal1.jpg" width="102"> </td>
                <td>9</td>
                <td><span class="btn-sm btn-primary">Edita</span></td>
                <td><span class="btn-sm btn-danger">Elimina</span></td>
                <td><a href="port1"><span class="btn-sm btn-success">Detalhes</span></a></td>
            </tr>
            <tr>
                <td>Almoço Americano</td>
                <td><img src="assets/img/portfolio/portfolio-4.jpg" width="102"> </td>
                <td>17</td>
                <td><span class="btn-sm btn-primary">Edita</span></td>
                <td><span class="btn-sm btn-danger">Elimina</span></td>
                <td><span class="btn-sm btn-success">Detalhes</span></td>
            </tr>
            <tr>
                <td>Passeio de bicicletas</td>
                <td><img src="assets/img/portfolio/port-1.jpg" width="102"> </td>
                <td>1</td>
                <td><span class="btn-sm btn-primary">Edita</span></td>
                <td><span class="btn-sm btn-danger">Elimina</span></td>
                <td><span class="btn-sm btn-success">Detalhes</span></td>
            </tr>
        </table>

    </div>
    </section>
    <!-- ======= End Novidades ======= -->


</main><!-- End #main -->

<!-- ======= Top======= -->

<div class="modal fade" id="top" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <a href="ana.html"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;Ana Silva</h7></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="text-center">

                    <div class="row">
                        <div class="col-8">
                            <img width="320" src="assets/img/portfolio/port-1.jpg" class="post-img" alt="">
                        </div>
                        <div class="col-4" style="height: 400px;  overflow-y: scroll;"> <!-- alterar por PHP a altura da div (imagem) -->
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>


                        </div>

                        <!-- <div class="text-center">

                        </div> -->

                    </div>
                    <div class="container text-center">
                        <span id="gosto" onclick="gosto()" align="left"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        <small id="gostar" style="text-align: center"> 22 gostos</small>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>


<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <a href="joao.html"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;João Santos</h7></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img width="320" src="assets/img/portfolio/port-2.jpg" class="post-img" alt="">

                    <span style="display:block">
              <i class="fa fa-heart-o" aria-hidden="true"> </i><small> 10 gostos</small>
          </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Top -->

<div class="modal fade" id="post1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <a href="ana.html"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;Ana Silva</h7></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">

                    <img width="320" src="img/1.jpg" class="post-img" alt="">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Comentarios</th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


</body>

<?php
bottom();

?>
