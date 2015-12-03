<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
      <div class="home-tb-clien lista">
        <div class="titulo-tabla">
          <div class="titulo">
            <h3>Lista de Proveedores</h3>
          </div>
          <div class="opciones">
              <i class="icon-user-plus" onclick="location.href='add-proveedores.php'" title="Añadir cliente"></i>
              
              <a href="proveedores-pdf.php" target="_blank"><i class="icon-file-pdf" title="Descargar PDF"></i></a>
          </div>
            
        </div>
         <table class="bordered">
          <thead>
            <tr>
                <th data-field="id">N°</th>
                <th data-field="id">Empresa</th>
                <th data-field="name">Vendedor</th>
                <th data-field="price">Celular</th>
                <th data-field="price">Teléfono</th>
                <th data-field="price">Email</th>
                <th data-field="price">Dirección</th>
                <th data-field="price">Opciones</th>
            </tr>
          </thead>
          <tbody>
              <?php
                include("query-prove.php");
                $Con = new conexion();
                $Con->recuperarDatos();
              ?>
          </tbody>
      </table>
      </div>
    </section>
  </div>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>