<!-- header -->
<?php include("../views/header.php");
  RenderBanner("Gestión de Usuarios");
?>
<!-- Barra Lateral -->

<?php include("../views/lateral.php");
  renderLateral(0);
?>
<!-- Cuerpo -->

<div id="Contenido"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->

<!-- Esto parece no existir tras el cambio en el prototipado falso
  <form>
    Barra de busqueda por texto
    <span>Búsqueda Usuarios</span>
    <input type="text" name="Buscar">
    <input type="submit">

    Caja de filtrado por rol
    <span>Filtrar por rol</span>
    <select name="Filtrar">
      <option>Rol1</option>
      <option>Rol2</option>
      <option>Rol3</option>
    </select>
  </form>
Hasta aqui-->

</br></br></br></br>
  <!-- Tabla de Usuarios -->
<div class="tabla">
  <table>
    <tr><td><strong>Nombre</strong></td><td><strong>ID</strong></td><td><strong>email</strong></td><td><strong>Eliminar</strong></td></tr>
    <!-- esta tabla va a ser creada dinamicamente en un futuro -->
    <tr><td>Username1</td><td>ID1</td><td>email1</td><td><button>X</button> </td></tr>
    <tr><td>Username2</td><td>ID2</td><td>email2</td><td><button>X</button> </td></tr>
    <tr><td>Username3</td><td>ID3</td><td>email3</td><td><button>X</button> </td></tr>
  </table>
</div>
<button>Crear</button><button>Modificar</button>
</div>

<?php include("../views/footer.php");
  renderFooter("Admin"); //esto tiene que ser cambiado por un get de username en php
?>
