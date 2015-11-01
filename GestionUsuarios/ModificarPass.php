<!-- header -->
<?php include("../views/header.php");
  RenderBanner("Gestión de Usuarios");
?>
<!-- Barra Lateral -->

<?php include("../views/lateral.php");
  renderLateral(0);
?>
<!-- Cuerpo -->

<div id="Contenido">

  <!-- Formulario de contraseñas -->
<div>
  <form action="../php/GestionUsuarios/process_modificarPass.php" method="post">
    <h1>Modificar contraseña de usuario </h1>
    Contraseña: <input type="text" name="pass1"><br/>
    Repetir: <input type="text" name="pass2"><br/>
    <button onclick="history.go(-1)">Atrás</button>
    <input type="submit" value="Guardar" class="continuar">

  </form>
</div>
<div class="footer logo3"></div>
</div>



<?php include("../views/footer.php");
  renderFooter(); //esto tiene que ser cambiado por un get de username en php
?>
