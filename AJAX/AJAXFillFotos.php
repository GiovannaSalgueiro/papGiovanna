<?php
// dados na base de dados
include_once("includes/body.inc.php");

$txt=addslashes($_POST['txt']);

$result=mysqli_query($con,$sql);

?>
<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaEmpresa.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $dados['empresaId']?></td>
            <td><?php echo $dados['empresaNome']?></td>
            <td><img width='90' src="<?php echo $dados['empresaLogoURL']?>"></td>
            <td><a href="editaEmpresa.php?id=<?php echo $dados['empresaId']?>"> <i class="fas fa-edit text-primary"></i></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['empresaId']?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>

    <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php echo $dados['albumCapaURL']?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
                <h4><?php echo $dados['albumNome']?></h4>
                <p><?php echo $dados['albumData']?></p>
                <a href="port11.php"><i class="bx bx-plus"></i></a>
                <a href="editaAlbum.php?id=<?php echo $dados['albumId']?>"><i class="far fa-edit" style="color:#ffb459"></i></a>
                <input type="checkbox">
                <!-- <a href="#" onclick="confirmaElimina(<?php echo $dados['empresaId']?>);"> <i class="fas fa-trash  text-danger"></i></a></td> -->
            </div>
        </div>


</table>
