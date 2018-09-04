<html>
<head>
	<title>
	PHP Object orientated Programming
	</title>
</head>

<body>
	<?php 
		
		class Animal {
			
			//PROTECTED: data can only be changed by itself or children(encapsulation)
			//protected can only be changed using functions(getters and setters)
			protected $name;
			protected $favorite_food;
			protected $sound;
			protected $id;
			
			//PUBLIC: Anyone can access this.  STATIC: is constant for all in class
			public static $number_of_animals = 0;
			
			//CONST: never going to change value
			const PI ="3.14159";
			
			//FUNCTIONS can be defined inside class
			//"getters" and "setters" to change values of protected data
			function getName() {
				
				return $this->name;
				
			}
			
			//CONSTRUCTOR function to create. uses double underscore "__"(MAGIC METHODS)
			function __construct() {
				
				$this->id = rand(100, 100000);
				
				echo $this->id . " has been assigned</br>";
				
				Animal::$number_of_animals++;
				
			}
			
			//DESTRUCTOR function to delete
			public function __destruct(){
				
				echo "</br>";
				echo $this->name . " is being destroyed. sad.";
				
			}
			
			
			//fuction to GET name
			function __get($name){
				
				echo "asked for " . $name . "</br>";
				
				return $this->$name;
				
			}
			
			
			//switch to set 1 of the values of data
			function __set($name, $value){
				
				switch($name){
						case "name":
							$this->name = $value;
							break;
							
						case "favorite_food":
							$this->favorite_food = $value;
							break;
							
						case "sound":
							$this->sound = $value;
							break;
						
						default :
							echo $name . "not found";
					}
				
				echo "Set " . $name . " to " . $value . "</br>";
				
			}
			
			function run(){
				
				echo "</br>" . $this->name . " runs</br>";
				
			}
			
			//FINAL word before function means it cannot be changed by children
			final function what_is_good(){
				
				echo "</br>running is good</br>";
				
			}
			 
			 //function that prints out strings when called
			function __toString(){
				return $this->name . " says " . $this->sound . "! Give me some " . $this->favorite_food . ". my id is " . $this->id . "</br>" . "total number of animals = " . Animal::$number_of_animals;
			}
			
		}
		
		
		//the dog class INHERITS the features of Animal but can OVERRIDE them
		class Dog extends Animal {
			
			function run(){
				
				echo $this->name . " runs like crazy</br>";
				
			}
			
		}
		
		
		
		//we're creating the animals here
		//create NEW instance of class Animal using construct function
		$animal_one = new Animal();
		
		//give class animal attributes
		$animal_one->name = "spot";
		$animal_one->favorite_food = "meat";
		$animal_one->sound = "Ruff";
		
		//print changed values
		echo $animal_one->name . " says " . $animal_one->sound . "! Give me some " . $animal_one->favorite_food . ". my id is " . $animal_one->id . "</br>";
		echo "total number of animals = " . Animal::$number_of_animals; //class::variable used to access public data
		
		echo "<br><br>";
		
		
		//now we're using the DOG CLASS
		$animal_two = new Dog();
		
		
		$animal_two->name = "Grrrover";
		$animal_two->favorite_food = "Ham";
		$animal_two->sound = "GRRR";
		
		
		echo $animal_two->name . " says " . $animal_two->sound . "! Give me some " . $animal_two->favorite_food . ". my id is " . $animal_two->id . "</br>";
		echo "total number of animals = " . Dog::$number_of_animals; //still accesible because of inheritance
		
		
		//example of overriding
		$animal_one->run();
		$animal_two->run();
		//using the final function
		$animal_one->what_is_good();
		
		echo $animal_one;
		
	?>
</body>
</html>