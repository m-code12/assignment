<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
} else {
	echo "No Connection";	
}

mysqli_select_db($con, 'assignment');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
//$username = $_POST['username'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confp = $_POST['confirmp'];
	
$query = " insert into register (firstname,lastname,gender,dob,contact,email,password,confirmp) values ('$fname', '$lname', '$gender', '$dob', '$contact', '$email', '$pass', '$confp') ";
mysqli_query($con,$query);
echo '<script>alert("Registration Successful. Please login to proceed further.")</script>';
echo '<script>window.location="index.html"</script>';
	

?>