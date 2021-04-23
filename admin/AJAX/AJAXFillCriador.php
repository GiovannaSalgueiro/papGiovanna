<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$sql="Select * from fotografos inner join perfis on fotografoPerfilId=perfilId where fotografoNome LIKE '$txt%'";

$result=mysqli_query($con,$sql);
?>

<section >

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
</section>

