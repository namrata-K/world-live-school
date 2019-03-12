<?php
  function redirect_to($NewLocation){
    header("Location:".$NewLocation);
    exit;
  }
  $Connection = mysqli_connect('localhost', 'root', '');
  $Selected = mysqli_select_db($Connection, 'live_school');
  session_start();  
  $c_name = $_POST["c_name"];
  $teacher_id=$_SESSION["id"];
  $desc = $_POST["desc"];
  $file = $_FILES["file"];
  $file_name = $file["name"];
  $query = "SELECT max(course_id) as mcid from course";
  $Execute = mysqli_query($Connection, $query);
  $DataRow = mysqli_fetch_array($Execute);
  $id = 1;
  $level = $_POST["level"];
  $subject = $_POST["subject"];
  $id = $id + $DataRow['mcid']; 
  $query = "INSERT INTO course (course_name,thumbnail,level,subject,teacher_id,rating,description, course_id) VALUES('$c_name', '$file_name', '$level', '$subject', '$teacher_id', 0 , '$desc', '$id')";
    $Execute = mysqli_query($Connection, $query);
    if($Execute)
            { move_uploaded_file($file["tmp_name"], $file["name"]);
              ?>    <script LANGUAGE='JavaScript'>
                     window.alert('Course created successfully. Your COURSE ID is:'+  <?php echo $id; ?>  );
                     window.location.href='teacherprofile.php';
                     </script>
                     <?php
          }
?>