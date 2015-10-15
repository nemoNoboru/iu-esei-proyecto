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
  <div><strong> Usuario Detallado </strong></div>
</br></br></br></br>

  <!-- Esto pretende ser la imagen del usuario -->
  <div> Hola soy una foto </div>

</br></br></br></br>
  <!-- Datos principales -->

  <form action="" method="post">

    <span>ID de Usuario</span>
    <input type="text" value= "EjemploID" name="IDdeUsuario"></br></br>

    <span>Nombre</span>
    <input type="text" value= "EjemploNombre" name="Nombre"></br></br>

    <span>Apellidos</span>
    <input type="text" value= "Apellidos de Ejemplo" name="Apellidos"></br></br>

    <span>Email</span>
    <input type="text" value= "correo@unsitio.es" name="Email"></br></br>

  </form>

</br></br></br></br>
  <!-- Tabla de Roles -->

  <div>
    <table>
      <tr>
        <td><strong>Rol</strong></td>
        <td><strong>
          <select name="SelectRol">
            <option>Rol1</option>
            <option>Rol2</option>
            <option>Rol3</option>
          </select>
        </strong></td>
        <td><button>+</button></td>
      </tr>
      <!-- Mira mamá, estoy metiendo relleno -->
      <tr>
        <td>rol1</td>
        <td><!-- Vacio para cuadrar la tabla --></td>
        <td><button>X</button></td>
      </tr>
      <tr>
        <td>rol2</td>
        <td><!-- Vacio para cuadrar la tabla --></td>
        <td><button>X</button></td>
      </tr>
      <tr>
        <td>rol3</td>
        <td><!-- Vacio para cuadrar la tabla --></td>
        <td><button>X</button></td>
      </tr>

    </table>
  </div>
</br></br></br></br>
  <!-- Tabla de Paginas -->
  <div>
    <table>
      <tr>
        <td><strong>Pagina</strong></td>
        <td><strong>
          <select name="SelectPagina">
            <option>Pagina1</option>
            <option>Pagina2</option>
            <option>Pagina3</option>
          </select>
        </strong></td>
        <td><button>+</button></td>
      </tr>
      <!-- Mira mamá, estoy metiendo relleno -->
      <tr>
        <td>pagina1</td>
        <td><!-- Vacio para cuadrar la tabla --></td>
        <td><button>X</button></td>
      </tr>
      <tr>
        <td>pagina2</td>
        <td><!-- Vacio para cuadrar la tabla --></td>
        <td><button>X</button></td>
      </tr>
      <tr>
        <td>pagina3</td>
        <td><!-- Vacio para cuadrar la tabla --></td>
        <td><button>X</button></td>
      </tr>

    </table>
  </div>

</div>

</br></br></br></br>

<?php include("views/footer.php");
  renderFooter("Admin"); //esto tiene que ser cambiado por un get de username en php
?>
