<?php
  function RenderLateral($no){
    $items = array("<a href='../GestionUsuarios/GestionUsuarios.php'>Gestion de Usuarios</a>",
                    "<a href='../GestionRoles/GestionRoles.php'>Gestion de Roles</a>",
                    "<a href='../GestionPaginas/GestionPaginas.php'>Gestion de Paginas</a>",
                    "<a href='../GestionFuncionalidades/GestionFuncionalidades.php'>Gestion de Funcionalidades</a>");
    echo "<div id='lateral'>";
    echo "<ul id='lista'>";
    echo "<li><span id='marcado'>";
    echo $items[$no];
    unset($items[$no]);
    echo "</span></li>";
    foreach ($items as $item) {
      echo "<li>".$item."</li>";
    }
    echo "</ul>";
    echo "</div>";
  }
?>
