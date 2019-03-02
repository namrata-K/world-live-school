


<?php
    session_start();
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');
    $id=$_SESSION["id"];
    $user_check_query = "SELECT * FROM signup_student WHERE id='$id' LIMIT 1";  
    $Execute = mysqli_query($Connection, $user_check_query); 
    $DataRow = mysqli_fetch_array($Execute);
    if($DataRow){ 

        $name = $DataRow['name'];
        $uname = $DataRow['uname'];
        $dob = $DataRow['dob'];
    }

    $contentid = $_POST['id'];

                $user_check_query = "SELECT * FROM content WHERE content_id='$contentid' ";  
                $result = mysqli_query($Connection, $user_check_query); 
                 
while($row = mysqli_fetch_array($result)){
  $question = $row['question'];
 $option1 = $row['option1'];
 $option2 = $row['option2'];
 $option3 = $row['option3'];
 $answer = $row['correct'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> Answer the following questions
	<div>
		<?php echo $question;?>
	</div>
	<div>
		<form action="answer.php" method="post">
<input type="radio" name="radio" value="<?php echo $option1?>"><?php echo $option1?>
<input type="radio" name="radio" value="<?php echo $option2?>"><?php echo $option2?>
<input type="radio" name="radio" value="<?php echo $option3?>"><?php echo $option3?>
<input type="hidden" name="correct" id="correct" value="<?php echo $answer; ?>">
<input type="submit" name="submit" value="Submit" />
</form>

	</div>
</body>
</html>