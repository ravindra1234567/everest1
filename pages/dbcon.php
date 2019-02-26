<?php
	$conn = mysqli_connect('localhost','root','','sih');
	//mysqli_select_db($conn,'displayupload');
	if($conn == false)
	{
		echo"Connection is not create";
	}
	
?>