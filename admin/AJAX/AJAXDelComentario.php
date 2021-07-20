<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idComentario']);
$sql="delete from comentarios where comentarioId=$id";
mysqli_query($con,$sql);

$texto='ERR: '.mysqli_error($con).'\n'.'AFFECTED:'.mysqli_affected_rows($con);
file_put_contents("txt.log",$sql);
file_put_contents("txt2.log",$texto);
return(true);

?>
