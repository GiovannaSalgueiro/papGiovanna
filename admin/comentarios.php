<?php
include_once("includes/body.inc.php");
top();
$id=intval($_GET['idCom']);
$sql="Select * from comentarios inner join fotos on comentarioFotoId=fotoId inner join perfis on comentarioPerfilId=perfilId where comentarioFotoId=".$id;
$result = mysqli_query($con, $sql);

?>
<script>
    function confirmaEliminaCom(id) {
        if(confirm('Deseja eliminar o comentario ?')){
            $.ajax({
                url:"AJAX/AJAXDelComentario.php",
                type:"post",
                data:{
                    idComentario:id
                },
                success:function (result){
                    alert();

                }
            })


        }

    }
</script>

<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services1" class="services">

        <div class="section-title">
            <span>Comentários</span>
            <h2>Comentários</h2>
        </div>


        <div class="container">
            <!-- <input id="search" type="text" class="form-control" placeholder="Pesquise"> -->

            <table class="table table-hover table-striped">
                <tr>
                    <th>Id do comentario</th>
                    <th> Nome do perfil </th>
                    <th> Fotografia</th>
                    <th> Comentario</th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>

                    <?php
                    while ($dados = mysqli_fetch_array($result)) {
                    ?>
                    <td><?php echo $dados['comentarioId']?></td>
                    <td><?php echo $dados['perfilNome']?></td>
                    <td><img src="../<?php echo $dados['fotoURL']?>" width="120"></td>
                    <td><?php echo $dados['comentarioTexto']?></td>


                    <td><a href="fotografo.php?id=<?php echo $dados['perfilId']?>"><span class="btn-sm btn-success">Ver perfil</span></a></td>


                    <td><a href="" onclick="confirmaEliminaCom(<?php echo $dados['comentarioId']?>);"><span class="btn-sm btn-danger">Elimina  <i class="fas fa-trash-alt"></i></span></a></td>

                        </tr>
                <?php
                }
                ?>
                </tr>
            </table>
            <br>
        </div>

    </section>

    <!--<div class="container">
        <div class="section-title">
            <span>Contas</span>
            <h2>Contas</h2>
        </div>
        <?php
        $sql="Select * from perfis";
        $resultPerfil=mysqli_query($con, $sql);
        ?>
        <table class="table table-hover table-striped">

            <tr>
                <th> Id</th>
                <th> Nome </th>
                <th> Estado </th>
                <th> Email </th>
                <th> Palavra Passe </th>
                <th> Criador </th>
                <th colspan="3"> Opções </th>
            </tr>
            <?php
            while ($dadosPerfil=mysqli_fetch_array($resultPerfil)) {
            ?>
            <tr>
                <td><?php echo $dadosPerfil['perfilId']?></td>
                <td><?php echo $dadosPerfil['perfilNome']?></td>
                <td><?php echo $dadosPerfil['perfilEstado']?></td>
                <td><?php echo $dadosPerfil['perfilEmail']?></td>
                <td><?php echo $dadosPerfil['perfilPassword']?></td>
                <td><?php echo $dadosPerfil['perfilFotografo']?></td>
                <td><span class="btn-sm btn-warning">2&nbsp;<i class="fas fa-bell"></i></span></td>
                <td><a href="#" onclick="confirmaEliminaPerfil(<?php echo $dadosPerfil['perfilId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>
            </tr>
            <?php
            }
            ?>

        </table>
        <br>
    </div>-->

</main><!-- End #main -->

</body>

<?php
bottom();
?>
