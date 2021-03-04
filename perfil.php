<?php
include_once("includes/body.inc.php");
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
        <link href='assets/img/favico.png' rel='icon'>
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
    </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

      <nav class="nav-menu d-none d-lg-block">
          <ul>
              <li><a href="index.php">Início</a></li>
              <li><a href="post.php">Publicações</a></li>
              <li><a href="post.php">Atividade</a></li>
              <li><a>|</a> </li>
              <li><a href="ana.php">Perfil</a> </li>

          </ul>
      </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>Perfil</span>
          <h2>Perfil</h2>
        </div>

        <div class="row">
          <img src="assets/img/me.jpg" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <a href="#" data-toggle="modal" data-target="#edita"><i class="far fa-edit" style="color: #ffb459; text-align: right"></i></a>
              <div class="row">
                <div class="col-lg-6">
                  <br>
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong> Ana Silva</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong> 918 632 176 </li>
                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong> Maceira, Leiria</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <br>
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> anaSilva@gmail.com</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Disponível</li>
                  </ul>
                </div>
              </div>
              <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-heart-alt" style="color:#FA5858;"></i>
                    <span data-toggle="counter-up">25</span>
                    <p><strong>Gostos</strong> Total de gostos</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                    <span data-toggle="counter-up">4</span>
                    <p><strong>Projetos</strong> concluidos</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                    <span data-toggle="counter-up">0.5</span>
                    <p><strong>Anos de experiencia </strong> </p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-star" style="color: #ffb459;"></i>
                    <span data-toggle="counter-up">4</span>
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


    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Meu Portfolio</span>
          <h2>Meu Portfolio</h2>

        </div>
        <div class="content pl-lg-4 d-flex flex-column justify-content-center">
          <i class="fas fa-trash-alt" style="color: #ffb459; text-align: right"></i>
            <br>
          <a href="#" data-toggle="modal" data-target="#adicionar" style="text-align: right"><i class="fas fa-plus" style="color: #ffb459; text-align: right"></i></a>
        </div>
        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">Todos</li>
          <li data-filter=".filter-card">2020</li>
          <li data-filter=".filter-web">2019</li>
          <li data-filter=".filter-app">2018</li>
        </ul>

        <div class="row portfolio-container">
<!-- app=            card=2019               web=2020-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/principal1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Sessão de fografia dos bébes de Março</h4>
              <p>22.11.2020</p>
              <a href="port11.php"><i class="bx bx-plus"></i></a>
              <input type="checkbox">
            </div>

          </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Almoço Americano</h4>
                    <p>15.10.2019</p>
                    <a href="port2.html"><i class="bx bx-plus"></i></a>
                  <input type="checkbox">
                </div>

            </div>
        </div>
      </div>
    </section><!-- End My Portfolio Section -->



  </main><!-- End #main -->

  <!-- ======= Edita======= -->
  <div class="modal fade" id="edita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="InputName">Nome:</label>
              <input type="name" class="form-control" id="InputName1" aria-describedby="emailHelp" placeholder="Ana Silva">

            </div>
            <div class="form-group">
              <label for="InputEmail">Email:</label>
              <input type="email" class="form-control" id="InputEmail" placeholder="anaSilva@gmail.com">
            </div>
            <div class="form-group">
              <label for="InputPassword1">Palavra-passe</label>
              <input type="password" class="form-control" id="InputPassword1" placeholder="*********">
            </div>


            <label for="inputEmail4" class="form-label">Telemovel</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="918 632 176">
            <label for="inputCity" class="form-label">Localidade</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Maceira, Leiria">
            <label for="inputAddress2" class="form-label">Website</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="www.example.com"><br>
            <label for="inputState" class="form-label">Freenlace</label>
            <select id="inputState" class="form-select">
              <option selected>Disponivel</option>
              <option>Não disponivel</option>
            </select>
          <p></p>
          <label>Foto</label>
          <input type="file" name="logoEmpresa">
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-warning">Editar</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--End Edita -->

    <!-- ======= Adiciona======= -->
    <div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adiciona Galeria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="InputName">Nome:</label>
                <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Ana Silva">
              </div>
                <div class="form-group">
                    <label for="InputName">Data:</label>
                    <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="20.05.2019">
                </div>

              <label>Foto de capa</label>
              <input type="file" name="logoEmpresa">
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-warning">Adiciona</button>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--End Adiciona -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>
<?php
bottom();
?>