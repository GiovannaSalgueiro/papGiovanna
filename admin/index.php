<?php
include_once("../includes/body.inc.php");
top();

$sql="Select * , count(gostoFotoId) as n
        from fotos inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoId=albumFotografoId
        inner join gostos on fotoId=gostoFotoId group by fotoId, fotoURL order by n desc limit 3
        ";
$result = mysqli_query($con, $sql);
$resultAlbuns = mysqli_query($con, $sql);

?>
<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameFoto.php",
            type:"post",
            data:{
                idFoto:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a foto:'+result+"?"))

                    window.location="eliminaFoto.php?id=" + id;
            }
        })
    }
    function confirmaEliminaAlbum(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameAlbum.php",
            type:"post",
            data:{
                idAlbum:id
            },
            success:function (result){
                if(confirm('Deseja eliminar todo o album :  ' +result+" ?"))

                    window.location="eliminaFoto.php?id=" + id;
            }
        })
    }

</script>
<body>

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
                    <th>Id</th>
                    <th> Criador</th>
                    <th> Fotografia</th>
                    <th> Album da fotografia</th>
                    <th> Nº de gostos</th>
                    <th> Comentários</th>
                    <th colspan="3"> Opções </th>
                </tr><?php
                while ($dados = mysqli_fetch_array($result)) {
                    ?>
                <tr>
                    <td><?php echo $dados['fotoId']?></td>
                    <td><a href="fotografo.php?id=<?php echo $dados['fotografoId']?>"><?php echo $dados['fotografoNome']?></td></a>
                    <td><img src="<?php echo $dados['fotoURL']?>" width="102"> </td>
                    <td style="text-align: center"><a href="album.php?id=<?php echo $dados['albumId']?>" ><i class="fas fa-images" style="color: #ffb727"></i>&nbsp;<?php echo $dados['albumNome']?></td></a>
                    <td><?php echo $dados['n']?> gostos</td>
                    <td><a href="#" data-toggle="modal" data-target="#top1"><span class="btn-sm btn-success">Ver comentários</span></a></td>
                    <td><span class="btn-sm btn-warning"><i class="fas fa-bell"></i> &nbsp;Aviso</span></td>
                    <td><a href="#" onclick="confirmaElimina(<?php echo $dados['fotoId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>

                </tr>
                <?php
                }
                ?>

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
        <?php
        $sql = "select * from albuns inner join fotografos where albumFotografoId=fotografoId order by albumData desc limit 6";
        $resultAlbuns = mysqli_query($con, $sql);
        ?>
        <table class="table table-hover table-striped">

            <tr>
                <th>Id</th>
                <th> Nome do álbum </th>
                <th> Capa </th>
                <th> Data </th>
                <th> Nº de Fotos </th>
                <th> Detalhes </th>
                <th colspan="3"> Opções </th>
            </tr><?php
            while ($dadosAlbuns = mysqli_fetch_array($resultAlbuns)) {
                ?>
            <tr>
                <td ><?php echo $dadosAlbuns['albumId']?></td>
                <td style="text-align: center"><?php echo $dadosAlbuns['albumNome']?></td>
                <td><img src="<?php echo $dadosAlbuns['albumCapaURL']?>" width="102"> </td>
                <td><?php echo $dadosAlbuns['albumData']?></td>
                <td style="text-align: center">9</td>
                <td><a href="album.php?id=<?php echo $dadosAlbuns["albumId"]?>"><span class="btn-sm btn-success">Ver album</span></a></td>
                <td><span class="btn-sm btn-warning"><i class="fas fa-bell"></i> &nbsp;Aviso</span></td>
                <td><a href="#" onclick="confirmaEliminaAlbum(<?php echo $dadosAlbuns['albumId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>
            </tr>
                <?php
            }
            ?>
        </table>

    </div>
    </section>
    <!-- ======= End Novidades ======= -->


</main><!-- End #main -->



<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php
    $sql = "select * from perfis inner join comentarios on perfilId=comentarioPerfilId
            inner join fotos on fotoId=comentarioFotoId";
    $resultTexto = mysqli_query($con, $sql);
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th colspan="12">Comentarios</th>
                        </tr>
                        <?php
                        while ($dadosTexto = mysqli_fetch_array($resultTexto)) {
                        ?>
                        <tr>
                            <th><small><span class="text-primary "><strong><?php echo $dadosTexto['perfilNome']?></strong></span> <?php echo $dadosTexto['comentarioTexto']?></small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                            <?php
                        }
                        ?>

                    </table>

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
