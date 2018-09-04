<html>

<head>
<title>
printing loop
</title>
</head>

<body>

	<?php
	
		$counttoUnchecked =(int) $_REQUEST['countTo'];
		$countto = 100;
		$startNum = 1;
		$multipleOf3 = 1;
		$multipleOf4 = 1;
		$multipleOf5 = 1;
		$multipleOf6 = 1;
		$multipleOf7 = 1;
		$multipleOf8 = 1;
		$multipleOf9 = 1;
		$multipleOf10 = 1;
		
		//limit
		if ($counttoUnchecked > 101){
			$counttoUnchecked = $countto;
		}
		
				//DO-WHILE LOOP
		$iterator2 = 1;
		
		$STR = <<<EOD
		<h2>all the numbers from 1 to $countto</h2>
EOD;
			
			echo $STR;
			do {
				echo $iterator2, ", ";
				$iterator2++;
			} while ($iterator2 <= $countto);
			
		echo"<br><br>";
	
		
		echo "<h2>Odd Numbers</h2><br>";
		//WHILE loop to sort odd, print odd, check limit and increment if even 
		while ($startNum <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($startNum % 2) != 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $startNum, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($startNum >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$startNum++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$startNum++;
			
		}
		
		$countto =(int) $_REQUEST['countTo'];
		$startNum = 1;
		
		echo"<br><br>";
		echo "<h2>even numbers</h2><br>";
		
		//WHILE loop to sort even, print even, check limit and increment if odd 
		while ($startNum <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($startNum % 2) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $startNum, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($startNum >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$startNum++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$startNum++;
			
		}
	
		echo"<br><br>";
		
		echo "<h2>Multiple of 3</h2><br>";
		
		//WHILE loop to pick out multiples of 3 or any number you can think of
		while ($multipleOf3 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf3 % 3) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf3, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf3 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf3++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf3++;
			
		}
	
		echo"<br><br>";
		echo "<h2>Multiple of 4</h2><br>";
				while ($multipleOf4 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf4 % 4) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf4, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf4 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf4++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf4++;
			
		}
	
		echo"<br><br>";
		echo "<h2>Multiple of 5</h2><br>";
				while ($multipleOf5 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf5 % 5) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf5, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf5 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf5++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf5++;
			
		}
		
		echo"<br><br>";
		echo "<h2>Multiple of 6</h2><br>";
				while ($multipleOf6 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf6 % 6) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf6, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf6 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf6++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf6++;
			
		}
		
		echo"<br><br>";
		echo "<h2>Multiple of 7</h2><br>";
				while ($multipleOf7 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf7 % 7) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf7, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf7 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf7++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf7++;
			
		}
		
		echo"<br><br>";
		
		echo"<br><br>";
		echo "<h2>Multiple of 8</h2><br>";
				while ($multipleOf8 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf8 % 8) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf8, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf8 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf8++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf8++;
			
		}
		
		echo"<br><br>";
		
		echo"<br><br>";
		echo "<h2>Multiple of 9</h2><br>";
				while ($multipleOf9 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf9 % 9) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf9, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf9 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf9++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf9++;
			
		}
		
		echo"<br><br>";
		
		echo"<br><br>";
		echo "<h2>Multiple of 10</h2><br>";
				while ($multipleOf10 <= $countto) {
			
			//sort and print odd numbers only. use "== 0" in IF for even
			if (($multipleOf10 % 10) == 0) { //divide current loop number and it brings back 0(int) - DO echo blah blah blah 
				echo $multipleOf10, ", ";    //used comma instead of period for ??cancatenation??
			} elseif($multipleOf10 >= 100) { //in case they try somehow to go over 1000
				break;
			} else {
				$multipleOf10++;  //the odd numbers dont get printed. use continue word...
				continue;
			}
			
			$multipleOf10++;
			
		}
		
		echo"<br><br>";
		
		
		//fibonacci sequence with for loop
		echo "<h2>Fibonnaci sequence up to the $countto iteration</h2><br>";
		
		$maxFib = $countto;
		$firstNum = 0;
		$secNum = 1;
		
		for ($var = 0 ; $var <= $maxFib; $var++){
			echo $firstNum, ", ";
			$sum = $firstNum + $secNum;
			$firstNum = $secNum;
			$secNum = $sum;
		}
		
	?>

</body>

</html>