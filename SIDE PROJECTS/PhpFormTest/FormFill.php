<!DOCTYPE html>

	<body>
	
		<?php
		
		$userName = $_POST['username'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$cellphone = $_POST['cellphone'];
		$orderNum = $_POST['orderNum'];
		$contact = $_POST['contact'];
		
		$reply = <<<EOD
		Thank you for ordering with us $userName.</br>
		please confirm your details below and click 'complete' button to continue</br>
		</br></br>
		
		<h4>these are your details:</h4>
		$userName</br>
		Address: $address</br>
				$city</br>
		your cellphone number is: $cellphone</br>
		you ordered $orderNum product(s)</br>
		you wish to be informed of future sales offers via the $contact method</br>
EOD;

		echo "<h3>Order Processed</h3>";
		
		echo $reply . "</br>";
		
		
		
		?>
	</body>
</html>