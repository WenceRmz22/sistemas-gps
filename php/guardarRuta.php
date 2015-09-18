<?php 

	include_once("../db.php");
	if (isset($_POST["Descripcion"])) {
		$data = json_decode($_POST["data"],true);
		$Descripcion = $_POST["Descripcion"];
		$longitud = $_POST["longitud"];
		$latitud = $_POST["latitud"];
		$NombreChofer = mysql_real_escape_string($data[0]["NombreChofer"]);
		$IdCamion  = mysql_real_escape_string($data[0]["IdCamion"]);
		$PuntoIniLat = mysql_real_escape_string($data[0]["PuntoIniLat"]);
		$PuntoIniLon = mysql_real_escape_string($data[0]["PuntoIniLon"]);
		$PuntoFinLat = mysql_real_escape_string($data[0]["PuntoFinLat"]);
		$PuntoFinLon  = mysql_real_escape_string($data[0]["PuntoFinLon"]);
		$Origen  = mysql_real_escape_string($data[0]["Origen"]);
		$Destino = mysql_real_escape_string($data[0]["Destino"]);
		$fecha = mysql_real_escape_string($data[0]["Fecha"]);
		if (mysql_query("Insert into f403_ruta SET IdCamion='".$IdCamion."',PuntoIniLat=".$PuntoIniLat.",PuntoIniLon=".$PuntoIniLon.",PuntoFinLat=".$PuntoFinLat
			.",PuntoFinLon=".$PuntoFinLon.",activo=1,fecha='".$fecha."',NombreChofer ='".$NombreChofer."',Origen='".$Origen."',Destino='".$Destino."'") ){
			$id =mysql_insert_id()	;

			
			for ($i=0; $i < count($longitud); $i++) { 
				if(mysql_query("INSERT into  f403_interes Set IdRuta=".$id.",Descripcion='".$Descripcion[$i]."',
					Latitud=".$latitud[$i].",Longitud=".$longitud[$i])){
					
				}
			}
			echo "Exito, Ruta Almacenada";
			
		} else {
			
			echo "Error, intenta nuevamente.";
		}


	}else{
			$data = json_decode($_POST["data"],true);
			$NombreChofer = mysql_real_escape_string($data[0]["NombreChofer"]);
			$IdCamion  = mysql_real_escape_string($data[0]["IdCamion"]);
			$PuntoIniLat = mysql_real_escape_string($data[0]["PuntoIniLat"]);
			$PuntoIniLon = mysql_real_escape_string($data[0]["PuntoIniLon"]);
			$PuntoFinLat = mysql_real_escape_string($data[0]["PuntoFinLat"]);
			$PuntoFinLon  = mysql_real_escape_string($data[0]["PuntoFinLon"]);
			$Origen  = mysql_real_escape_string($data[0]["Origen"]);
			$Destino = mysql_real_escape_string($data[0]["Destino"]);			
			$fecha = mysql_real_escape_string($data[0]["Fecha"]);

			if ( mysql_query("Insert into f403_ruta SET IdCamion='".$IdCamion."',PuntoIniLat=".$PuntoIniLat.",PuntoIniLon=".$PuntoIniLon.",PuntoFinLat=".$PuntoFinLat
				.",PuntoFinLon=".$PuntoFinLon.",NombreChofer='".$NombreChofer."', activo=1,fecha='".$fecha."',Origen='".$Origen."',Destino='".$Destino."'") ){
				echo "Exito, Ruta Almacenada";	
			} else {
				$errorMsg = '<div class="alert alert-danger">
					<i class="fa fa-times"></i> 
				</div>';
				echo "Error, intenta nuevamente.";
			}
	}
	
	


 ?>