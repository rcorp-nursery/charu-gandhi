<?php
$connect = mysqli_connect("localhost","root","", "studentsubject");
?>
<html>
<head>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" >
    
</head>
<body>
	<form action="view_details_stusub.php" method="post" role="form">
		<div class="form-group has-success">

    <label class="control-label" for="inputSuccess2">Student Name:</label>
    <select name="studentids" class="form-control input -sm" id="inputSuccess2">
	<?php 
	$result = mysqli_query($connect,"SELECT * FROM student");
	while($row = mysqli_fetch_array($result)){
		?>
<!-- 		<option>Select</option>
 -->		<option value="<?php echo $row["Student_Id"]?>"><?php echo $row["Student_Name"]?></option>
		<?php
	}
	?>	
	
</select>
</div>
<button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
</form>