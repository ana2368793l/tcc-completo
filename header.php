<?php

?>

<nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
        <a class="navbar-brand" href="navegação">
            <a href="cadastro.php"><img src="fotos/logo.png" width="40" height="40" class="d-inline-block align-text-mid"></a>
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
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
          <a class="nav-link active" href="gastronomia.php">Gastronomia</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="hospedagem.php">Hospedagem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="galeria.php">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="arquivos/upload.php">Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="reset.php">Redefinir senha</a>
        </li>

      </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button type="button" class="btn">
                <img src="fotos/search.svg" alt="" width="20" height="20">
              </button>
            </form>
        </div>
      </div>
    </div>
  </nav>