<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "zeus";
			$con = @mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM clientes ";
			
			$resultado = mysql_query($query);
			
			$item = 0;
			while ($fila = mysql_fetch_array($resultado)) {
				$item = $item+1;
				echo " <tr>";
				echo 	"<td>$item</td>
						<td>$fila[nombre]</td> 
						<td>$fila[apellido]</td>
						<td>$fila[dui]</td> 
						<td>$fila[direccion]</td>
						<td>$fila[telefono]</td>";
				echo 	'<td>
						<a href="mod-clien.php?id=' . $fila['idcliente'].'"><i class="icon-pencil"></i></a>
						<a href="del-clien.php?id=' . $fila['idcliente'].'"><i class="icon-cross"></i></a>
						</td> </tr> ';
			}

		}
	}
?>