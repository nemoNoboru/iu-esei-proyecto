<!-- header -->
<?php include("views/header.php");
  RenderBanner("Gestión de Usuarios");
?>

</br></br></br></br>
<!-- Barra Lateral -->

<?php include("views/lateral.php");
  renderLateral(0);
?>

</br></br></br></br>
<!-- Cuerpo -->

<div> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
  <form action="" method="post">
    <!-- Barra de busqueda por texto -->
    <span>Búsqueda Usuarios</span>
    <input type="text" name="Buscar">
    <input type="submit">

    <!-- Caja de filtrado por rol -->
    <span>Filtrar por rol</span>
    <select name="Filtrar">
      <option>Rol1</option>
      <option>Rol2</option>
      <option>Rol3</option>
    </select>
  </form>

</br></br></br></br>
  <!-- Tabla de Usuarios -->

  <table>
    <tr>
      <td><strong>Nombre</strong></td>
      <td><strong>Rol</strong></td>
      <td><button>Crear</button></td>
    </tr>
    <!-- Mira mamá, estoy metiendo relleno -->
    <tr>
      <td>Username1</td>
      <td>rol1</td>
      <td><button>Editar</button><button>X</button> </td>
    </tr>
    <tr>
      <td>Username2</td>
      <td>rol2</td>
      <td><button>Editar</button><button>X</button> </td>
    </tr>
    <tr>
      <td>Username3</td>
      <td>rol3</td>
      <td><button>Editar</button><button>X</button> </td>
    </tr>

  </table>








</div>

</br></br></br></br>

<?php include("views/footer.php");
  renderFooter("Admin"); //esto tiene que ser cambiado por un get de username en php
?>
