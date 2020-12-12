<?php
include_once 'dbConnection.php';
session_start();
$password=$_SESSION['password'];
//crime records
      
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $location = $lat.' , '.$lng;
    
    $url = sprintf("https://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s", $lat, $lng);

    $content = file_get_contents($url); // get json content

    $metadata = json_decode($content, true); //json decoder
     $result = $metadata['results'][0];

        // save it in db for further use
        //echo $result['formatted_address'];
        $crime_type = $_POST['crime_type'];
        $description = $_POST['crime_description'];
    $crime_location = $location;
    $q3=mysqli_query($con,"INSERT INTO crime_records (type,location,description,created_at) VALUES  ('$crime_type','$crime_location','$description',NOW())");
  header("location:account.php?q=1&q7=Record Delievered1");
    
  
  
    if(count($metadata['results']) > 0) {
        // for format example look at url
        // https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452
       
        
    }
    else {
        // no results returned
       // header("location:account.php?q=1&q7=Record Not Delievered2");
    }
   // header("location:account.php?q=1&q7=Record Not Delievered3");
    

    
//     $crime_type = $_POST['crime_type'];
//     $crime_location = $city.$country;
//     $q3=mysqli_query($con,"INSERT INTO crime_records (type,location,created_at) VALUES  ('$crime_type','$crime_location',NOW())");
//   header("location:account.php?q=1&q7=Record Delievered");
 


?>

<html>
<body>
  <form action="account.php" method="post">
  <input type="text" name="time2" value="<?php echo $time; ?>">
  </form>
</body>
</html>