<?php
include_once("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="delete * from comentarios where comentarioFotoId=$id";

mysqli_query($con,$sql);
header("location:index.php");

?>