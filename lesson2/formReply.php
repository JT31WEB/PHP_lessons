<html>

<head>
<title>Info Received</title>
</head>

<body>

	<?php
	// , and . for cancatenation. i think
		echo "Information Received " . $_POST['name'] . "</br>";
		
		echo "you live at " . $_POST['address'] . " " . $_POST['city'] . " " . $_POST['state'] . "<br>";
		
		echo $_POST['name'] . "  do you think you guessed my favourite number right?<br>";
		
		$numGuessed = (int) $_POST['number'];
		
		if (($numGuessed == 5) AND ($numGuessed < 11)) {
			
			echo "Yes! You guessed correct!!!<br>";
			
		} elseif($numGuessed > 5) {
			
			echo "unfortunately you guessed too high...<br>";
			
		} else{
			
			echo "unfortunately you guessed too low, bro.<br>";
			
		}
		
		$favPet = $_POST['pet'];
		
		switch($favPet) {
			
			case "dogs":
			echo "Woof";
			break;
			
			case"cats":
			echo "Meow";
			break;
			
			case "fish":
			echo "Bubble";
			break;
			
			default:
			echo "ok, whatever.";
			
		}
	
	?>

</body>

</html>