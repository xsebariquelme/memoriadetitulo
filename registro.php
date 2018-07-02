<?php 
	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$nombreEmpresa=$_POST['nombreEmpresa'];

		$areaEmpresa=$_POST['areaEmpresa'];
		$tamanoEmpresa=$_POST['tamanoEmpresa'];
		
		$stackoverflow=$_POST['stackoverflow'];
		$tiempo=$_POST['tiempo'];
		$documentacion=$_POST['documentacion'];

		$resultado=$_POST['resultado'];

		
			$sql="INSERT into resultados (nombre,correo,nombreEmpresa,areaEmpresa,tamanoEmpresa,stackoverflow,tiempo,documentacion,resultadoFramework)
				values ('$nombre','$correo','$nombreEmpresa','$areaEmpresa','$tamanoEmpresa','$stackoverflow','$tiempo','$documentacion','$resultado')";
			echo $result=mysqli_query($conexion,$sql);

 ?>