<?php
include_once("includes/body.inc.php");
top();

$id=intval($_GET['id']);
$sql="Select * ,count(fotoAlbumId) as f
        from fotos inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoPerfilId=albumFotografoId inner join perfis on fotografoPerfilId=perfilId
        where fotoAlbumId=$id";


$result = mysqli_query( $con, $sql);
$dados = mysqli_fetch_array($result);
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
</script>
<body>
<main id="main">

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio1" class="portfolio">

        <div class="container">
            <br>
            <a href="index.php">Voltar</a>
            <br>
            <br>
            <div class="section-title">

                <span><?php echo $dados['perfilNome']?></span>
                <h2><?php echo $dados['perfilNome']?></h2>
                <h2><?php echo $dados['albumNome']?></h2>
                <p><?php echo $dados['albumData']?> | <?php echo $dados['f']?></p>

            </div>
            <section id="topPost" class="services">
                <div class="container">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th> Id</th>
                            <th> Fotografia </th>
                            <th> Comentários</th>
                            <th colspan="3"> Opções </th>
                        </tr>
                        <tr>
                            <?php




                            $sql="select * from fotos where fotoAlbumId=$id";
                            $resultAlbum=mysqli_query($con,$sql);
                            while ($dadosAlbum = mysqli_fetch_array($resultAlbum )) {
                            ?>
                            <td><?php echo $dadosAlbum ['fotoId']?></td>
                            <td><img src="../<?php echo $dadosAlbum['fotoURL']?>" width="102"> </td>
                            <td><a href="comentarios.php?idCom=<?php echo $dados['fotoId']?>"><span class="btn-sm btn-success">Ver comentários</span></a></td>

                            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['fotoId']?>);"><span class="btn-sm btn-danger">Elimina</span></td>
                        </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <br>
                </div>
            </section>




</main><!-- End #main -->


<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php
    $sql = "select * from perfis inner join comentarios on perfilId=comentarioPerfilId
            inner join fotos on fotoId=comentarioFotoId
            ";
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

</body>

<?php
bottom();

?>
