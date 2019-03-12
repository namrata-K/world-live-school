<?php
  $Connection = mysqli_connect('localhost', 'root', '');
  $Selected = mysqli_select_db($Connection, 'live_school');
  session_start();  
  $cid=$_POST["cid"];
  $t_name = $_POST["t_name"];
  $desc = $_POST["desc"];
  $c_type=$_POST["c_type"];
  $file = $_FILES["file"];
  $ques1=$_POST["ques1"];
  $option11=$_POST["opt11"];
  $option12=$_POST["opt12"];
  $option13=$_POST["opt13"];
  $correct1=$_POST["correct1"];
  $tag1=$_POST["tag1"];
  $tag2=$_POST["tag2"];
  $tag3=$_POST["tag3"];
  $tag4=$_POST["tag4"];
  $tag5=$_POST["tag5"];
  $s_no=$_POST["s_no"];
  $file_name = $file["name"];
  $query = "SELECT * from course where course_id='$cid'  limit 1";
  $Execute = mysqli_query($Connection, $query); 
  $DataRow = mysqli_fetch_assoc($Execute); 
  if($DataRow)
      {
      	move_uploaded_file($file["tmp_name"], $file["name"]);
      	$query = "INSERT INTO content (tag1,tag2,tag3,tag4,tag5,topic,course_id,content_name,description,content_type,s_no,question,option1,option2,option3,correct) VALUES('$tag1', '$tag2', '$tag3', '$tag4', '$tag5', '$t_name', '$cid', '$file_name', '$desc', '$c_type', '$s_no', '$ques1', '$option11', '$option12', '$option13', '$correct1')";
      	$Execute = mysqli_query($Connection, $query);
      	if($Execute)
      			{?>
      				<script LANGUAGE='JavaScript'>
                     window.alert('Content uploaded successfully.');
                     window.location.href='teacherprofile.php';
                     </script>
      			<?php }

      }
  else
  	{?>
  		<script LANGUAGE='JavaScript'>
                     window.alert('This course does not exist. Please try uploading a new course.');
                     window.location.href='teacherprofile.php';
                     </script>
  		
  <?php 
  	}
    
?>