<?php
include_once("includes/body.inc.php");
if(isset($_GET['erro'])) {

    alert("Nome de utilizador ou palavra-passe errada, tente de novo.");
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

top1();


?>




<body>

<main id="main">

    <a href="index.php"> <h8>Voltar</h8></a>

</main><!-- End #main -->




</body>

<?php
bottom();

?>
