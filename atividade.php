<?php
include_once("includes/body.inc.php");
top1();
$sql="SELECT * from favoritos  INNER JOIN perfis on favoritoPerfilId = perfilId inner join fotografos on favoritoFotografoId = fotografoPerfilId inner join albuns on fotografoPerfilId = albumFotografoId
				inner join fotos on albumId=fotoAlbumId where favoritoPerfilId=".$_SESSION['id'];

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$con->set_charset("utf8");

$result = mysqli_query($con, $sql);
?>

<body>
<!-- ======= Hero Section ======= -->
<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services" class="services">
        <div class="container">


            <div class="section-title">
                <span>Atividade</span>
                <h2>Atividade</h2>
            </div>

            <!-- <small>Pesquisar:</small><br><input type="text" id="search"> -->
            <div class="row">
                <?php
                $sqlR="SELECT *,count(fotoAlbumId) as r from favoritos  INNER JOIN perfis on favoritoPerfilId = perfilId inner join fotografos on favoritoFotografoId = fotografoPerfilId inner join albuns on fotografoPerfilId = albumFotografoId
				inner join fotos on albumId=fotoAlbumId where favoritoPerfilId=".$_SESSION['id'];
                $resultR = mysqli_query($con, $sqlR);
                $dadosR= mysqli_fetch_array($resultR);

                if($dadosR['r']<1){ ?>
                    <h2>Ainda não tem nenhum fotógrafo com favorito</h2>
                    <?php
                }else{
                while ($dados = mysqli_fetch_array($result)) {


                    ?>
                    <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="post-box">

                            <a href="#" data-toggle="modal" onclick="mostraFoto(<?php echo $dados['fotoId']?>)">
                                <img width="320" src="<?php echo $dados['fotoURL']?>" class="post-img" alt="">
                            </a>

                        </div>
                    </div>
                    <?php

                }
                }
                ?>

            </div>
        </div>
    </section>
</main><!-- End #main -->


<!-- ======= PERFIL ======= -->
<div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="perfil.php"><h5 class="modal-title" id="exampleModalLabel">Perfil</h5></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputEmail">Nome de Utilizador:</label>
                        <input type="email" class="form-control" id="InputNomUti" placeholder="anaSilva1">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email:</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="anaSilva@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>

                </form>
                <small><button type="submit" class="btn btn-warning">Editar</button></small>
            </div>

            <div class="modal-footer">
                <h7>Sair da conta</h7>
                <i class="fas fa-sign-out-alt" style="color: #ffb727"></i>
            </div>
        </div>
    </div>
</div>
<!-- End Login -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<script>
    function fecha(){
        $('#regista').modal('toggle');
        $('#login').modal('toggle');
    }

</script>


</body>
<?php
bottom(HOME);

?>
