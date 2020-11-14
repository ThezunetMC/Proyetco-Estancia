<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-6">
	<title>Controlador</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilostablas.css">
	<?php  
	require 'funcionesBD.php';

	if(isset($_POST['btnRegistro'])){

		$nom=$_POST['txtnomb'];
		$contra=$_POST['txtcontra'];

		$status = insertarLogin($nom, $contra);

		if($status === 1){
			echo '<script> alert("Usuario agregado con exito"); </script>';
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= registro.html'>";
		} else {
			echo '<script> alert("Error: No insertado"); </script>';
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= registro.html'>";
		}
	}

	if(isset($_POST['btnReg'])){

		$nom=$_POST['txtnombre'];
		$num=$_POST['txtnumber'];

		$status = insertarEmergencia($nom, $num);

		if($status === 1){
			echo '<script> alert("Agregado con exito"); </script>';
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= emergencias.html'>";
		} else {
			echo '<script> alert("Error: No insertado"); </script>';
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= emergencias.html'>";
		}
	}

	if (isset($_POST['btnLogin'])) {  

	  $Usuario = $_POST['txtUsuario']; 
	  $Contra = $_POST['txtContra'];  

	  $status = Login($Usuario, $Contra);

	  	if($status === 1){         
	  		echo '<script> alert("Bienvenido Usuario");</script>';  
	        echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= menu.html'>";  
	    } else {         
	        echo '<script> alert("Error: Revisa clave y contraseña"); </script>';         
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= login.html'>";     
		} 
	}
			

			if(isset($_POST['btnCar'])){

				$placa=$_POST['txtplaca'];
				$modelo=$_POST['txtmodelo'];
		
				$status = insertarCoche($placa, $modelo);
		
				if($status === 1){
					echo '<script> alert("Coche agregado con exito"); </script>';
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= automovil.html'>";
				} else {
					echo '<script> alert("Error: No insertado"); </script>';
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL= automovil.html'>";
				}
			}

			if(isset($_POST['btnirimpacto'])){

				$rsCT=consultarImpacto();
				echo"<form action='menu.html'>";
				echo"<h1>Hits</h1>";
				echo"<center>";
				echo"<input type='submit' value='Menu'> </input>";
				echo"</center>";
				echo"</form>";
				echo "<div class='main-container'>
				<table>
					<tr>
					<th>ID:</th>
					<th>UBICATION:</th>
					<th>DATE:</th>
					<th>TIME:</th>
					<th>HIT INTENSITY:</th>
					<th>DELETE:</th>
					</tr>";
		
			while ($arrFilas=mysqli_fetch_array($rsCT)){
				echo 
				"<tr>
				<td>".$arrFilas['Id']  .  "</td>
				<td>".$arrFilas['Ubicacion']   .   "</td>
				<td>".$arrFilas['Fecha']  .  "</td>
				<td>".$arrFilas['Hora']   .   "</td>
				<td>".$arrFilas['Intensidad_Impacto']   .   "</td>

				<td> <a href='eliminarImpactos.php?id=" .$arrFilas['Id'] . "'> <img src='img/borrar.png'></a></td>

				</tr>";
				}
				echo "</table>
				</div>";
			}

			if(isset($_POST['btnEliminar'])){
				$id = $_POST['txtId'];
				
				$statusB = elimimpac($id);
				
				if($statusB === 1){
					echo '<script> alert("Deleted") </script>';
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0 ; URL=menu.html'>";
					
				}else{
					echo '<script> alert("Hit not removed") </script>';
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0 ; URL=menu.html'>";
								
				}
		   }

			
	?>
</body>
</html>
