<html>
<body>

<?php
$connect = mysqli_connect("localhost","root","","studentsubject");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
  }


$insert_into=" INSERT INTO student
              VALUES('$_POST[name]','$_POST[email]','$_POST[id]','$_POST[city]')";

$result=mysqli_query($connect,$insert_into);
if($result){
	echo("<br>Input data is succeed");
} 
else{
	echo("<br>Input data is fail");
}

mysqli_close($connect);
?>
<br>
Welcome <?php echo $_POST["name"]; ?> <br>



</body>
</html>