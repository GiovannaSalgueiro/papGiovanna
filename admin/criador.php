<?php
include_once("includes/body.inc.php");
top();

?>

<body>
<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services1" class="services">

        <div class="section-title">
            <span>Criador de Conteudo</span>
            <h2>Criador de Conteudo</h2>
        </div>


        <div class="container">

            <table class="table table-hover table-striped">
                <tr>
                    <th>Id do Fotografo </th>
                    <th> Nome do Criador </th>
                    <th> Capa </th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ana Silva</td>
                    <td><img src="assets/img/me.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><a href="ana.html"><span class="btn-sm btn-success">Detalhes</span></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>João Santos</td>
                    <td><img src="assets/img/joao1.jpg" width="102"> </td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Maria Pereira</td>
                    <td><img src="" width="102"> Sem imagem </td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                    <td><span class="btn-sm btn-success">Detalhes</span></td>
                </tr>
            </table>
            <br>
        </div>

    </section>

    <div class="container">
        <div class="section-title">
            <span>Aceitar/rejeitar</span>
            <h2>Aceitar/rejeitar</h2>
        </div>

        <table class="table table-hover table-striped">
            <tr>
                <th> Nome</th>
                <th> Telemovel </th>
                <th> Cidade </th>
                <th> Email </th>
                <th> Freelance </th>
                <th colspan="3"> Opções </th>
            </tr>
            <tr>
                <td>Ana Silva</td>
                <td>918485876</td>
                <td>Maceira, Leiria</td>
                <td>anaSilva@gmail.com</td>
                <td>Disponivel</td>
                <td><i class="fas fa-check-circle" style="color: green"></i></i></td>
                <td><i class="fas fa-times-circle" style="color: red"></i></td>
            </tr>
            <tr>
                <td>João Santos</td>
                <td>918485876</td>
                <td>Maceira, Leiria</td>
                <td>anaSilva@gmail.com</td>
                <td>Disponivel</td>
                <td><i class="fas fa-check-circle" style="color: green"></i></i></td>
                <td><i class="fas fa-times-circle" style="color: red"></i></td>
            </tr>

        </table>
        <br>
    </div>

</main><!-- End #main -->

</body>

<?php
bottom();

?>
