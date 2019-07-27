<?php
include "conn.php";
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$branch = password_hash($password,PASSWORD_BCRYPT);
$query = "INSERT INTO `users` (`student_name`,`student_email`,`student_address`,`student_branch`)VALUES('$name','$email','$address','$branch')";
$result = mysqli_query($con,$query);
if($result){
	echo "succesfuly inserted";
}
else{
	echo "failed to insert";
}
?>