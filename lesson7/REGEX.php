<html>

<head>
<title>REGULAR EXPRESSIONS</title>
</head>

<body>

	<?php
		
		/////////////////////
		//PICKING FROM THIS ARRAY
		///////////////////
		$randArray = array("Thapelo","123 kanana st","NW", "12345","063-123-0000","31/12/1900","tjspl@gmail.com","$1,234","123-0000-5555","p* 1 ","<p>RANDOM TEXT</p>","mailman","jennefer","jenny","jen","dombolo","door","doctor","doug","dog");
		echo "<h1>these are our items in list form:</h1><br>";
		foreach($randArray as $values){
			echo $values, "<br>";
		}
		
		
		
		//////////////////////////////////
		//DIRECT FILTER THROUGH ARRAY
		///////////////////////////////////
		$matchName = preg_grep("%Thapelo%", $randArray);  //CASE SENSITIVE "preg_grep" function match everything between "%" pair
		
		echo "<h2>this is the NAME matched:</h2><br>";
		
		foreach ($matchName as $resultName){
			echo $resultName, "<br><br>"; 
		}
		// \d =digit. \w =word(character a-z, 0-9) \s =white space \b =word boundry. \   \   \   \   \
		///////
		//END
		//////
		
		
		
		///////////////////////////
		//FINDING NUMBERS
		////////////////////////
		$matchNumber = preg_grep("%\d{1,5}%", $randArray);  //\d{min,max(optional)}
		
		echo "<h2>ALL NUMBERS IN LIST:</h2><br>";
		
		foreach ($matchNumber as $resultNumber){
			echo $resultNumber, "<br><br>"; 
		}
		///////
		//END
		//////
		
		
		
		
		//////////////////////////////
		//MATCH MULTIPLE DIFFERNET KINDS. CHARS, SPECIAL, SPACE, DIGITS
		//////////////////////////////
		$matchRandom = preg_grep("%\w*\b\d\s%", $randArray);  //matching the different things we're looking for. ^start here. &end here
		
		echo "<h2>this is the name matched:</h2><br>";
		
		foreach ($matchRandom as $resultRandom){
			echo $resultRandom, "<br><br>"; 
		}
		///////
		//END
		///////
		
		
		
		/////////////////////////////////
		//FIND TEXT BETWEEN HTML TAGS
		///////////////////////////////
		$matchTags = preg_grep("%^<.*>(.*)<.*>$%", $randArray);  //CASE SENSITIVE "preg_grep" function.
		
		echo "<h2>THIS TEXT IS IN BETWEEN HTML TAGS:</h2><br>";
		
		foreach ($matchTags as $resultTag){
			echo $resultTag, "<br><br>"; 
		}
		///////
		//END
		///////
		
		
		
		///////////////////////////////////////
		//MATCH DIFFERENT FORMS OF A NAME(NICKNAMES)
		/////////////////////////////////////
		$matchJen = preg_grep("%je[n|nnifer|nny]%", $randArray);  //the [] brackets match to the other versions using a pipe(OR) "|"
		
		echo "<h2>THESE NAMES MATCH JENNIFER</h2><br>";
		
		foreach ($matchJen as $resultJen){
			echo $resultJen, "<br><br>"; 
		}
		//////
		//END
		//////
		
		
		//////////////////////////////////
		//EXCLUDE CERTAIN RESULTS
		////////////////////////////////////
		$matchExcept = preg_grep("%^do[^g|ug]%", $randArray);  //[^(thing to be excluded)|(other thing excluded)]
		
		echo "<h2>ALL WORDS THAT START WITH \"DO\" EXCEPT DOG AND DOUG:</h2><br>";
		
		foreach ($matchExcept as $resultExcept){
			echo $resultExcept, "<br><br>"; 
		}
		//////////
		//END
		//////////
		
		
		
		
		////////////////////////////////////////////
		//MORE SPECIFIC SEARCHES WITH LIMITS
		//////////////////////////////////////
		$matchAdrs = preg_grep("%^\d{1,5}\s[A-Za-z]+\s[A-Za-z]{2,7}$%", $randArray);  //THE + is a MUST ALSO HAVE indicator.
		
		echo "<h2>THIS MATCHES UP TO 5 NUMBERS, SPACE, CAPPED & UNCAPPED LETTERS, SPACE AND SOME MORE LETTERS WITH LIMIT: 7CHARS</h2><br>";
		
		foreach ($matchAdrs as $resultAdrs){
			echo $resultAdrs, "<br><br>"; 
		}
		//////
		//END
		//////
		
		
		
		//////////////////////////////
		//SPECIAL CHARACTERS AND OPTIONALS
		////////////////////////////
		$matchName = preg_grep('%\$\d{1,3}[,]?\d{1,3}%', $randArray);  //use backslash to escape special chars. the "['(option)']?" is for things that may or may not be present
		
		echo "<h2>THIS AMOUNT WAS FOUND:</h2><br>";
		
		foreach ($matchName as $resultName){
			echo $resultName, "<br><br>"; 
		}
		// THESE NEED TO BE ESCAPED TOO:\# \. \^ \* \+ \{} \[] \\ \| \() 
		///////
		//END
		//////
		
	?>

</body>

</html>