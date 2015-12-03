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
          <h3>Actualizar Proveedor</h3>
          <form action="" method="POST" name="Form" class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input name="empresa" type="text" class="validate">
                <label>Empresa</label>
              </div>
              <div class="input-field col s6">
                <input name="direccion" type="text" class="validate">
                <label>Dirección</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="telefono" type="tel" class="validate">
                <label>Teléfono</label>
              </div>
              <div class="input-field col s6">
                <input name="email" type="email" class="validate">
                <label>Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input name="vendedor" type="text" class="validate">
                <label>Vendedor</label>
              </div>
              <div class="input-field col s6">
                <input name="celular" type="text" class="validate">
                <label>Celular del Vendedor</label>
              </div>
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
    $celular=$_POST['celular'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $empresa=$_POST['empresa'];
    $telefono=$_POST['telefono'];
    $vendedor=$_POST['vendedor'];}

    if(isset($_POST['submit'])){
      if (isset($celular) && !empty($celular) &&
          isset($direccion) && !empty($direccion) &&
          isset($email) && !empty($email) &&
          isset($empresa) && !empty($empresa) &&
          isset($telefono) && !empty($telefono) &&
          isset($vendedor) && !empty($vendedor)){
        
          $conn = @mysql_connect('localhost','root','') or die ('Error');
          mysql_select_db("zeus", $conn) or die('errro BD');

          $sql=("UPDATE proveedores SET celular='$celular', direccion='$direccion', email='$email', empresa='$empresa', telefono='$telefono', vendedor='$vendedor' WHERE idproveedores='$id'");
          $res=mysql_query($sql,$conn);
          
      } else{echo"error";}
    }
  ?>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>