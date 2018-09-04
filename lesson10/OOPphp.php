<html>

<head>

<title>OOP</title>

</head>


<body>

	<?php
	
		////////////////////////////////////////////////////////
		//CLASSES OF OBJECTS WITH THEIR VARIABLES, ARRAYS AND FUNCTIONS
		////////////////////////////////////////////////////////
		class cat {
			
			
			/////////////////////
			//ATTRIBUTES OF OBJECT
			//////////////////////
			public $catName; //accesed by anyone in any way
			private $catAge;  //only accessed by functions(methods)
			const houseAddress = "2525 main st";  //attributes that never change
			
			
			///////////////////////////////
			//SET AND GET FUNCTIONS TO ACCESS PRIVATE & PROTECTED
			//////////////////////////////
			public function setAge($age){  //function needed to access private & protected attributes
				$this->catAge = $age;
			}
			
			public function getAge(){  //the get function needed for private attributes
				return $this->catAge;
			}
			///////
			//END
			//////
			
			
			///////////////////
			//__CONSTRUCTOR FILE
			////////////////////
			public function __construct(){ //constructor file that needs to be in every class. left empty.
				echo "object of class cat created by __construct <br><br>";  //echo that object created
			}
			/////////
			//END
			/////////
			
			
			/////////////////////////////////////////////
			//MAGIC FUNCTIONS TO OVERRIDE ENCAPSULATIO. DANGER!
			/////////////////////////////////////////////
			function __set($attribName, $attribValue) {
				echo "!!!called __set function for ", $attribName, "!!!<br><br>";
				$this->$attribName = $attribValue;
			}
			
			
			function __get($attribName) {
				return $this -> $attribName; 
			}
			
		}
		
		
		$kitty = new cat(); //new object($kitty) of cat type followed by empty brackets
		$kitty->catName = "NaeNae"; //kitty is a cat object therefore "$kitty"->catName can be used like "$this"->catName. we're naming object without using setter because public
		$kitty-> setAge(3); //just set it using function
		$katName = $kitty -> catName; //variable so we can call
		
		
		echo "this cats name is ", $katName, "<br>";
		echo "she is ", $kitty->getAge(), " months old.<br>";
		echo " and lives at ", $kitty::houseAddress, "<br><br>";
		
		//magic functions
		$kitty-> catAge = 9; //magic function __set allows us to set value direcly without needing to call setAge() func.(breaking encapsulation)
		echo $katName, " is now MAGICALLY ", $kitty->catAge, " years old. how did that happen";  //__get function removed need of _getAge() func. call
		
		
	
	?>

</body>
</html>