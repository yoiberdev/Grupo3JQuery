<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Grupo3JQuery">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $ruta ?>/Paginas/view/producto/listar_productos.php">Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $ruta ?>/Paginas/view/categoria/listar_categorias.php">Categoria</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $ruta ?>/Paginas/view/cliente/listar_clientes.php">Clientes</a> 
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>