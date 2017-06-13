<?php

   	if(file_put_contents('todo.json', $_POST['json'] )) {
    	echo 'Data successfully saved';
    } else {
    	echo "error";
    }


