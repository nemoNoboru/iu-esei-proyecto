<!-- header -->
<?php include("../views/header.php");	//Incluye el header
  RenderBanner("Gestión de Usuarios");	//Muestra el header con la funcion definida en header.php
  $Idioma = getIdioma();
?>
<!-- Barra Lateral -->
<div class="container"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
  <div class="row">
    <?php include("../views/lateral.php");	//Incluye el menu lateral
      renderLateral(0);						//Muestra el menu lateral con la funcion definida en lateral.php
    ?>
    <!-- Cuerpo -->
    <div class="col-md-9 col-sm-12">
      <h1><?php echo $Idioma['Gestión de Usuarios']; ?></h1>
      <?php											//Aqui no se incluye la clase RenderTableGestion porque ya se incluye en el header
        $table_maker = new RenderTableGestion;		//Se crea un Objeto que va a crear las tablas de gestion
        $table_maker->tableUsuario();				//Se muestra la tabla de gestion de usuarios
      ?>

      <button class='btn btn-default' onclick="location.href='CrearUsuario.php'"><?php echo $Idioma['Crear']; ?></button> 			<!--Boton para crear un usuario-->
      <button class='btn btn-default' onclick="location.href='ModificarUsuario.php'"><?php echo $Idioma['Modificar']; ?></button>	<!--Boton para modificar un usuario-->
    </div>
  </div>
  <!-- Modal para verificar borrado-->
  	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $Idioma['Validar']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $Idioma['Seguro']; ?>
      </div>
	  <?php $dato=1; ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
        <button type="button" onclick='location.href="../php/GestionUsuarios/process_borrarUsuario.php?id=.<?php echo $dato; ?>.&confirm=0"' class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="footer logo3"></div>
<?php include("../views/footer.php");	//Incluye el footer
  renderFooter(); 						//Muestra el footer con la funcion definida en footer.php
?>
