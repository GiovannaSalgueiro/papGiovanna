<?php
include_once("includes/body.inc.php");
top();

?>

<body>
<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services1" class="services">

        <div class="section-title">
            <span>Publicações</span>
            <h2>Publicações</h2>
        </div>


        <div class="container">

            <table class="table table-hover table-striped">
                <tr>
                    <th>Id da Fotos </th>
                    <th> Nome do álbum </th>
                    <th> Capa </th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Sessão fotográfica da primavera</td>
                    <td><img src="img/1.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><a href="#" data-toggle="modal" data-target="#post1"><span class="btn-sm btn-success">Detalhes</span></a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Almoço Americano</td>
                    <td><img src="assets/img/portfolio/portfolio-details-2.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Sessão fotográfica da primavera</td>
                    <td><img src="img/2.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Sessão fotográfica da primavera</td>
                    <td><img src="img/3.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Pandora</td>
                    <td><img src="img/a.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Pandora</td>
                    <td><img src="img/c.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Sessão fotográfica da primavera</td>
                    <td><img src="img/6.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-primary">Edita</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
            </table>
            <br>
        </div>

    </section>
</main><!-- End #main -->
<!-- ======= Post ======= -->

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

<!-- End Post -->

</body>

<?php
bottom();

?>
