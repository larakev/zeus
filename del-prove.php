<?php 
	require('db.php');
	$id = $_GET['id'];
	$query = "DELETE FROM proveedores WHERE idproveedores ='$id'";
	$resultado= mysql_query($query);
?>
<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado > 0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			<?php
				header ("Location: list-proveedores.php");
			?>
		</center>
	</body>
</html>