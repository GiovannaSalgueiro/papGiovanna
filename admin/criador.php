<?php
include_once("includes/body.inc.php");
top();

$sql="Select fotografoPerfilId
     , perfilId
     , perfilPassword
     , perfilEstado
    , perfilNome
    , perfilEmail
    , fotografoFotoURL
    , notificacaoId
    , count(notificacaoPerfilId) as nAvisos
    from fotografos left join perfis on fotografoPerfilId=perfilId
    left join 
    (select * from notificacoes where notificacaoTipo='aviso') as tabela on perfilId=tabela.notificacaoPerfilId
    
    GROUP BY 1";
$result = mysqli_query($con, $sql);


?>

<script>
    function confirmaEliminaCriador(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameFotografo.php",
            type:"post",
            data:{
                idFotografo:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o/a fotografo:' +result+"?"))

                    window.location="eliminaFotografo.php?id=" + id;
            }
        })
    }
    function confirmaEliminaPerfil(id) {
        $.ajax({
            url:"AJAX/AJAXGetNamePerfil.php",
            type:"post",
            data:{
                idPerfil:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o perfil:' +result+"?"))

                    window.location="eliminaPerfil.php?id=" + id;
            }
        })
    }

</script>

<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services1" class="services">

        <div class="section-title">
            <span>Contas</span>
            <h2>Contas</h2>
        </div>


        <div class="container">
            <!-- <input id="search" type="text" class="form-control" placeholder="Pesquise"> -->

            <table class="table table-hover table-striped">
                <tr>
                    <th>Id</th>
                    <th> Nome </th>
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
                    <td><?php echo $dados['fotografoPerfilId']?></td>

                    <td><?php echo $dados['perfilNome']?></td>
                    <td><?php echo $dados['perfilEmail']?></td>
                    <td><img src="../<?php echo $dados['fotografoFotoURL']?>" width="102"></td>


                    <td><a href="ativo-inativo.php?id=<?php echo $dados['perfilId']?>"><span class="btn-sm btn-<?php echo $dados['perfilEstado']=='ativo'?'prim':'second'?>ary"><?php echo $dados['perfilEstado']?></span></a></td>


                    <td><a href="fotografo.php?id=<?php echo $dados['fotografoPerfilId']?>"><span class="btn-sm btn-success">Ver perfil</span></a></td>

                    <?php
                        // $sqlAviso="select *,count(noticacaoTi) as n from notificacoes inner join perfis on notificacaoPerfilId=perfilId where notificacaoTipo='aviso' and perfilId=".$dados['perfilId'];
                        //$resultAviso=mysqli_query($con, $sqlAviso);
                        //$dadosAviso=mysqli_fetch_array($resultAviso);
                    ?>
                    <td><span class="btn-sm btn-warning"><?php echo $dados['nAvisos']?>&nbsp;<i class="fas fa-bell"></i></span></td>


                    <td><a href="#" onclick="confirmaEliminaCriador(<?php echo $dados['fotografoPerfilId']?>);"><span class="btn-sm btn-danger">Elimina</span></a></td>

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
