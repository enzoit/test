<?


$server = "localhost";					// host del MySQL
$database = "test";		// Selecciona la base de datos
$dbuser = "root";			// aqui debes ingresar el nombre de usuario para acceder a la base de datos
$dbpass = "administrador";	// password de acceso para el usuario de la base de datos
$conexion = mysql_connect($server, $dbuser, $dbpass) or die("Error 1: ".mysql_error()); // die Imprime un mensaje y termina el script actual
mysql_select_db($database, $conexion);


?>