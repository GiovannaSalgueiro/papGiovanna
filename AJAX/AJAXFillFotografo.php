<?php
include_once("includes/body.inc.php");
$txt=addslashes($_POST['txt']);

echo $sql="select * from  fotografos where fotografoNome like '%$txt%'";

$result = mysqli_query($con, $sql);
while ($dados = mysqli_fetch_array($result)) {
    ?>
    <div class="col-lg-4 col-sm-6">
        <a class="arrange-items"
           href="single-listing.php?id=<?php echo $dadosEstabelecimentos['estabelecimentoId'] ?>">
            <div class="arrange-pic">
                <img class="centrinho"
                     src="<?php echo $dadosEstabelecimentos['estabelecimentoMiniaturaURL'] ?>"
                     alt="">
                <div class="rating">4.9</div>
                <div class="tic-text"><?php echo $dadosEstabelecimentos['categoriaNome'] ?></div>
            </div>
            <div class="arrange-text">
                <h5><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></h5>
                <span><?php echo $dadosEstabelecimentos['estabelecimentoLocalidade'] ?></span>
                <p><?php echo $dadosEstabelecimentos['estabelecimentoSlogan'] ?></p>
                <div class="open tomorrow">Abre amanhã às 10 da manhã</div>
            </div>
        </a>
    </div>
    <?php

}
?>


