<!-- function to redirect -->
<?php
function redirect_to($NewLocation){
    header("Location:".$NewLocation);
   	exit;
}
?>
<?php
 	$Connection = mysqli_connect('localhost', 'root', '');
 	$Selected = mysqli_select_db($Connection, 'live_school');
 	session_start();
		if(!empty($_POST["uname"]) && !empty($_POST["psw"])){
			$UserName=$_POST["uname"];
			$Password=$_POST["psw"];
	    	$user_check_query = "SELECT id FROM signup_student WHERE uname='$UserName' AND password='$Password' LIMIT 1";	
			$Execute = mysqli_query($Connection, $user_check_query); 
    	    $id = 0;
    	    $DataRow = mysqli_fetch_array($Execute);
        	if($DataRow){ 
        		//fetch id of student in a php variable and then store it in session id
        		$id = $DataRow['id']; 
        		$_SESSION["id"]=$id;
        		redirect_to("student.php");
        	}
        	else{
?>
	        	<script>
	        	alert("Incorrect credentials");
	        	</script>
<?php
          	}
	} 
?>

