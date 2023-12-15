<?php

include('protecao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200;300;500&display=swap" rel="stylesheet">
    <title>Galeria de fotos</title>
</head>
<style>
  *{
    font-family: 'Alexandria', sans-serif;;
  }

  a{
    color:black;
    text-decoration:none;
  }

  body {
    background-color:#E8F9FD;
  }

  h3{
    position:relative;
    top: 40px;
    font-style: bold;
  }

  .navbar-expand-lg{
    background-color: transparent;
  }

  .off-canvas{
    background-color: transparent;
  }
 
  .container22{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1rem;
  }

  #galeriaimagem {
    width: 40rem;
    height: auto;
    margin: 0;
  }
</style>
<body>

  <?php
  include("header.php");
  ?>

<div class="container22">
  <h1>GALERIA DE IMAGENS</h1>
</div>
<?php

include("config/config.php");

$sql = $mysqli->query("SELECT * FROM arquivos");

   while($linha = $sql->fetch_array(MYSQLI_ASSOC))
  {
?>



  <div class="container22" style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1rem;
">
  <div class="">
<a href="">
      <img id="galeriaimagem"
        src="arquivos/<?php echo $linha['path']; ?>"/>
        </a>
  </div>
  </div>


<?php
 }
?>  
  
</div>


</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>