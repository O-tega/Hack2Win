
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Crown Software </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

<script>sessionStorage.clear();</script>
</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Crime Alert</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>  
  <div class="col-md-6">
  <input id="name" name="name" placeholder="Enter Email Address" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Pass Code" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">


<div class=" panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
       
       <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="u_name" id="name" value="" placeholder="Enter Full name" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="col-md-4 col-form-label text-md-right"></label>

            <div>
                <input id="email" type="email" class="form-control " name="email" placeholder="Enter Email Address" required autocomplete="email">
            </div>
            </div>
    

            <div class="form-group col-md-4">
                <label for="inputState">Gender</label>
                <select name="u_gender" id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="male">MALE</option>
                  <option value="female">FEMALE</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="inputState">MARITAL STATUS</label>
                <select name="u_marital_status" id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="single">SINGLE</option>
                  <option value="married">MARRIED</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="inputEmail4">AGE</label>
                <input type="text" class="form-control" name="u_age" id="inputEmail4"  value="" placeholder="Enter correct age" required>
                </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">HOUSEHOLD SIZE</label>
                <input type="text" class="form-control" name="u_hos" id="inputEmail4"  value="" placeholder="what is your household size(Optional)" >
                </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">OCCUPATION</label>
                <input type="text" class="form-control" name="u_occupation" id="inputEmail4"  value="" placeholder="what is your occupation" required>
                </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">CONTACT</label>
                <input type="text" class="form-control" name="u_contact" id="inputEmail4"  value="" placeholder="Enter active contact" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="inputEmail4">PLACE OF WORK</label>
                    <input type="text" class="form-control" name="u_pow" id="inputEmail4"  value="" placeholder="which work do you do(Optional)" >
                    </div>
           
                    
                <div class="form-group col-md-4">
                    <label for="inputState">EDUCATION LEVEL</label>
                    <select name="u_education_level" id="inputState" class="form-control" required>
                      <option value="null" selected>Choose...</option>
                      <option value="primary">PRIMARY</option>
                      <option value="secondary">SECONDARY</option>
                      <option value="tertiary">TERTIARY</option>
                      <option value="others">OTHERS</option>
                      <option value="none">NONE</option>
                    </select>
                  </div>

        <div class="form-group col-md-3">
            <label for="inputState">RESIDENT STATE</label>
            <select name="u_resident_state" id="inputState" class="form-control" required>
              <option selected value="null">Choose...</option>
              <option value="lagos">lagos</option>
              <option value="abuja">abuja</option>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">RESIDENT CITY</label>
            <input type="text" class="form-control" name="u_resident_city" id="inputEmail4"  value="" placeholder="what city do you reside" required>
            </div>

            <div class="form-group col-md-2">
                <label for="inputState">A CIVIL SERVANT?</label>
                <select name="u_civil_servant" id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">RESIDENT LGA</label>
                <input type="text" class="form-control" name="u_resident_lga" id="inputEmail4"  value="" placeholder="which local government" required>
                </div>

                <div class="form-group col-md-4">
                <label for="inputEmail4">RESIDENT ADDRESS</label>
                <input type="text" class="form-control" name="u_home_address" id="inputEmail4"  value="" placeholder="Enter home address" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                    <div>
                        <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                    <div >
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            
        
       </div>
       <br><br>
       <?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'].'</p>';}?>
        <button type="submit" class="btn btn-primary">Register</button>
        
</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<!-- <a href="http://www.projectworlds/online-examination" target="_blank">About us</a> -->
</div>
<div class="col-md-3 box">

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

