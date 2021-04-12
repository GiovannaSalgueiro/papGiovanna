<?php
    $con=mysqli_connect("localhost","root","","pap2021blupost");
    $sql="Select * from perfis";
    $res=mysqli_query($con,$sql);



?>
<form action="confirmaLogin.php" method="post">
   <select name="utilizador">
       <?php
       while ($dados=mysqli_fetch_array($res)){
           ?>
       <option value="<?php echo $dados['perfilId']?>"><?php echo $dados['perfilNome']?></option>
       <?php
       }
       ?>
   </select>
    <input type="submit">
</form>