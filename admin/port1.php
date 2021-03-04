<?php
include_once("includes/body.inc.php");
top();

?>

<body>
<main id="main">

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio1" class="portfolio">

        <div class="container">
            <br>
            <a href="ana.php#portfolio">Voltar</a>
            <br>
            <br>
            <div class="section-title">
                <span>Ana Silva</span>
                <h2>Ana Silva</h2>
                <h2>Sessão de fografia dos bébes de Março</h2>
                <p>22.11.2020 | 9 fotografias</p>

            </div>
            <section id="topPost" class="services">
                <div class="container">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th> Id da fotografia</th>
                            <th> Fotografia </th>
                            <th> Nº de gostos </th>
                            <th colspan="3"> Opções </th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="img/1.jpg" width="102"> </td>
                            <td>22</td>
                            <td><span class="btn-sm btn-danger">Elimina</span></td>
                            <td><a href="#" data-toggle="modal" data-target="#post1"><span class="btn-sm btn-success">Detalhes</span></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="img/2.jpg" width="102"> </td>
                            <td>22</td>
                            <td><span class="btn-sm btn-danger">Elimina</span></td>
                            <td><span class="btn-sm btn-success">Detalhes</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="img/3.jpg" width="102"> </td>
                            <td>22</td>
                            <td><span class="btn-sm btn-danger">Elimina</span></td>
                            <td><span class="btn-sm btn-success">Detalhes</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="img/4.jpg" width="102"> </td>
                            <td>22</td>
                            <td><span class="btn-sm btn-danger">Elimina</span></td>
                            <td><span class="btn-sm btn-success">Detalhes</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="img/5.jpg" width="102"> </td>
                            <td>22</td>
                            <td><span class="btn-sm btn-danger">Elimina</span></td>
                            <td><span class="btn-sm btn-success">Detalhes</span></td>
                        </tr>
                    </table>
                    <br>
                </div>
            </section>




</main><!-- End #main -->

<!-- ======= Port ======= -->
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
<!-- End Port -->

</body>

<?php
bottom();

?>
