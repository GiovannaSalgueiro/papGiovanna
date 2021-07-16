<?php
include_once("includes/body.inc.php");
top();
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * , count(gostoFotoId) as n
        from fotos inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoPerfilId=albumFotografoId
        inner join gostos on fotoId=gostoFotoId group by fotoId, fotoURL order by n desc limit 3
        ";
$result = mysqli_query($con, $sql);


$sqlA="Select * from fotos inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoPerfilId=albumFotografoId    ";
$resultA = mysqli_query($con, $sqlA);
$dadosA =mysqli_fetch_array($resultA);



$sqlId="select * from fotos inner join comentarios on fotoId=comentarioFotoId";
$resultId = mysqli_query($con, $sqlId);
$dadosId = mysqli_fetch_array($resultId);

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

                    window.location="eliminaAlbum.php?id=" + id;
            }
        })
    }
    function confirmaEliminaCom(id) {
        $.ajax({

            url:"AJAX/AJAXGetComentario.php",
            type:"post",
            data:{
                idComentarioFoto:id
            },
            success:function (result){
                if(confirm('Deseja eliminar o comentario ?'))
                    window.location="eliminaComentario.php?id=" + id;

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
                    <td><img src="../<?php echo $dados['fotoURL']?>" width="102"> </td>
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

        $sqlAlbuns = "select * from albuns inner join fotografos where albumFotografoId=fotografoPerfilId order by albumData desc limit 6";
        $resultAlbuns = mysqli_query($con, $sqlAlbuns);

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
                <td><img src="../<?php echo $dadosAlbuns['albumCapaURL']?>" width="102"> </td>
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
    $con=mysqli_connect(HOST,USER,PWD,DATABASE);

    $sqlFotos="select * from fotos ";
    $res=mysqli_query($con,$sqlFotos);
    $dadosFotoId=mysqli_fetch_array($res);

    $sqlTexto = "select * from comentarios inner join fotos on comentarioFotoId=fotoId
										inner join perfis on comentarioPerfilId=perfilId
										where comentarioFotoId=".$dados['fotoId'];

    $resultTexto = mysqli_query($con, $sqlTexto);



    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <table class="table table-hover table-striped">

                        <tr>
                            <th colspan="12"  >Comentarios</th>
                        </tr>
                        <?php
                        while ($dadosTexto = mysqli_fetch_array($resultTexto)) {

                        ?>
                        <tr>
                            <th><small><span class="text-primary "><strong><?php echo $dadosTexto['perfilNome']?></strong></span><?php echo $dadosTexto['comentarioTexto']?></small></th>
                        <?php
                        echo $dadosFotoId['fotoId'];
                        ?>
                            <th><a href="#" onclick="confirmaEliminaCom(<?php echo $dados['comentarioId']?>);"><i class="fas fa-trash-alt"></i></a></th>
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



</body>

<?php
bottom();

?>
