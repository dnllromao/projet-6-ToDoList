<?php

	if(!isset($_POST['action'])) {
		return;
	}

	switch ($_POST['action']) {
		case 'ajouter':
			//echo 'Ajouter';

			if(empty($_POST['item'])) {
				return;
			}

			$item = sanitization($_POST['item']);
			$item = [ 'name' => $item, 'active' => true];

			if(in_array($item, $arr_data)) {
				echo 'Item already exists';
				return;
			}

			// Push user data to array
			array_push($arr_data,$item);
			//var_dump($arr_data);

			//Convert updated array to JSON
			$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT); //Returns the JSON representation of a value
			//var_dump($jsondata);

			//write json data into data.json file
		   	if(file_put_contents(FILE, $jsondata)) {
		    	//echo 'Data successfully saved';
		    } else {
		    	//echo "error";
		    }

		    $afaire = [];
		    $archive = [];

		    foreach ($arr_data as $key => $value) {
		    	if($value['active']) {
		    		$afaire[$key] = $value;
		    		//array_push($afaire, $value);
		    	} else {
		    		$archive[$key] = $value;
		    		//array_push($archive, $value);
		    	}
		    }

			break;
		
		case 'enregistrer':
			//echo 'enregistrer';

			foreach ($_POST as $key => $value) {
				if($key == 'action')
					continue;

				$arr_data[$key]['active'] = false;
			}

			//Convert updated array to JSON
			$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT); //Returns the JSON representation of a value
			//var_dump($jsondata);

			//write json data into data.json file
		   	if(file_put_contents(FILE, $jsondata)) {
		    	//echo 'Data successfully saved';
		    } else {
		    	//echo "error";
		    }

		    $afaire = [];
		    $archive = [];

		    foreach ($arr_data as $key => $value) {
		    	if($value['active']) {
		    		$afaire[$key] = $value;
		    		//array_push($afaire, $value);
		    	} else {
		    		$archive[$key] = $value;
		    		//array_push($archive, $value);
		    	}
		    }

			break;
	}



	

	function sanitization ($data) {

		$data = trim($data);
	    $data = strip_tags($data);  
		$data = stripslashes($data); 
		$data = htmlspecialchars($data); 

		return (!empty($data))?$data:'';
	}