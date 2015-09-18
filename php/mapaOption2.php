<?php
	include_once("../db.php");
	$id  = $_POST["id"];
	$query = "SELECT latini,lonini,latfin,lonfin from rutasguardadas where IdRutaG=".$id;
	$resul = mysql_fetch_assoc(mysql_query($query));
 	echo json_encode($resul);
 ?>