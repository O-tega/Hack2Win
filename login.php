<?php
session_start();
if(isset($_SESSION["password"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$password = $_POST['password'];

//$email = stripslashes($email);
//$email = addslashes($email);
// $password = stripslashes($password); 
// $password = addslashes($password);
// $password=md5($password); 
$result = mysqli_query($con,"SELECT * FROM crime_user WHERE email = '$name' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$email = $row['email'];
}
$_SESSION["name"] = $name;
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;
header("location:account.php?q=1");
}
else{
	header("location:$ref?w=Wrong Username or Password");
}




?>