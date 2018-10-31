<?php
	include 'cn.php';
	//Recibir los datos y almacenarlos en variables
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$apellido2 = $_POST["apellido2"];
	$fecha = $_POST["fecha"];
	$correo = $_POST["correo"];
	$contraseña = $_POST["contraseña"];
	$contraseña0 = $_POST["contraseña0"];
	//Consulta para insertar
	$insertar = "INSERT INTO usuarios(nombre, apellido, apellido2, correo, fecha, correo, contraseña , contraseña0) VALUES ('$nombre', '$apellido', 'apellido2', 'fecha', 'correo', 'contraseña', 'contraseña0')";
	//Ejecutar consulta
	$resultado = mysql_query($conexion , $insertar);
	if(!$resultado{
		echo 'Error al registrarse';
	}
	else{
		echo 'Usuario registrado exitosamente';
	}
	//Cerra conexión
	mysqli_close($conexion);
?>