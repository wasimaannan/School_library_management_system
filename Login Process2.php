<?php
// first of all, we need to connect to the database
require_once('PhpConnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['uid']) && isset($_POST['spass'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['uid'];
	$p = $_POST['spass'];
	//$sql = "SELECT * FROM Authentication WHERE User_ID = '$u' AND password = '$p'";
	$sql="SELECT * FROM Member WHERE User_ID = '$u' AND password = '$p'";
	

	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if (mysqli_num_rows($result) != 0) {
        // Fetch the user's data
        $user_data = mysqli_fetch_array($result);
        
        // Store user ID in a session variable
        session_start();
        $_SESSION['user_id'] = $user_data['User_ID'];

        // Redirect to the user profile page
        header("Location: profile3.php");
        exit;
	}
	else{
		echo "Please Sign Up";
		//header("Location: index.php");
	}
	
	
	}


?>
