<?php
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}
?>
<nav id="Menu">
      <h1 hidden>Menu principal</h1>
        <ul>
          <li><a href="pagina1.php">Home</a></li>
          <li><a href="pagina2.php">Veículos</a></li>
          <li><a href="marca.php">Marca</a></li>
          <li><a  href="categoria.php">Categoria</a></li>
          <li><a href="logout.php">Sair.</a></li>

      </nav>