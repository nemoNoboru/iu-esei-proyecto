<?php include("../views/header.php");
  RenderBanner("Menu Principal");
  $Idioma = getIdioma();
?>
<!-- DISCLAIMER: ESTE MENU PRINCIPAL ES PALERISIMO Y SOLO SIRVE PARA TESTEAR ENLACES -->


<div class="container"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
  <div class="row">
    <div class="BotonMenu col-md-6 text-center"><a href="../GestionRoles/GestionRoles.php"><?php echo $Idioma['Gestión de Roles']; ?></a></div>
    <div class="BotonMenu col-md-6 text-center"><a href="../GestionUsuarios/GestionUsuarios.php"><?php echo $Idioma['Gestión de Usuarios']; ?></a></div>
  </div>
  <div class="row">
    <div class="BotonMenu col-md-6 text-center"><a href="../GestionFuncionalidades/GestionFuncionalidades.php"><?php echo $Idioma['Gestión de Funcionalidades']; ?></a></div>
    <div class="BotonMenu col-md-6 text-center"><a href="../GestionPaginas/GestionPaginas.php"><?php echo $Idioma['Gestión de Páginas']; ?></a></div>
  </div>
</div>

<?php include("../views/footer.php");
  renderFooter();
?>
