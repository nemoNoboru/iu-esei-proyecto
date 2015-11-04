<?php include("../views/header.php"); 	//Incluye el header
  RenderBanner("Menu Principal"); 		//Muestra el header con la funcion definida en header.php
  $Idioma = getIdioma(); 				//Guarda en $Idioma el array asociativo que almacena el idioma. getIdioma() esta definido en header.php
?>
<!-- DISCLAIMER: ESTE MENU PRINCIPAL ES PALERISIMO Y SOLO SIRVE PARA TESTEAR ENLACES -->


<div class="container"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
  <div class="row">
    <div class="col-md-6 text-center">
      <a style="text-decoration: none" href="../GestionUsuarios/GestionUsuarios.php">
        <div class="BotonMenu">
          <div class="logo3"></div>
          <?php echo $Idioma['Gestión de Usuarios']; ?>
        </div>
      </a>
    </div>
    <div class="col-md-6 text-center">
      <a style="text-decoration: none" href="../GestionRoles/GestionRoles.php">
      <div class="BotonMenu">
        <div class="logo1"></div>
        <?php echo $Idioma['Gestión de Roles']; ?>
      </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-center">
      <a style="text-decoration: none" href="../GestionPaginas/GestionPaginas.php">
      <div class="BotonMenu">
        <div class="logo4"></div>
        <?php echo $Idioma['Gestión de Páginas']; ?>
      </div>
      </a>
    </div>
    <div class="col-md-6 text-center">
      <a style="text-decoration: none" href="../GestionFuncionalidades/GestionFuncionalidades.php">
      <div class="BotonMenu">
        <div class="logo2"></div>
        <?php echo $Idioma['Gestión de Funcionalidades']; ?>
      </div>
      </a>
    </div>
  </div>
</div>

<?php include("../views/footer.php"); 	//Incluye el footer
  renderFooter(); 						//Muestra el footer con la funcion definida en footer.php
?>
