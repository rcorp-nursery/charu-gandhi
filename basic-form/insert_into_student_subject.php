	<?php
	$connect = mysqli_connect("localhost","root","","studentsubject");
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: ".mysqli_connect_error();
  	}


	$insert_into = "INSERT INTO student_subject (Student_Id, Subject_Id) VALUES ('$_POST[studentid]','$_POST[subjectid]')";


	$result=mysqli_query($connect,$insert_into);
	if($result){
		echo("<br>Input data is succeed");
	} 
	else{
		echo("<br>Input data is fail");
	}
	?>