<?php
    session_start();
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');
    $id=$_SESSION["id"];

	$answer = $_POST['radio'];
	$correct = $_POST['correct'];

	$user_check_query1 = "SELECT score FROM signup_student WHERE id='$id' LIMIT 1";  
    $Execute1 = mysqli_query($Connection, $user_check_query1); 
    $DataRow = mysqli_fetch_array($Execute1);
    if($DataRow){ 

        $score = $DataRow['score'];
  		$score = $score + 1;
    }


	$user_check_query2 = "UPDATE signup_student SET score = '$score' WHERE id = '$id'";  
    $Execute2 = mysqli_query($Connection, $user_check_query2); 
?>
	
    
					<script LANGUAGE='JavaScript'>
                     window.alert('Your new score is: '+  <?php echo $score; ?>  );
                     window.location.href='student.php';
                     </script>