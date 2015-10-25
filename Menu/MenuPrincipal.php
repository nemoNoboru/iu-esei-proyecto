<?php include("../views/header.php");
  RenderBanner("Menu Principal");
?>
<!-- DISCLAIMER: ESTE MENU PRINCIPAL ES PALERISIMO Y SOLO SIRVE PARA TESTEAR ENLACES -->
</br></br></br></br>
<!-- Cuerpo -->
	<?php
	  switch ($_SESSION["LE"])
		{
		case 'sp':
			include '../views/lenguaje/Spanish.php';
			break;
		case 'en':
			include '../views/lenguaje/English.php';
			break;
		case 'br':
			include '../views/lenguaje/Brasilian.php';
			break;
		DEFAULT:
			include '../views/lenguaje/English.php';
			break;
		}
	?>

<div id="cuerpo"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
<div class="BotonMenu"><a href="../GestionRoles/GestionRoles.php"><?php echo $Idioma['Roles']; ?></a></div>
<div class="BotonMenu"><a href="../GestionUsuarios/GestionUsuarios.php"><?php echo $Idioma['Usuarios']; ?></a></div>
<div class="BotonMenu"><a href="../GestionFuncionalidades/GestionFuncionalidades.php"><?php echo $Idioma['Funcionalidades']; ?></a></div>
<div class="BotonMenu"><a href="../GestionPaginas/GestionPaginas.php"><?php echo $Idioma['Paginas']; ?></a></div>
</div>

</br></br></br></br>

<?php include("../views/footer.php");
  renderFooter();
?>
