<!DOCTYPE html>

<html>

<body>

	<?php 
	
		$countryStr = "cuba, india, france, italy";
		$randCountry = explode(", ", $countryStr); //explode("what separated the items", theArrayName);
		echo $randCountry[0], " ", $randCountry[1], "<br><br>";
		
		$countryStr2 = implode(",", $randCountry);
		echo $countryStr2, "<br><br>";
		
		//find out if something exists in a given array
		if(in_array("india", $randCountry)) {
			echo "india is in the list";
		}
		echo "<br><br>";
		
		print_r(array_reverse($randCountry, true));
		echo "<br><br>";
		
		//sorting an array
		//asort(dont change index key)
		//rsort(reverse order sort. no index change)
		//arsort (maintains key value pairs)
		//ksort(key sorting)
		//krsort(reverse key sort)
		sort($randCountry, SORT_STRING);
		print_r($randCountry);
		echo "<br><br>";
		
		//populate array with numbers. range(min,max)
		$countArray = range(0,50);
		foreach($countArray as $printNum){ //foreach(array(is limit) AS temp variable)
			echo $printNum, ", "; //print out current stored value
		}
		echo "<br><br>";
		
		echo "there are ", count($countArray), " numbers stored"; //counts totalitems in array
		echo"<br><br>";
		
		
		//FILE MANIPULATION
		$customers = file("FILE.txt"); //takes all info from file and stores them as an array. yay! lol
		foreach($customers as $customer) {
			list($name, $street, $city, $state) = explode(",", $customer); //we add keys to the values using LIST then break them down into individuals using EXPLODE
			$state = trim($state); //trim array at this part
			
			echo "$name $street $city $state";
			echo "<br><br>";
		}
	?>

</body>

</html>