<?php
	// $transport["walk"] = 30;
	// $transport["bicycle"] = 75;
	// $transport["transit"] = 40;
	// $transport["vehicle"] = 40;

	// $total = 0;	

	// arsort($transport);

	// foreach ($transport as $trans) {
	// 	$total += $trans;
	// }

	// foreach ($transport as $type => $trans) {
	// 	$perc[$type] = round($trans / $total * 100);
	// }

	include("mail.php");

?><!doctype html>
<html>

<head>
	<title>Kelsey's Final</title>
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<div id="container">

		<header>
			<h1>TRANSPORT</h1>
		</header

		<div>
			<ul id="tabs">
				<li><a href="#about" class="nav">About</a></li>
				<li><a href="#contact" class="nav">Contact</a></li>
				<li><a href="#poll" class="nav">Poll</a></li>
				<li><a href="#results" class="nav">Results</a></li>
			</ul>	
		</div>

		<div id="content">

			<section id="about">
				<h2>About Transport</h2>
				<p>Curiosity strikes once more...</p>
				<p>Living in a city such as Vancouver has brought about many adventures. 	Always changing and trending. Vancouver is a vast, fast-paced chunk of the 	westcoast here in BC and people come for any and all reasons from 	different walks of life. My question is this:</p>
				<p>Are you actually walking? Let us know how you navigate through from 	establishment to watering hole, from home to work, from Vancouver 	Destination A to Vancouver Destination B.</p>
				<p>For no particular reason at all. Our only hope is a satisfaction of 	general pondering and wonderment.</p>
				<p>Thanks for participating!!</p>
			</section>
	
			<section id="contact">
				<h2>Contact Us</h2>
				<a class="twitt" href="#">Twitter</a><a class="fb" href="#">Facebook</a><a class="goog" href="#">Google</a>
				<p>This is where you give us your info. If you write us a really sweet 	message or maybe have an idea for what to survey next, write it here.</p> 
				<p>Leave us your email and we'll let you know how cool your are and send 	you the updated results after you've voted!</p>
				<form action="mail.php" method="post">
					<li><label for="name">Name</label><input class="info" type="text" name="name" value=""></li>
					<li><label for="email">Email</label><input class="info" type="text" name="email" value=""></li>		
					<li><label for="message">Message</label><textarea class="info" name="message" rows="4" cols="30"></textarea></li>
					<input id="sendbutton" class="send" type="submit" name="" value="Send">
				</form>
					
			</section>
	
			<section id="poll">
				<h2>Take The Survey</h2>
				<p>This is it. Decision time. You have to make up your mind. Just be honest. True to who you are and how you get around. You do what you do, because that's what you want to do.</p>
				<p>It's every Canadian's right to have the chance to vote. Here's yours.</p>
				<h3>Vote from the options below:</h3>
				<form>
					<li><label for="walk">Walk</label>
					<input type="radio" name="transport" value="walk"></li></br>
					<li><label for="walk">Bicycle</label>
					<input type="radio" name="transport" value="bicylce"></li></br>
					<li><label for="walk">Transit</label>
					<input type="radio" name="transport" value="transit"></li></br>
					<li><label for="walk">Vehicle</label>
					<input type="radio" name="transport" value="vehicle"></li></br>
					<input id="votebutton" class="send" type="submit" name="" value="Vote!">
				</form>
				

				<?php

					// $file = "data.txt";
					// $handle = fopen($file, "w+") or exit("Can't open file: ".$file);

					// $poll = serialize($transport);

					// fwrite($handle, $poll);

					// $display = file_get_contents($file);
					// $data = unserialize($display);
					// $transport = array_count_values($data);

				?>

			</section>
	
			<section id="results">
				<h2>Survey Results</h2>
				<p>Here are the results we've gathered so far! Ponder its uses and 	information for projects of your own or just keep refreshing and watch 	them grow!</p>

				<?php 

				// 	$i = 1;

				// 	foreach ($transport as $type => $trans) {

				// 		if($i == 1){
				// 			$first = " blue";
				// 		}else{
				// 			$first = "";
				// 		}

				// 		echo "\t<div class ='item".$first."' style ='width: ".$perc[$type]."%;'>".$type." ".$perc[$type]."%</div></br>\r\n";
			
				// 		$i++;
				// }			

				// 	echo "\t<p>Total votes: ".$total."</p>\r\n";
				?>

			</section>

		</div>	

	</div>	

	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/js.js"></script>

</body>
</html>