<html>

<head>
<title>ARRAY TESTS</title>
</head>

<body>

	<?php
		//array with key and value pairs
		$myInfo = array("name" => "Thapelo", "street" => "3600 mohlakwane", "city" => "Klerksdorp");
		echo "my name is ", $myInfo['name'], "<br><br>";
		
		//merging arrays
		$moreInfo = array("province" => "north west", "age" => 28);
		$myInfo = array_merge($myInfo, $moreInfo);
		
		//dispaly key:value pairs
		foreach($myInfo as $key => $value){
			echo $key, " ", $value, "<br>";
		}
		echo "<br><br>";
		
		//search for array key
		if(array_key_exists("name", $myInfo)) echo "the name stored is ", $myInfo['name'];
		echo "<br><br>";
		
		//specific word search in array using known word $citySearch is a storage variable
		$citySearch = array_search("klerksdorp", $myInfo);
		echo "The key for the city you searched for is ", $citySearch;
		echo "<br><br>";
		
		//print all array keys
		print_r(array_keys($myInfo));
		echo "<br><br>";
		
		//print all values keys
		print_r(array_keys($myInfo));
		echo "<br><br>";
		
		$customer1 = array("name" => "Figo", "street" => "3600 mohlakwane", "city" => "Klerksdorp");
		$customer2 = array("name" => "Ray", "street" => "1234 mohlakwane", "city" => "Klerksdorp");
		$customers = array($customer1, $customer2);
		print_r(array_values($customers));
		echo "<br><br>";
		
		//FOREACH loop		
		foreach($customers as $key){
			foreach ($key as $key2 => $values){
				echo $key2, ": ", $values, "<br>";
			}
		}
		
	?>

</body>

</html>