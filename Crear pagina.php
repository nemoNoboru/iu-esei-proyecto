<?php include("views/header.php");
	RenderBanner("Cabeza");
?>

<?php include("views/lateral.php");
	RenderLateral("Menu1");
?>



<FORM >
<h1>Crear Pagina</h1>
<TABLE>

<TR>
	<TD>Nombre Pagina</TD><TD><INPUT type=text name="nombre"></TD>
</TR>

<TR>
	<TD>Descripcion:</TD><TD><TEXTAREA cols="30"></TEXTAREA></TD>
</TR>
</table>
<table border='1'>
<TR>
	<TD>Funcion</TD><td>Permitir</td><td colspan='2'>Permitir</td><td>Permitir</td><td>Permitir</td>
</TR>
<TR>
	<TD></TD><td>acceso</td><td>modificacion</td></TD><TD></TD><td>acceso</td><td>modificacion</td>
</TR>
<TR>
	<TD>Funcion 1</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td> <TD>Usuario 1</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td>
</TR>
<TR>
	<TD>Funcion 2</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td> <TD>Usuario 2</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td>
</TR>
<TR>
	<TD>Funcion 3</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td> <TD>Usuario 3</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td>
</TR>
<TR>
	<TD>Funcion 4</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td> <TD>Usuario 4</TD><td><input type="checkbox" name="opcion1" value="check1"></td><td><input type="checkbox" name="opcion1" value="check1"></td>
</TR>

<TR>
	<td colspan='3'><button><a href="">Atras</a></button></td><TD colspan='3'><INPUT type="submit" value="Confirmar"></TD>
</TR>
</TABLE>
</FORM>

<?php include("views/footer.php");
	renderFooter("Pie");
?>
