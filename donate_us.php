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
 		$child_id = 0;
 		$Query = "INSERT INTO donate(name, email, contact, child_id) VALUES('$name', '$email', '$contact', '$child_id')";
    	$Execute=mysqli_query($Connection, $Query);
  
   
		if($Execute){
			redirect_to("payment.html");
		}
	
 	

?>