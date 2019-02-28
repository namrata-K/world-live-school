<?php
function redirect_to($NewLocation){
    header("Location:".$NewLocation);
   	exit;
}
	session_start();
	$Connection = mysqli_connect('localhost', 'root', '');
 	$Selected = mysqli_select_db($Connection, 'live_school');

 		$name = $_POST["name"];
 		$email = $_POST["email"];
 		$contact = $_POST["contact"];
 		$child_id = $_SESSION["child_id"];
 		$Query = "INSERT INTO donate(name, email, contact, child_id) VALUES('$name', '$email', '$contact', '$child_id')";
    	$Execute1=mysqli_query($Connection, $Query);
    	$Query = "UPDATE signup_student SET donor = 1 where id='$child_id'";
    	$Execute2 = mysqli_query($Connection, $Query);
   
		if($Execute1 && $Execute2){
			redirect_to("payment.html");
		}
	
 	

?>