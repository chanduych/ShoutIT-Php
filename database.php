<?php
	$con = mysqli_connect("localhost", "root" , "" , "shoutit" );
	if (mysqli_connect_errno()) {
		echo "failed to connect :".mysql_connect_error() ;
	}
 ?>