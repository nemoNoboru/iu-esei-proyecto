<?php include ("views/header.php");
	RenderBanner("Cabecera");
?>

<?php include ("views/lateral.php");
        RenderBanner ("Menu");
?>
<div>
	<form action="process_gestionRoles" method="post">
<table border ="2px">
    <tr align="center">
        <td>Rol</td>
        <td>Descripci�n</td>
        <td>Eliminar</td>
    </tr>
    <tr align ="center">
        <td>Rol 1</td>
        <td>Descripci�n Rol 1</td>
        <td><button>x</button></td>
    </tr>
    <tr align ="center">
        <td>Rol 2</td>
        <td>Descripci�n Rol 2</td>
        <td><button>x</button></td>
    </tr>
    <tr align="center">
        <td>Rol 3</td>
        <td>Descripci�n Rol 3</td>
        <td><button>x</button></td>
    </tr>
</table><br>
        <button type="submit" value="Confirmar">Crear</button>
        <button>Modificar</button>
</form>
</div>
<?php include ("views/footer.php");
        RenderBanner("Pie");
?>
</html>
