<?php
    session_start();
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');
    $id=$_SESSION["id"];

	$answer = $_POST['radio'];
    $co_id = $_POST['course_id'];
    $cid=$_POST['id'];

	$user_check_query1 = "SELECT rating FROM course WHERE course_id='$co_id' LIMIT 1";  
    $Execute1 = mysqli_query($Connection, $user_check_query1); 
    $DataRow = mysqli_fetch_array($Execute1);
    if($DataRow){ 

        $rate = $DataRow['rating'];
  		$rate = $rate + $answer;
    }


	$user_check_query2 = "UPDATE course SET rating = '$rate' WHERE course_id = '$co_id'";  
    $Execute2 = mysqli_query($Connection, $user_check_query2); 

    $user_check_query3 = "UPDATE content SET rated = 1 WHERE content_id = '$cid'";  
    $Execute3 = mysqli_query($Connection, $user_check_query3); 
?>
	
    
					<script LANGUAGE='JavaScript'>
                     window.alert('Added! '  );
                     window.location.href='student.php';
                     </script>