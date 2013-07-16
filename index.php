<?php

	//include("");

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
				<form>
					<li><label for="name">Name</label><input class="info" type="text" name="name" value=""></li>
					<li><label for="email">Email</label><input class="info" type="text" name="email" value=""></li>		
					<li><label for="message">Message</label><textarea class="info" rows="4" cols="30"></textarea></li>
				</form>
				<input id="send" type="submit" name="" value="Send">	
			</section>
	
			<section id="poll">
				<h2>Take The Survey</h2>
				<h3>Vote from the options below:</h3>
				<form>
					<label for="walk">Walk</label>
					<input type="radio" name="transport" value="walk"></br>
					<label for="walk">Bicycle</label>
					<input type="radio" name="transport" value="bicylce"></br>
					<label for="walk">Transit</label>
					<input type="radio" name="transport" value="transit"></br>
					<label for="walk">Vehicle</label>
					<input type="radio" name="transport" value="vehicle"></br>
				</form>	
			</section>
	
			<section id="results">
				<h2>Survey Results</h2>
				<p>Here are the results we've gathered so far! Ponder its uses and 	information for projects of your own or just keep refreshing and watch 	them grow!</p>
				PHPHPHPHPHPHPHPHPHP!!
			</section>

		</div>	

	</div>	

	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/js.js"></script>

</body>
</html>