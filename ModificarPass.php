<!-- header -->
<?php include("views/header.php");
  RenderBanner("Gestión de Usuarios");
?>
<!-- Barra Lateral -->

<?php include("views/lateral.php");
  renderLateral(0);
?>
<!-- Cuerpo -->

<div id="Contenido">

  <!-- Formulario de contraseñas -->
<div>
  <form action="php/process_modificarPass.php" method="post">
    <h1>Modificar contraseña de usuario </h1>
    Contraseña: <input type="text" name="pass1"><br/>
    Repetir: <input type="text" name="pass2"><br/>
    <input type="submit" value="Atrás" onclick="history.go(-1)">
    <input type="submit" value="Guardar" class="continuar">

  </form>
</div>

</div>



<?php include("views/footer.php");
  renderFooter("Admin"); //esto tiene que ser cambiado por un get de username en php
?>
