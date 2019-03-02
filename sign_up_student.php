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
	if(isset($_POST["submit"])){
		if(!empty($_POST["uname"]) && !empty($_POST["psw"])){
			$UserName=$_POST["uname"];
			$Password=$_POST["psw"];
			$Dob=$_POST["dob"];
			$Name=$_POST["name"];
			$Oname = $_POST["oname"];
			$house_no = rand(1,4);
			if($house_no == 1)
				$House = 'Kaveri';
			else if($house_no==2)
					$House = 'Krishna';
			else if($house_no==3)
					$House = 'Yamuna';
			else if($house_no==4)
					$House = 'Ganga';
	    	$user_check_query = "SELECT * FROM signup_student WHERE uname='$UserName'LIMIT 1";	
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
				$Query="INSERT INTO signup_student(uname, password, name, dob, house, oname) VALUES('$UserName', '$Password', '$Name', '$Dob', '$House', '$Oname')";
    			$Execute=mysqli_query($Connection, $Query);
				if($Execute){ ?>
	   				<script LANGUAGE='JavaScript'>
                     window.alert('Account created successfully. Please login to continue.');
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

