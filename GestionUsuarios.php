<?php include("views/header.php");
  RenderBanner("Gestión de Usuarios");
?>

</br></br></br></br>

<?php include("views/lateral.php");
  renderLateral(0);
?>

</br></br></br></br>
<div>
  <form action="BuscarUsuario.php" method="post">

    <span>Búsqueda Usuarios</span>
    <input type="text" name="Buscar">
    <input type="submit">

    <span>Filtrar por rol</span>
    <select name="Filtrar">
      <option>Rol1</option>
      <option>Rol2</option>
      <option>Rol3</option>
    </select>
  </form>
</div>

</br></br></br></br>

<?php include("views/footer.php");
  renderFooter("Admin"); //esto tiene que ser cambiado por un get de username en php
?>
