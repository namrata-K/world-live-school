<?php
  $Connection = mysqli_connect('localhost', 'root', '');
  $Selected = mysqli_select_db($Connection, 'live_school');
  session_start();
  $c_id = $_POST["c_id"];
  $desc = $_POST["desc"];
  $title = $_POST["title"];
  $check = "SELECT * from blog where course_id = '$c_id' ";
  $Execute = mysqli_query($Connection, $check);
  $DataRow = mysqli_fetch_array($Execute);
  if($DataRow)
  {
  	$query = "UPDATE blog SET description = '$desc' where course_id = '$c_id'";
  }
  else
  {
  	$query= "INSERT INTO blog(course_id, title, description) VALUES('$c_id', '$title','$desc')";
  }
  $Execute = mysqli_query($Connection, $query);
  if($Execute)
  {
  	?>    <script LANGUAGE='JavaScript'>
                     window.alert('Blog updated successfully.');
                     window.location.href='teacherprofile.php';
                     </script>
                     <?php
  }
  
?>