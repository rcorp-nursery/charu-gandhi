<?php
$connect = mysqli_connect("localhost","root","", "studentsubject");
?>
<html>
<head>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<form role="form" action="insert_into_student_subject.php" method="post">
<div>
	<div class="form-group has-success">

    	<label class="control-label" for="inputSuccess1">Student Name:</label>
    	<select name="studentid" class="form-control input-sm" id="inputSuccess1">
		<?php 
		$result = mysqli_query($connect,"SELECT * FROM student");
		while($row = mysqli_fetch_array($result)){
			?>
			<option value="<?php echo $row["Student_Id"]?>"><?php echo $row["Student_Name"]?></option>
			<?php
		}
		?>	
		</select>
	</div>
	<br>

	<div class="form-group has-success" >

	<label class="control-label" for="inputSuccess1">Subject Name:</label>
    	<select name="subjectid" class="form-control input-sm" id="inputSuccess1">
		<?php 
		$result = mysqli_query($connect,"SELECT * FROM subject");
		while($row = mysqli_fetch_array($result)){
			?>
			<option value="<?php echo $row["Subject_Id"]?>"><?php echo $row["Subject_Name"]?></option>
			<?php
		}
		?>

	</select>
	</div>
	<br>

	<button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
</div>
</body>
</html>