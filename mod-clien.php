<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Mueblería Zeus</title>
</head>
<body>
 <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Mueblería Zeus</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="salir.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <aside class="col s3 barra">
      <div class="usuario">
        <div class="circulo">
          <img src="img/kevin.jpg" class="perfil">
        </div>
        <div class="nombre">
          <h4>Kevin Lara <br><small>Administrador</small></h4>
        </div>
      </div>   
        <div class="collection">
            <a href="list-clientes.php" class="collection-item">Clientes</a>
            <a href="list-proveedores.php" class="collection-item">Proveedores</a>
            <a href="list-productos.php" class="collection-item">Productos</a>
        </div> 
    </aside>
    <section class="col s9 contenido">
      <div class="home">
        <div class="row">
          <h3>Actualizar Cliente</h3>
          <form action="" method="POST" name="Form" class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input name="nombre" type="text" class="validate">
                <label for="first_name">Nombre</label>
              </div>
              <div class="input-field col s6">
                <input name="apellido" type="text" class="validate">
                <label for="last_name">Apellido</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="dui" type="text" class="validate">
                <label for="text">DUI</label>
              </div>
               <div class="input-field col s6">
                <input name="telefono" type="text" class="validate">
                <label for="last_name">Teléfono</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="direccion" type="text" class="validate">
                <label for="address">Dirección</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="submit">Actualizar

              <i class="material-icons right">done</i>
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
  <?php
  include 'db.php';
  $id=$_GET['id'];
    
    if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dui=$_POST['dui'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];}

    if(isset($_POST['submit'])){
      if (isset($nombre) && !empty($nombre) &&
          isset($apellido) && !empty($apellido) &&
          isset($dui) && !empty($dui) &&
          isset($telefono) && !empty($telefono) &&
          isset($direccion) && !empty($direccion)){
        
          $conn = @mysql_connect('localhost','root','') or die ('Error');
          mysql_select_db("zeus", $conn) or die('errro BD');

          $sql=("UPDATE clientes SET nombre='$nombre', apellido='$apellido', dui='$dui', telefono='$telefono', direccion='$direccion' WHERE idcliente='$id'");
          $res=mysql_query($sql,$conn);
          echo "Transaccion exitosa";
          
      } else{echo"error";}
    }
  ?>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.js"></script>
</body>
</html>