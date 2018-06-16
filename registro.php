<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$nombreEmpresa=$_POST['nombreEmpresa'];
		$areaEmpresa=$_POST['areaEmpresa'];
		$tamanoEmpresa=$_POST['tamanoEmpresa'];
		$resultado=$_POST['resultado'];

		
			$sql="INSERT into resultados (nombre,correo,nombreEmpresa,areaEmpresa,tamanoEmpresa,resultadoFramework)
				values ('$nombre','$correo','$nombreEmpresa','$areaEmpresa','$tamanoEmpresa','$resultado')";
			echo $result=mysqli_query($conexion,$sql);
		

 ?>