<?php 
	include_once("../db.php");
	$dato = $_POST["dato"];
	$consulta = "SELECT  IdRuta as id FROM f403_ruta where IdCamion = '".$dato."' and activo =1 order by IdCamion asc";
	$resultado =mysql_fetch_assoc(mysql_query($consulta));

	$id = (int)$resultado["id"];
	$query ="SELECT IdCamion,NombreChofer,PuntoIniLat,PuntoIniLon,PuntoFinLat,PuntoFinLon,PuntoGpsLat,PuntoGpsLon,Origen,Destino,fecha  
	from f403_ruta  where IdCamion = '".$dato."' AND IdRuta =".$id." and activo = 1";
	$queryResult= mysql_fetch_assoc(mysql_query($query));

	$queryInt = "SELECT Descripcion, Latitud, Longitud from  f403_interes where IdRuta =".$id;
	$queryIntResult  = mysql_query($queryInt);
	$total = mysql_num_rows($queryIntResult);
	if ($total != 0) {
		while ($registro = mysql_fetch_assoc($queryIntResult)) {
		$test[] = [$registro["Descripcion"],$registro["Latitud"],$registro["Longitud"]];
		}

		$return[]=[$queryResult,$test];
	}else{
		$return[]=[$queryResult];
	}
	
	
	//$test[] = ["ruta"=>$queryResult,"interes"=>$queryIntResult];
	echo json_encode($return);
	
 ?>