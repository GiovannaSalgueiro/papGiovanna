<?php
include_once("includes/body.inc.php");
top();
$sql="Select * from fotografos inner join perfis on fotografoPerfilId=perfilId";
$result = mysqli_query($con, $sql);
$resultCriador = mysqli_query($con, $sql);
?>
<script>
    function confirmaEliminaCriador(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameFotografp.php",
            type:"post",
            data:{
                idFotografo:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o/a fotografo:'+result+"?"))

                    window.location="eliminaFotografo.php?id=" + id;
            }
        })
    }

</script>
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
                    <th>Id</th>
                    <th> Nome do Criador </th>
                    <th> Email</th>
                    <th> Capa </th>
                    <th> Estado </th>
                    <th> Perfil </th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>
                    <?php
                    while ($dados = mysqli_fetch_array($result)) {
                    ?>
                    <td><?php echo $dados['fotografoId']?></td>
                    <td><?php echo $dados['fotografoNome']?></td>
                    <td><?php echo $dados['fotografoEmail']?></td>
                    <td><img src="../<?php echo $dados['fotografoFotoURL']?>" width="102"></td>

                    <td><a href="ativo-inativo.php?id=<?php echo $dados['perfilId']?>"><span class="btn-sm btn-primary"><?php echo $dados['perfilEstado']?></span></a></td>


                    <td><a href="fotografo.php?id=<?php echo $dados['fotografoId']?>"><span class="btn-sm btn-success">Ver perfil</span></a></td>
                    <td><span class="btn-sm btn-warning">2&nbsp;<i class="fas fa-bell"></i></span></td>
                    <td><a href="#" onclick="confirmaEliminaCriador(<?php echo $dados['fotografoId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>
                </tr>
                <?php
                }
                ?>
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
                <th> Email </th>
                <th> Cidade </th>
                <th> Freelance </th>
                <th> Capa </th>
                <th colspan="3"> Opções </th>
            </tr>
            <?php
            while ($dadosCriador = mysqli_fetch_array($resultCriador)) {
                ?>
            <tr>
                <td><?php echo $dadosCriador['fotografoNome']?></td>
                <td><?php echo $dadosCriador['fotografoTelemovel']?></td>
                <td><?php echo $dadosCriador['fotografoCidade']?></td>
                <td><?php echo $dadosCriador['fotografoEmail']?></td>
                <td><?php echo $dadosCriador['fotografoFreelancer']?></td>
                <td><img src="../<?php echo $dadosCriador['fotografoFotoURL']?>" width="102"></td>
                <td><i class="fas fa-check-circle" style="color: green"></i></i></td>
                <td><i class="fas fa-times-circle" style="color: red"></i></td>
            </tr>
                <?php
            }
            ?>

        </table>
        <br>
    </div>

</main><!-- End #main -->

</body>

<?php
bottom();

?>
