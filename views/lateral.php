<?php
  function RenderLateral($no){
    $items = array("Gestion usuarios","Gestion roles","Gestion paginas","Gestion funcionalidades");
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
