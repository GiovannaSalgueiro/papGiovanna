<?php
include_once("includes/body.inc.php");
top1();

$sql="select *, ifnull(nGostos,0) as nGostos,ifnull(nComentarios,0) as nComentarios
from fotos left join albuns on fotoAlbumId=albumId 
left join fotografos on fotografoPerfilId=albumFotografoId
left join perfis on fotografoPerfilId=perfilId
left join (
Select fotoId ,count(gostoFotoId) as nGostos
        from fotos inner join gostos on fotoId=gostoFotoId group by 1 ) as tGostos
on tGostos.fotoId=fotos.fotoId				
	left join (				
Select fotoId , count(comentarioFotoId) as nComentarios
        from fotos inner join comentarios on fotoId=comentarioFotoId group by 1 ) as tComentarios
on tComentarios.fotoId=fotos.fotoId				
 group by fotos.fotoId order by  albumData desc ";



$result = mysqli_query($con, $sql);
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
</script>
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
                    <th>Id</th>
                    <th> Criador</th>
                    <th> Fotografia</th>
                    <th> Album da fotografia</th>
                    <th> Nº de gostos</th>
                    <th> Comentários</th>
                    <th colspan="3"> Opções </th>
                </tr>
                <?php
                while($dados = mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?php echo $dados['fotoId']?></td>
                    <td><a href="fotografo.php?id=<?php echo $dados['fotografoPerfilId']?>"><?php echo $dados['perfilNome']?></td></a>
                    <td><img src="../<?php echo $dados['fotoURL']?>" width="102"> </td>
                    <td style="text-align: center"><a href="album.php?id=<?php echo $dados['albumId']?>" ><i class="fas fa-images" style="color: #ffb727"></i>&nbsp;<?php echo $dados['albumNome']?></td></a>
                    <td><?php echo $dados['nGostos']?> gostos</td>
                    <td><a href="comentarios.php?idCom=<?php echo $dados['fotoId']?>"><span class="btn-sm btn-success">Ver comentários <span class="badge-success">(<?php echo $dados['nComentarios']?>)</span></span></a></td>
                    <!--<td><span class="btn-sm btn-warning"><i class="fas fa-bell"></i> &nbsp;Aviso</span></td>-->
                    <td><a href="#" onclick="confirmaElimina(<?php echo $dados['fotoId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>
                </tr>
                    <?php
                }
                ?>
            </table>
            <br>
        </div>

    </section>
</main><!-- End #main -->
<!-- ======= Post ======= -->
<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th colspan="12">Comentarios</th>
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

                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
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
