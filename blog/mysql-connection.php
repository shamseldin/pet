<?php
$link = mysqli_connect("localhost","root","");

	if(!$link){
		die("could not connect.. ".mysqli_error());
	}else{
		//secho "Connected .. <br>";
		mysqli_select_db($link, "blog");
		
	}

		?>


