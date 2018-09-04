<html>

<head>
<title>functions</title>
</head>

<body>

	<?php
		/////////////////////////////
		//FUNCTIONS AND PARAMETERS
		/////////////////////////////
		echo rand(1, 100), "<br><br>"; //random number generator FUNCTION built into php
		/////
		//END
		/////
		
		
		
		//////////////////////////////////////////////////////////
		//RANDOM NUMBER GENERATED TIMES THE FUNCTION OF TWO VARIABLES
		///////////////////////////////////////////////////////////
		function addNum($num, $num2) {
			
			return $num + $num2;
			
		}
		$crazy = rand(1, 100); //most of this looks like random junk now but it works
		echo $crazy, " * ", addNum(7, 16), " =<br><br>";
		
		echo addNum(7, 16) * $crazy, "<br><br>";
		//////
		//END
		//////
		
		
		
		
		///////////////////////////////////////////////
		//new functions:SCOPE of global variables and pointers
		///////////////////////////////////////////////
		function editGlobal(&$globalVariable) { // using a "&" before the variable points to its location and changes value
			$globalVariable = 200;    //the value is only valid in this function. LOCAL VARIRIABLE
		}
		
		$globalVariable = 120;  //declaired outside. GLOBAL VARIABLE
		echo $globalVariable, "<br><br>";
		editGlobal($globalVariable); //can now take effect because of pointer reference
		echo$globalVariable, "<br><br>";
		////////
		//END 
		//////
		
		
		
		
		////////////////
		//DEFAULT VALUES
		////////////////
		function getTip($costSent, $tipSent=0.15){  //takes two parameters and the second already has a default value set up
			
			echo "$", $costSent * $tipSent, "<br><br>";
			
		}
		
		$cost = 100; //cost will be put into parameter 1($costSent)
		getTip($cost, .24); //.24 modifys the default value of .15
		//////
		//END
		//////
		
		
		
		////////////////////////////
		//SEND MULTIPLE VALUES
		//(AS VARIABLE CONTAINING STRING) 
		//TO FUNCTION. BREAK STRING CONTENTS(VARIABLE) TO ARRAY(VARIABLE). 
		//RETURN AS ARRAY. LOOP PRINT ARRAY.
		////////////////////////////////
		function breakItUp($userInfo){ //create function(takes one parameter, variable) do:
			$userArray = explode(",", $userInfo);  // creates tmp storageArray and fill with data from $userInfo and separate the contents whenever you see a comma
			return $userArray;  //return this storage array to whoever called this function
		}
		
		$userStr = "Thapelo,123 Main st,Klerksdorp,NW";  //string to be passed to functon for break up
		$userArray = breakItUp($userStr);
		
		foreach ($userArray as $customer){ //foreach LOOP cycles through userarray. prints them out seperate line
			echo $customer, "<br>";
		}
		
		echo "<br><br>";
		//////
		//END
		//////
		
		
		
		/////////////////////////////////
		//RECUSION:
		//(I NEED TO DO MORE OF THESE. I HOPE THAT MAKES SENSE LOL)
		//FACTORIAL EXAMPLE
		////////////////////////////////
		function factorial($number){
			if($number ==1){
				
				return 1;
			} else {
				
				return $number * factorial($number - 1); //
			}
			
		}
		
		echo factorial(4);
		/////
		//END
		/////
		
	?>

</body>

</html>