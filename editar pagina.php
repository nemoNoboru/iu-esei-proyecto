<?php include("views/header.php");
	RenderBanner("Cabeza");
?>

<?php include("views/lateral.php");
	RenderLateral("Menu1");
?>

<div>
	<FORM>
		<h1>Modificar Funcionalidad</h1>
		<TABLE BORDER=0>
			<TR>
				<TH>URL</TH><TH colspan='3'>ROLES</TH>
			</TR>
			<TR>
				<TD>URL 1</TD><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td>
			</TR>
			<TR>
				<TD>URL 2</TD><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td>
			</TR>
			<TR>
				<TD>URL 3</TD><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td>
			</TR>
			<TR>
				<TD>URL 4</TD><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td>
			</TR>
		</TABLE>

		<div><button><a href="">Atras</a></button></div>
		<div><INPUT type="submit" value="Guardar"></div>
		
	</FORM>
</div>

<?php include("views/footer.php");
	renderFooter("Pie");
?>
