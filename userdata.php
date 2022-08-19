<?php 
$con = mysqli_connect('localhost','root');
if ($con) {
	echo "successful";
}else{ echo "failed";}

mysqli_select_db($con,'photography');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$query = " INSERT INTO user( name,email,number ) VALUES('$name','$email','$number') ";

mysqli_query($con,$query);

header("location:index.php#contact");
 ?>