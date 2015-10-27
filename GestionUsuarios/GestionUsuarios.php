<!-- header -->
<?php include("../views/header.php");	//Incluye el header
  RenderBanner("Gestión de Usuarios");	//Muestra el header con la funcion definida en header.php
?>
<!-- Barra Lateral -->

<?php include("../views/lateral.php");	//Incluye el menu lateral
  renderLateral(0);						//Muestra el menu lateral con la funcion definida en lateral.php
?>
<!-- Cuerpo -->

<div id="Contenido"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->

  <?php											//Aqui no se incluye la clase RenderTableGestion porque ya se incluye en el header
    $table_maker = new RenderTableGestion;		//Se crea un Objeto que va a crear las tablas de gestion
    $table_maker->tableUsuario();				//Se muestra la tabla de gestion de usuarios
  ?>

<button onclick="location.href='CrearUsuario.php'">Crear</button> 			<!--Boton para crear un usuario-->
<button onclick="location.href='ModificarUsuario.php'">Modificar</button>	<!--Boton para modificar un usuario-->
</div>

<?php include("../views/footer.php");	//Incluye el footer
  renderFooter(); 						//Muestra el footer con la funcion definida en footer.php
?>
