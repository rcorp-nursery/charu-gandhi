<?php
	$connect=mysqli_connect("localhost","root","","studentsubject");

	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
?>
<html>
<head>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" >
    
</head>
<?php
 	$Student_Id="$_POST[studentids]";

	$result=mysqli_query($connect,"SELECT * FROM student WHERE Student_Id='$Student_Id'");
?>
	<table border='1' class="table table-striped">
	<tr class="active">
	<th>Student_Name</th>
	<th>Email</th>
	<th>Student_Id</th>
	<th>City</th>
	</tr>
<?php
	while($row=mysqli_fetch_array($result)){
		echo '<tr class="success" >';
		echo "<td>" . $row['0'] . "</td>";
		echo "<td>" . $row['1'] ."</td>";
		echo "<td>" . $row['2']  ."</td>";
		echo "<td>" . $row['3']  ."</td>";	
		echo "</tr>";
	}
	echo "</table>";


	
	$result = mysqli_query($connect,"SELECT * FROM subject left join student_subject on subject.Subject_id = student_subject.Subject_id WHERE student_subject.Student_Id='$Student_Id'");
  ?>
	<table border='1' class="table table-striped">
	<tr class="active" >
	<th>Subject_Name</th>
	<th>Subject_Id</th>
	<th>Subject_Details</th>
	</tr>
<?php
	while($row = mysqli_fetch_array($result)){
		echo '<tr class="success">';
		echo "<td>" . $row['0'] . "</td>";
		echo "<td>" . $row['1'] ."</td>";
		echo "<td>" . $row['2'] ."</td>";
		echo "</tr>";
	}
	echo "<br>";
   $sql="SELECT COUNT(Subject_Id) FROM student_subject where Student_Id=$Student_Id";
   $result = mysqli_query($connect,$sql);
   $count=mysqli_fetch_array($result);
   ?>
   <table  class="table table-striped">
    <tr class="active">
    	<th><h3>No. of Subjects</h3></th>
  	</tr>
   <?php
   echo '<tr class="success">'; 
   echo "<td>" .$count['0']. "</td>";
   echo "</tr>";
   $sql1="SELECT Subject_Id FROM student_subject WHERE Student_Id=$Student_Id";
   $result = mysqli_query($connect,$sql1);
   $num_rows = mysqli_num_rows($result);
   echo '<tr class="success">';
   echo "<td>".$num_rows."</td>" ;
   echo '</tr>';
   
?>