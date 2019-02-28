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

?>


<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Text')">Text</button>
  <button class="tablinks" onclick="openCity(event, 'Video')">Video</button>
  <button class="tablinks" onclick="openCity(event, 'Image')">Image</button>
</div>






<div id="Text" class="tabcontent">
       <?php
                $courseid = $_POST['content-id'];
                $user_check_query = "SELECT * FROM content WHERE course_id='$courseid' AND content_type='Document'";  
                $result = mysqli_query($Connection, $user_check_query); 
            
        ?>       
        <table class="table table-striped table-hover">
<?php 
while($row = mysqli_fetch_array($result)){
  $tnail = $row['tnail'];
  $desc = $row['description'];
  $content = $row['content_name'];
 ?>
<tr>
<td><img src="<?php echo $tnail; ?>"></td>
<td><?php echo $desc ?></td>
<td>
  <a target="_blank" rel="noopener noreferrer" href="<?php echo $content ?>" class="btn btn-info ">
          <span class="glyphicon glyphicon-eye-open"></span> View PDF
  </a>
</td>
<td>
  <form action="download.php" method="post" >
    <button class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> Download PDF</button>
    <input type="hidden" name="file" id="file" value="<?php echo $content ?>">
  </form>
</td>
<form action="listen.php" method="post" >
    <td><button class="btn btn-info"><span class="glyphicon glyphicon-volume-up"></span> Listen PDF</button>
    <input type="hidden" name="file" id="file" value="<?php echo $content ?>">
  </form>

</td>
</tr>
<?php } ?>
</table>
</div>






<div id="Video" class="tabcontent">
       <?php
                $courseid = $_POST['content-id'];
                $user_check_query = "SELECT * FROM content WHERE course_id='$courseid' AND content_type='Video'";  
                $result = mysqli_query($Connection, $user_check_query); 
            
        ?>       
        <table class="table table-striped table-hover">
<?php 
while($row = mysqli_fetch_array($result)){
  $tnail = $row['tnail'];
  $desc = $row['description'];
  $content = $row['content_name'];
 ?>
<tr>
<td><img src="<?php echo $tnail; ?>"></td>
<td><?php echo $desc ?></td>

</tr>
<?php } ?>
</table>
</div>






<div id="Image" class="tabcontent">
       <?php
                $courseid = $_POST['content-id'];
                $user_check_query = "SELECT * FROM content WHERE course_id='$courseid' AND content_type='Image'";  
                $result = mysqli_query($Connection, $user_check_query); 
            
        ?>       
        <table class="table table-striped table-hover">
<?php 
while($row = mysqli_fetch_array($result)){
  $tnail = $row['tnail'];
  $desc = $row['description'];
  $content = $row['content_name'];
 ?>
<tr>
<td><img src="<?php echo $content; ?>"></td>
<td><?php echo $desc ?></td>

<td>
  <form action="download.php" method="post" >
    <button class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> Download Image</button>
    <input type="hidden" name="file" id="file" value="<?php echo $content ?>">
  </form>
</td>
</tr>
<?php } ?>
</table>
</div>






<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 