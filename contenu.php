<?php

	define('FILE','todo.json');

	$afaire;
	$archive;

	$arr_data = getDataFromJson();

	prepareDataToDisplay();

	function getDataFromJson() {
		//Get data from existing json file
		$jsondata = file_get_contents(FILE);

		// converts json data into array
		return json_decode($jsondata, true);

	}

	function prepareDataToDisplay() {
		global $afaire;
		global $archive;
		global $arr_data;

		$afaire = [];
		$archive = [];

		foreach ($arr_data as $key => $value) {
			if($value['active']) {
				$afaire[$key] = $value;
			} else {
				$archive[$key] = $value;
			}
		}
	}



