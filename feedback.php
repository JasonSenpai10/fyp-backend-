<?php 

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');




  $db = mysqli_connect('localhost','root', '', 'fyp');
	if (!$db) {
		echo "Database connection failed";  
  }

  if($_SERVER['REQUEST_METHOD'] == "POST") {  
  	$username = $_POST['username'];
  	$email = $_POST['email'];
    $message = $_POST['feedback'];
    

   // $sql = "SELECT * FROM postjob WHERE company = '".$company."' || designation = '".$designation."' || ";

   // $result = mysqli_query($db, $sql);
   // $count = mysqli_num_rows($result);
    
  //  if ($count >= 1){
   // 	echo json_encode("Error");
   // } else {
    	 $insert = "INSERT INTO feedback(username,email,feedback) VALUES ('".$username."','".$email."','".$message."')";

    	$query = mysqli_query($db,$insert);

      if($query) {

        echo json_encode("Success");
      } else {
        echo json_encode("Error");
    //  }
    }
  //} else {
  //  echo json_encode("Error");
  }