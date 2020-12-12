<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Crown software </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Crime Alert</span></div>
<?php
 include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:adlog.php");

}
else
{
$name = $_SESSION['name'];;

include_once 'dbConnection.php';

}?>

</div></div>
<!-- admin start-->

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
   
  </div><!-- /.container-fluid -->
</nav>
<!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->

<?php
if(@$_GET['q']== 0) 
{
 
$q=mysqli_query($con,"SELECT * FROM crime_records " )or die('Error223');
echo  '<br><h3 align="middle">Crime Records</h3><br>
<table class="table table-striped " style="height:20px;">
<tr style="color:red"><td><b>S/N</b></td><td><b>Type</b></td><td><b>lng,lat</b></td><td><b>Event Time</b></td><td><b>Event Description</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$type=$row['type'];
$location=$row['location'];
$created_at=$row['created_at'];
$description = $row['description'];
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$type.'</td><td>'.$location.'</td><td>'.$created_at.'</td><td>'.$description.'</td></tr>';




}
echo '</table>';}

?>


</div><!--container closed-->
</div></div>
</body>
</html>
