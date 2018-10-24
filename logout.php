<?php 
	session_unset();
	session_destroy();
	sleep(3);
	header("location:index.html");
 ?>