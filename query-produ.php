<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "zeus";
			$con = @mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM productos ";
			$resultado = mysql_query($query);
			$item = 0;
			while ($fila = mysql_fetch_array($resultado)) {
				$item = $item+1;
				echo " <tr>";
				echo 	"<td>$item</td>
						<td>$fila[tipo]</td> 
						<td>$fila[marca]</td>
						<td>$fila[modelo]</td>
						<td>$fila[existencias]</td>
						<td>$fila[nserial]</td>
						<td>$fila[precio]</td> 
						<td>$fila[descripcion]</td>";
				echo 	'<td>
						<a href="mod-produ.php?id=' . $fila['idproducto'].'"><i class="icon-pencil"></i></a>
						<a href="del-produ.php?id=' . $fila['idproducto'].'"><i class="icon-cross"></i></a>
						</td> </tr>';
			}

		}
	}
?>