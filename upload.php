<?php

  include("../config/config.php");

  if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
    die("Falha ao enviar arquivo");

$arquivo = $_FILES['arquivo'];
   if($arquivo['size'] > 2097152)
   die("Arquivo muito grande!! MAX: 2MB");

   $pasta = "arquivos";
   $nomeDoArquivo = $arquivo['name'];
   $novoNomeDoArquivo = uniqid();
   $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

   if($extensao != "jpg" && $extensao != "png")
     die("Tipo de arquivo não aceito");
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if($deu_certo){
        $mysqli->query("INSERT INTO arquivos (path) VALUES( '$path')") or die($mysqli->error);
    echo "<p> Arquivo enviado com sucesso!!</p>"; // <a target=\"_blank\" href= \"arquivos$novoNomeDoArquivo.$extensao\">clique aqui: </a>
  } else
    echo "<p>Falha ao enviar arquivo</p>";

  }
  

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Upload de fotos</title>
    <link rel="stylesheet" href="css/upload.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200;300;500&display=swap" rel="stylesheet">
</head>
<style>

  *{
    font-family: 'Alexandria', sans-serif;;
  }

  .navbar-expand-lg{
    background-color: transparent;
  }

  .off-canvas{
    background-color: transparent;
  }

.botoes{
  display: flex;
  flex-direction: row
}

#texto{
  font-size:medium;
}

.field{
    width: 100%;
    margin: 15px 0;
}

input[type=submit]{
    display: block;
    background-color: #ccc;
    height: 35px;
    border: none;
    outline: 0;
    cursor: pointer;
    width: 100px;
    margin: 0 auto;
    text-align: center;
    border-radius: 15px;
    position: relative;
    top: 1rem;
}

.container{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border-bottom: 3rem;
  height: auto;
  padding: 30px;
  border: 1px solid #ccc;
  position: relative;
  top: 5rem;
}

@media screen and (max-width:600px) {

    .container{
        width: 100%;
    }
    
}
  </style>

<body>
<nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
        <a class="navbar-brand" href="navegação">
            <a href="../cadastro.php"><img src="../fotos/logo.png" width="40" height="40" class="d-inline-block align-text-mid"></a>
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Navegação</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
          <a class="nav-link active" href="../gastronomia.php">Gastronomia</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="../hospedagem.php">Hospedagem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../galeria.php">Galeria</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link active" href="../reset.php">Redefinir senha</a>
        </li>

      </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button type="button" class="btn">
                <img src="../fotos/search.svg" alt="" width="20" height="20">
              </button>
            </form>
        </div>
      </div>
    </div>
  </nav>
  
<div class="container" id="upload">
<h1>Upload de Arquivos</h1>
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  Arquivo: <input type="file" required name="arquivo">
  <input type="submit" value="Salvar">
</form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>