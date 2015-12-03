<?php
	session_start();
?>
<?php

 $conn = @mysql_connect('localhost', 'root', '');
	 if (!$conn){
	 	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("zeus", $conn);

// sent from form
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql= "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password='$password'";

$result=mysql_query($sql);


$count = mysql_num_rows($result);


if($count == 1){

 $_SESSION['loggedin'] = true;
 $_SESSION['usuario'] = $usuario;
 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

 echo '<script> window.location="list-clientes.php";</script>';
}
 else {
 echo "<br/>Usuario o Password estan incorrectos.<br>";

 echo "<a href='index.html'>Volver a Intentarlo</a>";
}

?>


