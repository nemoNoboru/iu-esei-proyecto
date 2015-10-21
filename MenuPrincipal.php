<?php include("views/header.php");
  RenderBanner("Gestión de Usuarios");
?>
<!-- DISCLAIMER: ESTE MENU PRINCIPAL ES PALERISIMO Y SOLO SIRVE PARA TESTEAR ENLACES -->
</br></br></br></br>
<!-- Cuerpo -->

<div id="cuerpo"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
<div class="BotonMenu"><a href="GestionRoles/GestionRoles.php">ROLES</a></div>
<div class="BotonMenu"><a href="GestionUsuarios/GestionUsuarios.php">USUARIOS</a></div>
<div class="BotonMenu"><a href="GestionFuncionalidades/GestionFuncionalidades.php">FUNCIONALIDADES</a></div>
<div class="BotonMenu"><a href="GestionPagina/GestionPaginas.php">PÁGINAS</a></div>
</div>

</br></br></br></br>

<?php include("views/footer.php");
  renderFooter("Admin"); //esto tiene que ser cambiado por un get de username en php
?>
