<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['u_name'];
$name= ucwords(strtolower($name));
$email = $_POST['email'];
$password = $_POST['password'];
$pass_confirm = $_POST['password_confirmation'];
$sex = $_POST['u_gender'];
$marital_status = $_POST['u_marital_status'];
$household_size = $_POST['u_hos'];
$occupation = $_POST['u_occupation'];
$contact = $_POST['u_contact'];
$place_of_work = $_POST['u_pow'];
$education_level = $_POST['u_education_level'];
$resident_state = $_POST['u_resident_state'];
$resident_city = $_POST['u_resident_city'];
$resident_lga = $_POST['u_resident_lga'];
$home_address = $_POST['u_home_address'];

if($password == $pass_confirm){
    $q3=mysqli_query($con,"INSERT INTO crime_user(name, email, password,
    sex,marital_status,household_size,occupation,contact,place_of_work,
    education_level,resident_state,resident_city,resident_lga,home_address) VALUES  ('$name' ,
    '$email' , '$password','$sex','$marital_status','$household_size','$occupation',
    '$contact','$place_of_work','$education_level','$resident_state','$resident_city',
    '$resident_lga','$home_address')");
    if($q3)
    {
    session_start();
    $_SESSION["password"] = $password;
    $_SESSION["name"] = $name;
    header("location:account.php?q=1");
    }else
        {
        header("location:index.php?q7=User Already Registered!!!");
        }
        ob_end_flush();
}else{
    header("location:index.php?q7=Password does not match!");
}







?>