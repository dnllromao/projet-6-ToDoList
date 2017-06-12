<?php
	define('FILE','todo.json');
	$afaire = [];
	$archive = [];
	
	//Get data from existing json file
	$jsondata = file_get_contents(FILE);
	//var_dump($jsondata);

	// converts json data into array
	$arr_data = json_decode($jsondata, true);
	//var_dump($arr_data);

	foreach ($arr_data as $key => $value) {
		if($value['active']) {
			$afaire[$key] = $value;
			//array_push($afaire, $value);
		} else {
			$archive[$key] = $value;
			//array_push($archive, $value);
		}
	}



