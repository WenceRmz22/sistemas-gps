<?php 
	include_once("../db.php");
	$term = $_REQUEST['term'] ;
	$consulta = "SELECT DISTINCT IdCamion as valor FROM f403_ruta where IdCamion like '%".$term."%' and activo =1 order by IdCamion asc";
	$resul  = mysql_query($consulta); 
	while ($resultado =mysql_fetch_assoc($resul)) {
		$test[] = $resultado["valor"];
		# code...
	}
	
	echo json_encode($test);
 ?>