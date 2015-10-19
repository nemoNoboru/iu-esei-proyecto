<?php include("views/header.php");
	RenderBanner("Cabeza");
?>

<?php include("views/lateral.php");
	RenderLateral("Menu1");
?>


<div>
	<FORM >
	<h1>Crear Funcionalidad</h1>
	<TABLE BORDER=0>
		<TR>
			<TD>Nombre Funcionalidad</TD><TD><INPUT type=text name="nombre"></TD>
		</TR>

		<TR>
			<TD>Descripcion:</TD><TD><TEXTAREA rows="5" cols="30" name="comentarios"></TEXTAREA></TD>
		</TR>

		<TR>
			<td></td><TD>Paginas</TD><td>Permitir</td>
		</TR>
		<TR>
			<td></td><TD>Pagina 1</TD><td><input type="checkbox" name="opcion1" value="check1"></td>
		</TR>
		<TR>
			<td></td><TD>Pagina 2</TD><td><input type="checkbox" name="opcion1" value="check1"></td>
		</TR>
		<TR>
			<td></td><TD>Pagina 3</TD><td><input type="checkbox" name="opcion1" value="check1"></td>
		</TR>
		<TR>
			<td></td><TD>Pagina 4</TD><td><input type="checkbox" name="opcion1" value="check1"></td>
		</TR>

	</TABLE>

	<div><button><a href="">Atras</a></button></div>
	<div><INPUT type="submit" value="Confirmar"></div>

	</FORM>
</div>

<?php include("views/footer.php");
	renderFooter("Pie");
?>
