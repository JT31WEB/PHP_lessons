<?php 
	
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$day = $_POST['day'];
	$month =$_POST['month'];
	$SEX = "";
	$StarSign= "";
	
	if ($gender == "MALE"){
		$SEX = "boy";
	}  else {
		$SEX = "girl";
	}
	
	switch($month) {
		
		case "january": 
			if($day <= 19) {
				$StarSign = "Capricorn";
			}  else {
				$StarSign = "Aquarius";
			}
			break;
			
		
		case "febuary": 
			if($day <= 18) {
				$StarSign = "Aquarius";
			}  else {
				$StarSign = "Picses";
			}
			break;
			
		case "march":
			if($day <= 20) {
				$StarSign = "Picses";
			}  else {
				$StarSign = "Aries";
			}
			break;
			
		case "april":
			if($day <= 21) {
				$StarSign = "Aries";
			}  else {
				$StarSign = "Taurus";
			}
			break;
		
		case "may":
			if($day <= 21){
				$StarSign = "Taurus";
			}  else {
				$StarSign = "Gemini";
			}
			break;
			
		case "june":
			if($day <= 22) {
				$StarSign = "Gemini";
			}  else {
				$StarSign = "Cancer";
			}
			break;
			
		case "july":
			if($day <= 23 ) {
				$StarSign = "Cancer";
			}  else {
				$StarSign = "Leo";
			}
			break;
		
		case "august":
			if($day <= 23) {
				$StarSign = "Leo";
			}  else {
				$StarSign = "Virgo";
			}
			break;
			
		case "september":
			if($day <= 23) {
				$StarSign = "Virgo";
			}  else {
				$StarSign = "Libra";
			}
			break;
			
		case "october":
			if($day <= 23) {
				$StarSign = "Libra";
			}  else {
				$StarSign = "Scorpio";
			}
			break;
		
		case "november":
			if($day <= 22) {
				$StarSign = "Scorpio";
			}  else {
				$StarSign = "Sagittarius";
			}
			break;
			
		case "december":
			if($day <= 22) {
				$StarSign = "Sagittarius";
			}  else {
				$StarSign = "Capricorn";
			}
			break;
			
		default:
			$StarSign = "none";
			
	}
	
	echo "Hello " . $name . "!<br>";
	echo "so you are a " . $StarSign . " " . $SEX . " that loves sports? thats so cool!";

?>