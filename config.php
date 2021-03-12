<?php

	#$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');
	$conn = mysqli_connect('localhost','id12801618_root1','Fr)6qkKdbm#Xq$bm','id12801618_sparks_bank');
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>