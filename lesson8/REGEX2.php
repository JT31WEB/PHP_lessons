<html>
<head>
<title>Regex Continued</title>
</head>

<body>

	<?php
	
		////////////////////////////
		//OUR ARRAY
		///////////////////
		$randArray = array("Thapelo","123 kanana st","NW", "12345","063-123-0000","BOB1mabena","31/12/1900","tjspl@gmail.com","$1,234","123-0000-5555","p* 1 ","<p>RANDOM TEXT</p>","mailman","jennefer","jenny","jen","dombolo","door","doctor","doug","dog");
		//////////////////
		
		
		
		//////////////////////////////////
		//FIND EMAIL ADDRESS
		///////////////////////////////////
		$matchEmail = preg_grep("%[A-Za-z0-9._\%-]+@[A-Za-z0-9._-]+\.[A-Za-z]{2,6}%", $randArray);  //watch out for the - hyphen cos its also used for RANGE. 
		
		echo "<h2>this is the EMAIL matched:</h2><br>";
		
		foreach ($matchEmail as $resultEmail){
			echo $resultEmail, "<br><br>"; 
		}
		// \d =digit. \w =word(character a-z, 0-9) \s =white space \b =word boundry. \   \   \   \   \
		///////
		//END
		//////
		
		
		
		//////////////////////////////////
		//TELEPHONE NUMBERS
		///////////////////////////////////
		$matchCell = preg_grep("%\(?[0-9]{3}\)?-?[0-9]{3}[-. ]?[0-9]{4}%", $randArray);  //i dont know why i understand this but i do.
		
		echo "<h2>this is the CELLPHONE NUMBER matched:</h2><br>";
		
		foreach ($matchCell as $resultCell){
			echo $resultCell, "<br><br>"; 
		}
		// \d =digit. \w =word(character a-z, 0-9) \s =white space \b =word boundry. \   \   \   \   \
		///////
		//END
		//////
		
		
		
		//////////////////////////////////
		//FIND DATES IN VARIOUS INPUT WAYS
		///////////////////////////////////
		$matchDate = preg_grep("%(0?[1-9]|[12][0-9]|3[01])[-/.](0?[1-9]|[12][0-9]|3[01])[-/.](19|20)?[0-9]{2}%", $randArray);  //I NEED TO LOOK AT THIS ONE AGAIN
		
		echo "<h2>this is the DATE matched:</h2><br>";
		
		foreach ($matchDate as $resultDate){
			echo $resultDate, "<br><br>"; 
		}
		// \d =digit. \w =word(character a-z, 0-9) \s =white space \b =word boundry. \   \   \   \   \
		///////
		//END
		//////
		
		
		
		//////////////////////////////////
		//PASSWORD AND CONDITIONALS(1UPPER CASE,1 LOWERCASE, 1 NUMBER, NO SPACES, CAN CONTAIN DASH AND UNDERSCORE AND IS 6 CHARS MINIMUM)
		///////////////////////////////////
		$matchPass = preg_grep("%\A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{6,15}\z%", $randArray);  //\A and \z are=^ and=$. ?= checks in [characters]for (*?)[condition]. then repeat for other conditions. \S checks for no white space then we check {minLength, maxlength}.
		
		echo "<h2>this is PASSWORD matched:</h2><br>";
		
		foreach ($matchPass as $resultPass){
			echo $resultPass, "<br><br>"; 
		}
		// \d =digit. \w =word(character a-z, 0-9) \s =white space \b =word boundry. \   \   \   \   \
		///////
		//END
		//////
		
		
		
		
		
		//////////////////////////////////
		//MATCH WORDS THA START THE SAME
		///////////////////////////////////
		$matchMail = preg_grep("%^mail(?!woman)%i", $randArray);  //"?!" MEANS EXCLUDE. THE SMALL i MAKES SEARCH CASE INSENSITIVE
		//$matchMail = preg_grep("%^mail(?!man)%i", $randArray);  WILL FIND MAN
		//$matchMail = preg_grep("%^(?<=mail)woman%i", $randArray);   MATCH FOR MAIL ONLY IF ITS FFOLLWED BY WOMAN
		//$matchMail = preg_grep("%^(?<=mail)man%i", $randArray);
		
		echo "<h2>this is search for MAILMAN matched:</h2><br>";
		
		foreach ($matchMail as $resultMail){
			echo $resultMail, "<br><br>"; 
		}
		// \d =digit. \w =word(character a-z, 0-9) \s =white space \b =word boundry. \   \   \   \   \
		///////
		//END
		//////
	
	?>

</body>

</html>