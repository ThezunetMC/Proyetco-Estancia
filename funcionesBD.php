<?php 

function conectarBD(){
	
	$servidor="localhost";
	$baseDatos="dbintegrador";
	$usuario="root";
	$contraseña="";

	$conexion=mysqli_connect($servidor, $usuario, $contraseña, $baseDatos)
	or die ("Error al intentar conectar");

	return $conexion;
}

function insertarLogin ($nom, $con){

	$insert="insert into login(Nom_usuario, Nom_contra) values (?,?)";

	$conex=conectarBD();

	try{

		$stm=$conex->prepare($insert);
		$stm->bind_param('ss', $nom, $con);
		$stm->execute();
		$stm->close();
		mysqli_close($conex);

		return 1;
	} catch (Exception $e){
		echo 'Exception capturada: ', $e->getMessage(), "\n";
	}
}

function insertarEmergencia ($nom, $num){

	$insert="insert into emergencias(servicio, numero) values (?,?)";

	$conex=conectarBD();

	try{

		$stm=$conex->prepare($insert);
		$stm->bind_param('ss', $nom, $num);
		$stm->execute();
		$stm->close();
		mysqli_close($conex);

		return 1;
	} catch (Exception $e){
		echo 'Exception capturada: ', $e->getMessage(), "\n";
	}
}

function Login($Usuario, $Contra){
    $conex=ConectarBD();

    $contod="select Nom_usuario,Nom_contra from login where (Nom_usuario = '$Usuario') and (Nom_contra = '$Contra')";

    $rscontod=mysqli_query($conex,$contod);
    while ($resul = mysqli_fetch_array($rscontod)) {
        $Correo = $resul[0];
        $password = $resul[1];
    }
    if($Usuario == $Correo and $Contra == $password){
        return 1;
    }
}


function insertarCoche ($placa, $modelo){

	$car="insert into automovil(Num_placa, Modelo) values (?,?)";

	$conex=conectarBD();

	try{

		$stm=$conex->prepare($car);
		$stm->bind_param('ss', $placa, $modelo);
		$stm->execute();
		$stm->close();
		mysqli_close($conex);

		return 1;
	} catch (Exception $e){
		echo 'Exception capturada: ', $e->getMessage(), "\n";
	}
}

function consultarImpacto(){

	$conex=conectarBD();
	$contod="select * from impacto";

	$rscontod=mysqli_query($conex,$contod);
	mysqli_close($conex);

	return $rscontod;
}

function consultarId($id){

	$conex=conectarBD();
	$consxid="select * from impacto where Id='$id' ";

	$rsxid=mysqli_query($conex,$consxid);
	mysqli_close($conex);

	return $rsxid;
}

function elimimpac($id){
	
	$conex = conectarBD();
	$eliminar = "Delete from impacto where Id = ?";
	
	try{
		
		$stmd = $conex->prepare($eliminar);
			$stmd->bind_param('s',$id);
			$stmd->execute();
			$stmd->close();
			mysqli_close($conex);
			return 1;
			
	}catch (Exception $e){
	
	echo 'Excepcion capturada: ', $e->getMessage();
	}
}

 ?>