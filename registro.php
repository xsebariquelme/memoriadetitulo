<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$nombreEmpresa=$_POST['nombreEmpresa'];
		$areaEmpresa=$_POST['areaEmpresa'];
		$tamanoEmpresa=$_POST['tamanoEmpresa'];

		
			$sql="INSERT into resultados (nombre,correo,nombreEmpresa,areaEmpresa,tamanoEmpresa)
				values ('$nombre','$correo','$nombreEmpresa','$areaEmpresa','$tamanoEmpresa')";
			echo $result=mysqli_query($conexion,$sql);
		

 ?>