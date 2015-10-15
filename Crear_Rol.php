<?php include ("views/header.php");
	RenderBanner("Cabecera");
?>

<?php include ("views/lateral.php");
        RenderBanner ("Menu");
?>
    <div>
        <h1>Crear Rol</h1>
        <form action="process_crearRol.php" method="post">
        Nombre de Rol: <INPUT TYPE="text" NAME="NOMBRE" SIZE=19 MAXLENGTH=19><br><br>
        Descripci�n:   <TEXTAREA COLS="20" ROWS="1" NAME="DESCRIPCION"></TEXTAREA> <br><br>

        <table frame="void" rules="rows">
    <tr align="center" bgcolor = grey>
        <td>Funci�n</td>
        <td></td>
        <td>Permitir</td>
    </tr>
    <tr align ="center">
        <td>Funci�n 1</td>
        <td></td>
        <td> <input type="checkbox" name="permitir"/></td>
    </tr>
    <tr align ="center">
        <td>Funci�n 2</td>
        <td></td>
        <td> <input type="checkbox" name="permitir" checked="checked" /></td>
    </tr>
    <tr align="center">
        <td>Funci�n 3</td>
        <td></td>
        <td><input type="checkbox" name="permitir"/></td>
    </tr>
    <tr align ="center">
        <td>Funci�n 4</td>
        <td></td>
        <td><input type="checkbox" name="permitir" checked="checked" /></td>
    </tr>
</table><br>
 <button>Atr�s</button>
 <button type="submit" value="Confirmar">Confirmar</button>
 </form>
   </div>
<?php include ("views/footer.php");
        RenderBanner("Pie");
?>
