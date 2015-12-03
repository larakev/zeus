<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "zeus";
			$con = @mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM proveedores ";
			$resultado = mysql_query($query);
			$item = 0;
			while ($fila = mysql_fetch_array($resultado)) {
				$item = $item+1;
				echo " <tr>";
				echo 	"<td>$item</td>
						<td>$fila[empresa]</td> 
						<td>$fila[vendedor]</td>
						<td>$fila[celular]</td>
						<td>$fila[telefono]</td>
						<td>$fila[email]</td> 
						<td>$fila[direccion]</td>";
				echo 	'<td>
						<a href="mod-prove.php?id=' . $fila['idproveedores'].'"><i class="icon-pencil"></i></a>
						<a href="del-prove.php?id=' . $fila['idproveedores'].'"><i class="icon-cross"></i></a>
						</td> </tr>';
			}

		}
	}
?>