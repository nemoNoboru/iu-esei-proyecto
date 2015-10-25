<!-- header -->
<?php include("../views/header.php");
  RenderBanner("Gestión de Usuarios");
?>
<!-- Barra Lateral -->

<?php include("../views/lateral.php");
  renderLateral(0);
?>
<!-- Cuerpo -->

<div id="Contenido"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->

  <?php
    $table_maker = new RenderTableGestion;
    $table_maker->tableUsuario();
  ?>

<button onclick="location.href='CrearUsuario.php'">Crear</button>
<button onclick="location.href='ModificarUsuario.php'">Modificar</button>
</div>

<?php include("../views/footer.php");
  renderFooter(); //esto tiene que ser cambiado por un get de username en php
?>
