<?php 

	include_once("../db.php");
	$data = $_POST["datos"];
	$DescripcionRuta = $data["DescripcionRuta"];
	$latfin = $data["latfin"];
	$lonfin = $data["lonfin"];
	$latini = $data["latini"];
	$lonini = $data["lonini"];
	$duration = $data["duration"];
	$distancia =$data["distancia"];
	//$con="INSERT INTO rutasguardadas SET  DescripcionRuta='".$DescripcionRuta."',latini=".$latini.",lonini=".$lonini.",latfin=".$latfin.",lonfin=".$lonfin.",duration='".$duration."',distancia='".$distancia."'";
	if (mysql_query("INSERT INTO rutasguardadas SET  DescripcionRuta='".$DescripcionRuta."',latini=".$latini.",lonini=".$lonini.",latfin=".$latfin.",lonfin=".$lonfin.",duracion='".$duration."',distancia='".$distancia."'")) {
		echo "Exito!";
	}else{
		echo "Error";
	}
	?>