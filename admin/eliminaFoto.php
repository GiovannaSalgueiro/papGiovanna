<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from fotos where fotoId=".$id;
mysqli_query($con,$sql);
header("location:index.php");
?>