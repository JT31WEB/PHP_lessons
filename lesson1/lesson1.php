<!DOCTYPE html> //I THINK ITS A GOOD HABIT TO ALWAYS PUT THIS IN SO I'M JUS GONNA LEAVE THIS HERE

<HTML>
<head>
<title><?php echo "website title";?></title>
</head>

<body>

<?php 

	echo "<p>Random text</p>"; //print to screen
	print ("<p>you can print</p>"); //using print function
	print ("or without them");
	
	//variables start with $ and $_ for numbers etc(non alphabets)
	//variables CASE SENSITIVE
	$randVar = "cats";
	$floatEx1 = "3534.14432";
	echo "<p>" . $randVar . " are funny.</p>"; 
	
	//using printf and its formating(thank you C lol)
	printf("<p>my name is %s. i'm %d years old and Pi is equal to %.2f</p>", 'derek', 35, 3.1415);
	
	//number format with "echo" using "number_format()" function
	echo "<p> Cost: $", number_format($floatEx1, 2), "</p>";
	
	//CONSTANT VALUES. values that you never change. I GUESS THESE WILL BE USED EVENTUALLY. meh
	define ('aconstant', 2345);
	echo "\"a constant equals: " . aconstant . "\"<br>";//a backslash is an escape for special charathers(?)
	
	
	
	
?>

</body>

</html>