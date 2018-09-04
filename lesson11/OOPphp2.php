<html>

<head>
<title>object-Orientation</title>
</head>

<body>

	<?php
		
		
		///////////////////////
		//original class
		/////////////////////
		class cat {
			
			private $name;
			private $favFood = "Fish";
			
			
			//////////////////////////////
			//STATIC VALUE CAN BE ACCESSED BY ALL OBJECTS MADE FROM THIS CLASS. WE WILL USE IT AS A COUNTER OF HOW MANY CARAZY CATS WE HAVE
			/////////////////////////////
			public static $numberOfCats = 0;
			
			
			///////////////////////////
			//construct and destruct(garbage collection) methods
			////////////////////////////
			public function __construct($name="no name"){  //init attrib to default
				echo "__construct was called", "<br><br>";  //confirm creation
				$this->setName($name); //call name func
				self::$numberOfCats++; //increase counter + 1
			}
			
			
			
		}
		
		
		
		
		
	?>

</body>

</html>