<html>

<head>

<title>STRINGS</title>

</head>

<body>

	<?php
	
		/////////////////////////////
		//THE STRING WE'LL BE USING
		///////////////////////////
		$randStr = "mailman mailwoman Jennefer jenny jen doctor doug dog";
		$randStr2 = "Dick and jane fetched a bucket of water";
		
		
		
		////////////////////////////////
		//PREG_MATCH_ALL FUNCTION IDENTIFY ALL POSSIBLE CHARS AND APPROX LEN,
		///////////////////////////
		preg_match_all('%je[nifery]{1,6}%i', $randStr, $matchName); //("match",$sourceVariable, $storageArray)
		
		foreach ($matchName as $result){
			foreach($result as $found){
				echo $found, "<br><br>";
			}
		}
		
		echo"<br><br>";
		///////
		//END
		//////
		
		
		
		
		//////////////////////////////////////////
		//PREG_REPLACE FUNCTION: REPLACE A CHAR 
		/////////////////////////////////////
		echo $randStr2, "<br><br>";
		echo preg_replace("%Dick%", "Paul", $randStr2 ), "<br><br>"; //preg_replace
		///////
		//END
		//////
		
		
		/////////////////
		//STR_REPLACE
		///////////////
		echo str_replace("jane","erica", $randStr2 ), "<br><br>";  //str_replace function
		////////
		//END
		///////
		
		
		
		///////////////////
		//STRPOS
		////////////////
		echo strpos($randStr2, "bucket"), "<br><br>"; //find a specific word's index key.
		////////
		//END
		//////
		
		
		//////////////////////////
		//SUBSTR FUNCTION
		///////////////////////
		echo substr($randStr2, 9, 4), "<br><br>";//helps you count to specific word snd lenght desired
		//////
		//END
		////////
		
		
		
		///////////////////////////////
		//PREG_SPLIT FUNCTION FOR STRINGS
		///////////////////////////////
		$chairPpl = "jacob zuma(ceo) julius malema(cfo) mmusi maimane(cto)";
		$noTitle = preg_split("%\s?\(.{3}\)\s?%",$chairPpl);
		
		
		foreach ($noTitle as $found){
			echo $found, "<br><br>";
		}
		
		echo strlen($chairPpl) , "<br><br>";
		//////
		//END
		//////
		
		
		
		////////////////////////////
		//RANDOM USEFULL STRING FUNCTIONS
		////////////////////////////
		$str1 = "Doctor Jay";
		$str2 = "Doctor jay";
		$str3 = "He went that way";
		
		
		echo strcmp($str1,$str2), "<br><br>"; //STRING COMPARE. NUMERIC KEY(BOARD?) VALUE COMPARE
		echo strcasecmp($str1,$str2), "<br><br>"; //STRING COMPARE WITHOUT CASE SENSE. AIM FOR 0!
		echo ucfirst($str3), "<br><br>"; //UPPERCASE FIRST WORD
		echo ucwords($str3), "<br><br>"; //UPPERCASE ALL WORDS
		echo strtolower($str3), "<br><br>"; //LOWERCASE ALL
		echo strtoupper($str3), "<br><br>"; //UPPERCASE ALL
		
		$htmlText = "<html><title>HELLO WORLD</title></html>";
		echo strip_tags($htmlText), "<br><r>";  //STRIP HTML TAGS. RETURN ALL BETWEEN TAGS
		//////
		//END
		//////
		
	
	?>

</body>

</html>