<?php
	$dato = "Camion 1" ;
	$consulta = "SELECT IdCamion,PuntoIniLat, PuntoIniLon,PuntoFinLat, PuntoFinLon FROM f403_ruta inner join f403_interes on f403_ruta.IdRuta= f403_interes.IdRuta  where IdCamion = 'Camion 1' and activo=1";
	$resultado =mysql_query($consulta);
	$test[] = $resultado["IdCamion"];
	echo json_encode($test);
 ?>