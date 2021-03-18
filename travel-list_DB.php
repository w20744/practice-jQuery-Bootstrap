<?php
	$myData = file_get_contents("https://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json");
	echo json_encode($myData) ;
?>