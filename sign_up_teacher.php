<?php
function redirect_to($NewLocation){
    header("Location:".$NewLocation);
   	exit;
}
?>

<?php
 	$Connection = mysqli_connect('localhost', 'root', '');
 	$Selected = mysqli_select_db($Connection, 'live_school');
	if(isset($_POST["submit"])){
		if(!empty($_POST["uname"]) && !empty($_POST["psw"])){
			$UserName=$_POST["uname"];
			$Password=$_POST["psw"];
			$Dob=$_POST["dob"];
			$Email=$_POST["email"];
			$Name=$_POST["name"];
			$Qualification=$_POST["qual"];
			$Occupation=$_POST["occ"];
	    	$user_check_query = "SELECT * FROM signup_teacher WHERE uname='$UserName'LIMIT 1";	
			$result = mysqli_query($Connection, $user_check_query); 
    	    $user = mysqli_fetch_assoc($result);
        	if($user){ 
?>
	        	<script>
	        	alert("User already exists");
	        	</script>
<?php
        	}
        	else{
				$Query="INSERT INTO signup_teacher(uname, password, name, dob, email, qual, occ) VALUES('$UserName', '$Password', '$Name', '$Dob', '$Email', '$Qualification', 'Occupation')";
    			$Execute=mysqli_query($Connection, $Query);
				if($Execute){ ?>
	   				<script LANGUAGE='JavaScript'>
                     window.alert('Application submitted successfully. Please wait for our email to know if you are se;ected to upload the content.');
                     window.location.href='home.php';
                     </script>
                    <?php
            	}
            	else
            	{
            		echo("not successful");
            	}
          	}
		}
		else{ 
?>
    			<script>
	        	alert("Please enter all fields");
	        	</script>
<?php
		}
	} 
?>

