<?php
	$mysqli = new mysqli("localhost", "admin", "qwerty54321", "admin");
	if ($mysqli -> connect_errno > 0) {
		echo "Failed to connect to MySQL: ", $mysqli -> connect_error;
		exit();
	}
	else {
		echo "Connected";
	}

	$result = $mysqli->query("SELECT * FROM `1tab`");
	if ($result->num_rows > 0) {

		$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
		$cntr = $xml->item->count();
		if ($cntr > $result->num_rows){
			$del = $result->num_rows;
			foreach ($xml->item as $item) {
				while ($del != $cntr){
					unset($xml->item[$del]);
				    $del++;
				}
			}
		}
		$xml->saveXML('data.xml');

		$i = 1;
		while ($row = mysqli_fetch_assoc($result)) {
			$name = $row['name'];
			$price = $row['price'];
			$id = $row['id'];
			$img = $row['img'];

			foreach ($xml->item as $item) {
		        if ($item['id'] == $i) {
		           	$item->img = $img;
	                $item->name = $name;
	                $item->price = $price;
	                $node = $item;
	                $i++;
	                break;
            	}
        	}

        	if ($xml->item->count() < $result->num_rows){
	        	$task = $xml->addChild('item', '');
				$task->addChild('img', $img);
				$task->addChild('name', $name);
				$task->addChild('price', $price);
				$task->addAttribute('id', $xml->count());
			}
		}
		$xml->saveXML('data.xml');
	}

?>