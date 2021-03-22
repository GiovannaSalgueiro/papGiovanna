<?php
include_once("includes/body.inc.php");
top();

$sql="Select * 
        from fotos inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoId=albumFotografoId 
        ";
$result = mysqli_query( $con, $sql);
$dados = mysqli_fetch_array($result)
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

                <span><?php echo $dados['fotografoNome']?></span>
                <h2><?php echo $dados['fotografoNome']?></h2>
                <h2><?php echo $dados['albumNome']?></h2>
                <p><?php echo $dados['albumData']?> | 9 fotografias</p>

            </div>
            <section id="topPost" class="services">
                <div class="container">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th> Id</th>
                            <th> Fotografia </th>
                            <th> Nº de gostos </th>
                            <th> Comentários</th>
                            <th colspan="3"> Opções </th>
                        </tr>
                        <tr>
                            <?php
                            while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <td><?php echo $dados['fotoId']?></td>
                            <td><img src="<?php echo $dados['fotoURL']?>" width="102"> </td>
                            <td  style="text-align: center">22</td>
                            <td><a href="#" data-toggle="modal" data-target="#post1"><span class="btn-sm btn-success">Ver comentários</span></a></td>
                            <td><span class="btn-sm btn-warning"><i class="fas fa-bell"></i> &nbsp;Aviso</span></td>
                            <td><span class="btn-sm btn-danger">Elimina</span></td>
                        </tr>
                            <?php
                        }
                        ?>
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
