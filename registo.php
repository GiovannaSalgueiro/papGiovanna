<?php
include_once("includes/body.inc.php");


if(isset($_GET['erro'])) {

    alert("Nome de utilizador ou palavra-passe errada, tente de novo.");
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
    <head>
        <title>BluPost</title>
        <meta charset='utf-8'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>

        <meta content='' name='descriptison'>
        <meta content='' name='keywords'>
        <!-- Font awesome -->
        <script src='https://kit.fontawesome.com/e8e2985ace.js' crossorigin='anonymous'></script>

        <!-- Favicons -->
        <link href='imagens/favico.png' rel='icon'>
        <link href='assets/img/apple-touch-icon.png' rel='apple-touch-icon'>

        <!-- Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy' rel='stylesheet'>


        <!-- Vendor CSS Files -->
        <link href='assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link href='assets/vendor/icofont/icofont.min.css' rel='stylesheet'>
        <link href='assets/vendor/boxicons/css/boxicons.min.css' rel='stylesheet'>
        <link href='assets/vendor/owl.carousel/assets/owl.carousel.min.css' rel='stylesheet'>
        <link href='assets/vendor/venobox/venobox.css' rel='stylesheet'>

        <!-- Template Main CSS File -->
        <link href='assets/css/style.css' rel='stylesheet'>
        <script>

            function valida() {
                var erro = false;
                if($('#msg').html()!='')
                    return false;
                return true;

            }

        </script>
    </head>


  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">


          <br>
          <small><a href="index.php"> <h8>Voltar</h8></a></small>
          <br>
          <br>



          <div class="section-title">

              <span>Registo</span>
              <h2>Registo</h2>

          </div>

          <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <br>

              <div class="container">
                  <form action="registar.php" method="post" onsubmit="return valida()" >

                      <div class="container">
                          <div class="row">
                              <div class="col-3">
                              <img src="imagens/perfil.png">
                              </div>
                              <div class="col-9"><div class="modal-body">
                                      <div class="form-group">
                                          <label>Nome:</label>
                                          <input type="name" class="form-control" name="perfilNome" required>

                                      </div>
                                      <div class="form-group">
                                          <label>Email:</label>
                                          <input type="text" class="form-control" id="perfilEmail" name="perfilEmail">
                                      </div>
                                      <div class="form-group">
                                          <label>Palavra-passe</label>
                                          <input id="pwd" type="password" class="form-control" name="perfilPassword" required>
                                          <label>Confirmar Palavra-passe</label>
                                          <input id="pwd2" type="password" class="form-control" name="perfilPassword2" required>
                                          <small class="form-text text-muted">Nunca compartilhe a sua palavra-passe com mais ninguém.</small>
                                          <br>
                                          <span class="bg-warning" id="msg"></span>
                                      </div>

                                  </div>
                              </div>
                          </div>


                          <div class="modal-footer">
                              <button type="submit" class="btn btn-warning" style="">Criar conta</button>
                          </div>
                          <a href="sessao.php"><h8><strong>Já tem uma conta? Faça já o login.<strong></h8></a>
                      </div>

                  </form>
              </div>
          </div>
      <br>
      <br>

        <div class="row portfolio-container">


        </div>

  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php
bottom();

?>