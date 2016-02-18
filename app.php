<?php

	//Getting the message from address
	// if there is ?name=... then $_get["name"]
	$my_message = $_GET["message"];
	$who = $_GET["who"];
	$from_who = $_GET["from_who"];
	
	echo "Message from ".$from_who. " to ".$who. " - " .$my_message;

?>

<h2> First application </h2>

<form method="get">
	<label for="who">For who the message:* <label><br>
	<input type="text" name="who"><br><br>

	<label for="message">Type your Message here:* <label><br>
	<input type="text" name="message"><br><br>
	
	<label for="from_who">From who the message:* <label><br>
	<input type="text" name="from_who"><br><br>
	
	<input type="submit" value="Send"><br>
	
	

<form>