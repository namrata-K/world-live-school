<?php
function redirect_to($NewLocation){
    header("Location:".$NewLocation);
   	exit;
}
?>

<?php
	session_start();
 	$Connection = mysqli_connect('localhost', 'root', '');
 	$Selected = mysqli_select_db($Connection, 'live_school');
		if(!empty($_POST["uname"]) && !empty($_POST["psw"])){
			$UserName=$_POST["uname"];
			$Password=$_POST["psw"];
	    	$user_check_query = "SELECT * FROM signup_teacher WHERE uname='$UserName' AND password='$Password' LIMIT 1";	
			$result = mysqli_query($Connection, $user_check_query); 
    	    $user = mysqli_fetch_array($result);
        	if($user){ 
        		$id = $user['id']; 
        		$_SESSION["id"]=$id; 
        		redirect_to("teacherprofile.php");
        	}
        	else{
?>
	        	<script>
	        	alert("Incorrect credentials");
	        	</script>
<?php
          	}
		}
		else{ 
?>
    			<script>
	        	alert("Please enter all fields");
	        	</script>
<?php
			}
?>

