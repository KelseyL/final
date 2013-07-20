<?php

	//start of contact mail()
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	//var_dump($_POST);
	if ($_POST["submit"] = "Send") {

		$info = "Here is the confirmation email for ".$name." at this address: ".$email;
	
		$info = wordwrap($message, 70, "\r\n");
	
		$headers = "From: nobody@whocares.com";
	
		echo mail("kelshaelaw@gmail.com", "To Confirm", $info, $headers);
	}else{
		
	}

	//end of contact mail()

	//create file and write to it
	$file = "transport.txt";

	$handle = fopen($file, "w+") or exit("Cannot open file: ".$file);

	$transport = [
		"walk",
		"bicycle",
		"transit",
		"vehicle"
	];

	$data = serialize($transport);

	fwrite($handle, $data);

	$display = file_get_contents($file);

	$display = unserialize($display);

	//$display = array_count_values($transport);

	//print_r($display);
	//end of .txt


	//this prints results in graph form by percentage
	$total = 0;

	arsort($transport);

	foreach ($transport as $trans) {
		$total =+ $trans;
	}

	foreach ($transport as $mode => $trans) {
		$perc[$mode] = round($trans / $total * 100);
	}



	$i = 1;

	foreach ($transport as $mode => $trans) {

		if($i == 1){
			$first = " blue";
		}else{
			$first = "";
		}

		echo "\t<div class='item".$first."' style ='width: ".$perc[$mode]."%;'>".$perc[$mode]."%</div>\r\n";

		$i++;
	}

	echo "\t<p>Total votes: ".$total."</p>\r\n";	
	//end of results 

?>