    <?php include ("views/header.php");
    RenderBanner("Cabecera");
    ?>

    <?php include ("views/lateral.php");
    RenderBanner ("Menu");
    ?>
    <div>
        <h1>Modificar Rol</h1>
        <table frame ="void" rules="none">
            <tr align="center">
                <td>
                    <FORM METHOD="post" ACTION="process_modificarRol_1.php">
                        <INPUT TYPE="SUBMIT" VALUE="B�sico" style='width:75px; height:35px'></form>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <FORM METHOD="GET" ACTION="">
                        <INPUT TYPE="SUBMIT" VALUE="Usuarios" style='width:75px; height:35px'></form>
                </td>
            </tr>
            <tr>
                <td>Puede modificar el nombre, <br>la descripci�n y <br>las funcionalidades del Rol</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Puede asignar el rol a los<br> usuarios</td>
            </tr>
        </table>
        <br>
         <button>Atr�s</button>
    </div>
    <?php include ("views/footer.php");
    RenderBanner("Pie");
    ?>
