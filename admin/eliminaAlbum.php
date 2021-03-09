<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from albuns albumId=".$id;
echo $con=mysqli_connect(HOST,USER,PWD,DATABASE);
mysqli_query($con,$sql);
// header("location:index.php");


// echo mysli_affecterd_rows($con)

?>