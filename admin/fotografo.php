<?php
include_once("includes/body.inc.php");
top();
$id=intval($_GET['id']);
$sql="Select * from fotografos inner join perfis on fotografoPerfilId=perfilId where fotografoPerfilId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

?>
<script>
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
    <!-- ======= About Me Section ======= -->
    <section id="about1" class="about">
        <div class="container">

            <div class="section-title">
                <span><?php echo $dados['perfilNome']?></span>
                <h2><?php echo $dados['perfilNome']?></h2>
            </div>

            <div class="row">
                <img src="../<?php echo $dados['fotografoFotoURL']?>" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">

                        <div class="row">
                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong><?php echo $dados['perfilNome']?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong><?php echo $dados['fotografoTelemovel']?> </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong><?php echo $dados['fotografoCidade']?></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong><?php echo $dados['perfilEmail']?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong><?php echo $dados['fotografoFreelancer']?></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="row mt-n4">
                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-heart-alt" style="color:#FA5858;"></i>
                                    <span data-toggle="counter-up"><?php
                                        $sqlGosto="select count(gostoPerfilId) as nGostos from gostos inner join fotos on gostoFotoId=fotoId inner join albuns on fotoAlbumId=albumId
inner join fotografos on albumFotografoId=fotografoPerfilId where fotografoPerfilId=".$id;
                                        $res=mysqli_query($con,$sqlGosto);
                                        $dadosGosto=mysqli_fetch_array($res);
                                        echo $dadosGosto['nGostos'];?></span>
                                    <p><strong>Gostos</strong> Total de gostos</p>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                                    <span data-toggle="counter-up"><?php
                                        $sql="select count(*) as nAlbuns from albuns inner join fotografos 
                        on albumFotografoId=fotografoPerfilId where fotografoPerfilId=".$id;
                                        $res=mysqli_query($con,$sql);
                                        $dadosA=mysqli_fetch_array($res);
                                        echo $dadosA[0];?></span>
                                    <p><strong>Projetos</strong> concluidos</p>
                                </div>
                            </div>


                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-star" style="color: #ffb459;"></i>
                                    <span data-toggle="counter-up"> <?php $sqlfav2="select count(favoritoFotografoId) from favoritos where favoritoFotografoId=".$id;
                                        $sqlFav=mysqli_query($con,$sqlfav2);
                                        $dadosFav=mysqli_fetch_array($sqlFav);
                                        $fav=(int)$dadosFav['count(favoritoFotografoId)']; echo $fav;?></span>
                                    <p><strong>Recomendado</strong> Pessoas que gostaram do meu trabalho e recomendam.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                    <br>

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
            <?php
            $sql = "select * from albuns inner join fotografos on albumFotografoId=fotografoPerfilId where fotografoPerfilId=".$id;
            $resultAlbuns = mysqli_query($con, $sql);
            ?>
            <table class="table table-hover table-striped">

                <tr>
                    <th>Id da Galeria</th>
                    <th>Nome da Galeria</th>
                    <th> Capa </th>
                    <th>Data</th>
                    <th> Detalhes </th>
                    <th colspan="3"> Opções </th>
                </tr>
                <?php
                while ($dadosAlbuns = mysqli_fetch_array($resultAlbuns)) {
                    ?>
                <tr>
                    <td><?php echo $dadosAlbuns['albumId']?></td>
                    <td><?php echo $dadosAlbuns['albumNome']?></td>
                    <td><img src="../<?php echo $dadosAlbuns['albumCapaURL']?>" width="102"></td>
                    <td><?php echo $dadosAlbuns['albumData']?></td>
                    <td><a href="album.php?id=<?php echo $dadosAlbuns["albumId"]?>"><span class="btn-sm btn-success">Ver album</span></a></td>
                    <td><a href="#" onclick="confirmaEliminaAlbum(<?php echo $dadosAlbuns['albumId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>

                </tr>
                    <?php
                }
                ?>
            </table>
            <br>
        </div>

    </section>
</main><!-- End #main -->

</body>

<?php
bottom();

?>
