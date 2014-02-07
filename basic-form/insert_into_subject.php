

	<?php
	$connect = mysqli_connect("localhost","root","","studentsubject");
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " .mysqli_connect_error();
  	}


	$insert_into = "INSERT INTO subject VALUES ('$_POST[subname]','$_POST[subid]','$_POST[subdetails]')";
	

	$result = mysqli_query($connect,$insert_into);
	if($result){
		echo("<br>Input data is succeed");
	} 
	else{
		echo("<br>Input data is fail");
	}
	?>
