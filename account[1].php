<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Crime Alert</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 
<!--google map Api-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
 <!--functions to send actual addess to the backend API-->
 
 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
    
<div class="col-lg-6">
<span class="logo">Alert</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['password']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['password'];
$email2=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right " ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;</span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"><b>DASHBOARD</b></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
         <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Recent Crimes</a></li>
		<!--<li <?php //if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Result</a></li> -->
		<li class="pull-right"> <a href="logout.php?q=account.php" id="logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
		</ul>
          
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div id="success_message" class="ajax_response"> <?php if(@$_GET['q7']){ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'].'</p>';}?></div>
<div class="col-md-12">
<script>
        setTimeout(function() {
            $('#success_message').fadeOut("slow");
        }, 3000 );
            </script>
           

<button class="btn btn-primary" onclick="getLocation()">Get Location</button><br><br><b id="demo"></b> , <b id="demo2"></b><br><br>


<script>
var x = document.getElementById("demo");
var y = document.getElementById("demo2");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude; 
   y.innerHTML = "Longitude: " + position.coords.longitude;
}
</script>




<!--home start-->



<?php if(@$_GET['q']==1) {
echo '<form action="update.php" method="post" enctype="multipart/form-data">

<div align="middle">
<div class="form-group col-md-4 col-lg-8" align="middle">
    <select style="border-radius:50px;" name="crime_type" id="inputState" class="form-control" required>
      <option selected value="null">Select type of crime</option>
      <option value="robbery">robbery</option>
      <option value="riot">riot</option>
    </select>
  </div>
</div>
<div align="middle">
<div class="form-group col-md-4 col-lg-8">
<input type="text" class="form-control" name="lat" id="name"  placeholder="Latitude" style="border-radius:50px;" required>
</div>
</div>
<div align="middle">
<div class="form-group col-md-4 col-lg-8">
<input type="text" class="form-control" name="lng" id="name" placeholder="longitude" style="border-radius:50px;" required>
</div>
</div>
<div align="middle">
<div class="form-group col-md-4 col-lg-8">
<input type="text" class="form-control" name="crime_description" id="name" placeholder="Crime Description(Optional)" style="border-radius:50px;" >
</div>
</div>

<div align="middle" style="background-color:white;">
<div align="middle" class="shadow" style="border-radius:70px;width:40%;">
   <button type="submit" style="border-radius:70px;padding:70px 50px" class="btn btn-danger ">
       Alert
    </button></div></div>

</form>
';

}?>



<?php
if(@$_GET['q']== 2) 
{
 
$q=mysqli_query($con,"SELECT * FROM crime_records " )or die('Error223');
echo  '<div class="panel title"><div class="table-responsive"><br><h5 align="middle">Recent crime Records in your area</h5><br>
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S/N</b></td><td><b>Type</b></td><td><b>Location</b></td><td><b>Event Time</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$type=$row['type'];
$location=$row['location'];
$created_at=$row['created_at'];

$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$type.'</td><td>'.$location.'</td><td>'.$created_at.'</td></tr>';




}
echo '</table></div></div>';}

?>


</div></div></div></div>
<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<!-- <a href="http://www.projectworlds.in/online-examination" target="_blank">About us</a> -->
</div>

<a href="#" data-toggle="modal"class="btn " style="color:black;" data-target="#login"></a>
<div class="col-md-3 box">
<!-- <a href="#" data-toggle="modal" data-target="#developers">Developers</a> -->
</div>
<div class="col-md-3 box">
<!-- <a href="feedback.php" target="_blank">Feedback</a></div></div> -->
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
		<h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
		<h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
