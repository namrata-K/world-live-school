<?php
    session_start();
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');
    $id=$_SESSION["id"];
    $user_check_query = "SELECT * FROM signup_teacher WHERE id='$id' LIMIT 1";  
    $Execute = mysqli_query($Connection, $user_check_query); 
    $DataRow = mysqli_fetch_array($Execute);
    if($DataRow){ 

        $name = $DataRow['name'];
        $uname = $DataRow['uname'];
        $dob = $DataRow['dob']; 
        $qual = $DataRow['qual'];
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Teacher</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style type="text/css">
        /*
    DEMO STYLE
*/  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
    }

    input[type="button"]
{
    background-color: #fff;
    background-image: none;
    border: 1px solid #000;
    border-radius: 8px;
    color: #000;
    display: table;
    font-size: 16px;
    margin: 0 auto;
    padding: 5px 8px;
    width: 175px;
}

input[type="button"]:hover
{
    background-color: #666;
    background-image: none;
    color: #fff;
    display: table;
    font-size: 16px;
}
    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #FF8000;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */

    #sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: -250px;
        height: 100vh;
        z-index: 999;
        background: #7386D5;
        color: #fff;
        transition: all 0.3s;
        overflow-y: scroll;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
    }

    #sidebar.active {
        left: 0;
    }

    #dismiss {
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        background: #FF8000;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    #dismiss:hover {
        background: #fff;
        color: #7386D5;
    }

    .overlay {
        display: none;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 998;
        opacity: 0;
        transition: all 0.5s ease-in-out;
    }
    .overlay.active {
        display: block;
        opacity: 1;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #6d7fcc;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #6d7fcc;
    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #6d7fcc;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #7386D5;
    }

    a.article,
    a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }

    /* ---------------------------------------------------
        CONTENT STYLE
    ----------------------------------------------------- */

    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
        position: absolute;
        top: 0;
        right: 0;
    }

    .stud-icon {
    	width: 90%;
    	height : 90%;
    }

    .card {
    	height: 50%
    	width: 50%;
    }

    .card-text {
    	line-height:100%;
    	font-size: 70%;
    }

    .card-title {
    	line-height:100%;
    	font-size: 70%;
    }
    </style>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav style="background-color: #FF8000; border-color: #FF8000" id="sidebar">

            <div id="dismiss">
                <i style="background-color: #FF8000; border-color: #FF8000" class="fas fa-arrow-left"></i>
            </div>

            <div style="background-color: #FF8000; border-color: #FF8000" class="sidebar-header">
                <h4>Hi<br> <?php echo $name; ?>!</h4>
            </div>

            <center>
            	<img class="stud-icon img-responsive" src="teachericon.png">
            </center>

             <div>
                <center><i><p style="color: black;"><?php echo $uname; ?></p></center></i>
            </div>
            <div>
                <center><p style="color: black;"><?php echo $qual; ?></p></center>
            </div>
             <div>
                <center><p style="color: black;"><?php echo $dob; ?></p></center>
            </div>
           

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button style="background-color: #FF8000; border-color: #FF8000" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Teacher Profile</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <img class="img-responsive" src="ecolelogo.png" style="height: 10%; width: 10%">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="teacherprofile.php">Guidelines</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="connect_teacher.php">Connect</a>
                            </li>
                             <li class="nav-item">
                               <button type="button"  style="background-color: #FF8000;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Upload Content
                               </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            
<!-- This is the code for two options modal-->
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">       
        <!-- Modal body -->
        <div class="modal-body">
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="urc" data-toggle="modal" data-target="#random_cmodal">Random Course</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="ucc" data-toggle="modal" data-target="#class_cmodal">Classroom Course</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="ucc" data-toggle="modal" data-target="#bmodal">Blog</button>
        </div>
      </div>
    </div>
  </div>
<!-- This is the end of code for modal-->

<!-- modal for random choice course -->        
<div class="modal fade" id="random_cmodal">
    <div class="modal-dialog">
      <div class="modal-content">       
        <!-- Modal body -->
        <div class="modal-body">
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="urc" data-toggle="modal" data-target="#random_emodal">Upload in An existing Course</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="ucc"  data-toggle="modal" data-target="#random_nmodal">Upload A new Course</button>
        </div>
      </div>
    </div>
  </div>
<!-- This is the end of code for modal-->

<!-- modal for classroom choice course -->        
<div class="modal fade" id="class_cmodal">
    <div class="modal-dialog">
      <div class="modal-content">       
        <!-- Modal body -->
        <div class="modal-body">
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="urc"  data-toggle="modal" data-target="#class_emodal">Upload in An existing Course</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="ucc"  data-toggle="modal" data-target="#class_nmodal">Upload A new Course</button>
        </div>
      </div>
    </div>
  </div>
<!-- This is the end of code for modal-->


<!-- modal for random existing course -->
 <div class="modal fade" id="random_emodal" style="height: 100%;overflow-y: auto;">
    <div class="modal-dialog" >
      <div class="modal-content" >
        <!-- Modal body -->
        <div class="modal-body">
         <form action="existing_course.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id" style="color: black;">Course ID</label>
                <input type="number" class="form-control" name ="cid" id="cid" aria-describedby="name" placeholder="Enter course ID">
            </div>
            <div class="form-group">
                <label for="topic" style="color: black;">Topic name</label>
                <input type="text" class="form-control" id="t_name" name="t_name" aria-describedby="name" placeholder="Enter topic name">
            </div>
            <div class="form-group">
                <label for="sequence" style="color: black;">Sequence number</label>
                <input type="number" class="form-control" id="s_no" name="s_no" aria-describedby="name" placeholder="Enter sequence number">
            </div>
            <div class="form-group">
                <label for="description" style="color: black;">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" aria-describedby="name" placeholder="Describe your content">
            </div>
            <div class="form-group">
            <label for="contentType">Content type</label>
            <select class="form-control" id="c_type" name="c_type">
              <option>Document</option>
              <option>Image</option>
              <option>Video</option>
            </select>
            </div>
            <div class="form-group">
                <label for="file" style="color: black;">Upload file</label>
                <input type="file" class="form-control" name ="file" id="file" aria-describedby="name" placeholder="Upload file here">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Question 1</label>
                <input type="text" class="form-control" name="ques1" id="ques1" aria-describedby="name" placeholder="Enter question 1 for the test">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Option 1</label>
                <input type="text" class="form-control" id="opt11" name="opt11" aria-describedby="name" placeholder="Enter option 1">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Option 2</label>
                <input type="text" class="form-control" id="opt12" name="opt12" aria-describedby="name" placeholder="Enter option 2">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Option 3</label>
                <input type="text" class="form-control" id="opt13" name="opt13" aria-describedby="name" placeholder="Enter option 3">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Correct Answer</label>
                <input type="text" class="form-control" id="correct1" name="correct1" aria-describedby="name" placeholder="Enter the correct answer">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 1</label>
                <input type="text" class="form-control" id="tag1" name="tag1" aria-describedby="name" placeholder="Enter tag 1">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 2</label>
                <input type="text" class="form-control" id="tag2" name="tag2" aria-describedby="name" placeholder="Enter tag 2">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 3</label>
                <input type="text" class="form-control" id="tag3" name="tag3" aria-describedby="name" placeholder="Enter tag 3">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 4</label>
                <input type="text" class="form-control" id="tag4" name="tag4" aria-describedby="name" placeholder="Enter tag 4">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 5</label>
                <input type="text" class="form-control" id="tag5" name="tag5" aria-describedby="name" placeholder="Enter tag 5">
            </div>

        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" name="random_course">Upload now</button> 
      </form>
        </div>
      </div>
    </div>
  </div>
<!-- end of modal -->

<!-- modal for random new course -->
 <div class="modal fade" id="random_nmodal" style="height: 100%;overflow-y: auto;">
    <div class="modal-dialog" >
      <div class="modal-content" >
        <!-- Modal body -->
        <div class="modal-body">
         <form action="random_new_course.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="courseName" style="color: black;">Course name</label>
                <input type="text" class="form-control" id="c_name" name="c_name" aria-describedby="name" placeholder="Enter Course name">
            </div>
            <div class="form-group">
                <label for="description" style="color: black;">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" aria-describedby="name" placeholder="Describe your content">
            </div>
            <div class="form-group">
                <label for="file" style="color: black;">Upload Thumbnail</label>
                <input type="file" class="form-control" name ="file" id="file" aria-describedby="name" placeholder="Upload thumbnail here">
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" name="random_course">Upload now</button> 
      </form>
        </div>
      </div>
    </div>
  </div>
<!-- end of modal -->


 <div class="modal fade" id="bmodal">
    <div class="modal-dialog">
      <div class="modal-content">       
        <!-- Modal body -->
        <div class="modal-body">
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="urc" data-toggle="modal" data-target="#typeblog">Type the blog content</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="ucc" data-toggle="modal" data-target="#speakblog">Speak your content instead</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="typeblog" style="height: 100%;overflow-y: auto;">
    <div class="modal-dialog" >
      <div class="modal-content" >
        <!-- Modal body -->
        <div class="modal-body">
         <form name="form1" action="blog.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="courseID" style="color: black;">Course ID</label>
                <input type="number" class="form-control" id="c_id" name="c_id" aria-describedby="name" placeholder="Enter Course ID">
            </div>
            <div class="form-group">
                <label for="title" style="color: black;">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="name" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description" style="color: black;">Content</label>
                <textarea rows="7" class="form-control" id="desc" name="desc" aria-describedby="name" placeholder="Write your content here" onClick="select_area()"></textarea>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
    <button type="submit" class="btn btn-danger" name="random_course" >Upload now</button> 
      
      </form>
        </div>
      </div>
    </div>
  </div>
<!-- end of modal -->

<div class="modal fade" id="speakblog">
    <div class="modal-dialog">
      <div class="modal-content">       
        <!-- Modal body -->
        <div class="modal-body">
            <form id="labnol" method="post" action="speechtotext.php">
              <div class="speech">
                <input type="text" name="q" id="transcript" placeholder="Speak" />
                <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
              </div>
            </form>
            <script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();
      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }
   }
  }
</script>
        </div>
      </div>
    </div>
  </div>


<!-- modal for classroom existing course -->
 <div class="modal fade" id="class_emodal" style="height: 100%;overflow-y: auto;">
    <div class="modal-dialog" >
      <div class="modal-content" >
        <!-- Modal body -->
        <div class="modal-body">
            <div class='content' style="color: blue;">
                    <a href="curriculum.pdf"><u> <i>CLICK HERE TO CHECK CURRICULUM</u></i></a>
            </div>
         <form action="existing_course.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id" style="color: black;">Course ID</label>
                <input type="number" class="form-control" name ="cid" id="cid" aria-describedby="name" placeholder="Enter course ID">
            </div>
            <div class="form-group">
                <label for="topic" style="color: black;">Topic name</label>
                <input type="text" class="form-control" id="t_name" name="t_name" aria-describedby="name" placeholder="Enter topic name">
            </div>
            <div class="form-group">
                <label for="sequence" style="color: black;">Sequence number</label>
                <input type="number" class="form-control" id="s_no" name="s_no" aria-describedby="name" placeholder="Enter sequence number">
            </div>
            <div class="form-group">
                <label for="description" style="color: black;">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" aria-describedby="name" placeholder="Describe your content">
            </div>
            <div class="form-group">
            <label for="contentType">Content type</label>
            <select class="form-control" id="c_type" name="c_type">
              <option>Document</option>
              <option>Image</option>
              <option>Video</option>
            </select>
            </div>
            <div class="form-group">
                <label for="file" style="color: black;">Upload file</label>
                <input type="file" class="form-control" name ="file" id="file" aria-describedby="name" placeholder="Upload file here">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 1</label>
                <input type="text" class="form-control" id="tag1" aria-describedby="name" placeholder="Enter tag 1">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 2</label>
                <input type="text" class="form-control" id="tag2" aria-describedby="name" placeholder="Enter tag 2">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 3</label>
                <input type="text" class="form-control" id="tag3" aria-describedby="name" placeholder="Enter tag 3">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 4</label>
                <input type="text" class="form-control" id="tag4" aria-describedby="name" placeholder="Enter tag 4">
            </div>
            <div class="form-group">
                <label for="tag" style="color: black;">Tag 5</label>
                <input type="text" class="form-control" id="tag5" aria-describedby="name" placeholder="Enter tag 5">
            </div>

        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" name="random_course">Upload now</button> 
      </form>
        </div>
      </div>
    </div>
  </div>
<!-- end of modal -->

<!-- modal for classroom new course -->
 <div class="modal fade" id="class_nmodal" style="height: 100%;overflow-y: auto;">
    <div class="modal-dialog" >
      <div class="modal-content" >
        <!-- Modal body -->
        <div class="modal-body">
             <div class='content' style="color: blue;">
                    <a href="curriculum.pdf"><u> <i>CLICK HERE TO CHECK CURRICULUM</u></i></a>
            </div>
         <form action="classroom_new_course.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="courseName" style="color: black;">Course name</label>
                <input type="text" class="form-control" id="c_name" name="c_name" aria-describedby="name" placeholder="Enter Course name">
            </div>
            <div class="form-group">
                <label for="description" style="color: black;">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" aria-describedby="name" placeholder="Describe your content">
            </div>
            <div class="form-group">
                <label for="level" style="color: black;">Level</label>
                <input type="number" class="form-control" id="level" name="level" aria-describedby="name" placeholder="Enter level">
            </div>
            <div class="form-group">
            <label for="subject">Subject</label>
            <select class="form-control" id="subject" name="subject">
              <option>MATHEMATICS</option>
              <option>SCIENCE</option>
              <option>HINDI</option>
              <option>ENGLISH</option>
              <option>ACCOUNTS</option>
            </select>
            </div>
            <div class="form-group">
                <label for="file" style="color: black;">Upload Thumbnail</label>
                <input type="file" class="form-control" name ="file" id="file" aria-describedby="name" placeholder="Upload thumbnail here">
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" name="random_course">Upload now</button> 
      </form>
        </div>
      </div>
    </div>
  </div>
<!-- end of modal -->
        <center><h2><B> GUIDELINES FOR TEACHERS </h2></center></B>
    <h1><font size="5" color="orange"> For connect </font></h1>

      <p> You can connect with students via two means: 
      <li> Video calling lets you talk to one student at a time: anytime, anwhere in the world for the course content you choose to upload.</li>
      <li>Peer discussion where you can interact with a large number of students & teachers, discussing doubts, questions and requests publically.  </li></p>
    <center><img src="Screenshot (6).png" height="30%" width="30%"/></center>

     <h1><font size="5" color="orange"> For upload content </font></h1>
     <p> You can upload content in either of the two ways:
    <li> Upload random course: Where you upload any course of your choice based on your availabity, knowledge and interest, in any of the following form: images, vidoes, documents or write your own blog. </li>
    <li>Upload a crash course: Based on the curriculum provided <a href="curriculum.pdf">(click here for curriculum)</a>, you can either continue uploading your course or start a new one.</li>
    <p> DISCLAIMER: It is advised that you complete your current classroom course before moving on to the next one</p>
    <center><img src="Screenshot (9).png" height="30%" width="30%"/></center>

    <h1><font size="5" color="orange"> Additional Information</font></h1>
    <li>Along with uplaoding content, you are supposed to upload a 5 question test based on that particular topic to score the students and keep a track of their understanding of the topic  </li>
    <li> The content can be uploaded only in the following formats: images, vidoes, documents or blogs.</li>
    <li> If you take the classroom course, you will get a periodic reminder on your registered email to upload the next series of content</li> 


        </div>
    </div>


    <div class="overlay"></div>


  

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>
<script>
    Weglot.setup({

      api_key: 'wg_02d8b91a1274c5774c7dc11ae2db765b8',
      
      originalLanguage: 'en',

      destinationLanguages : 'fr,es,hi',

      styleOpt : { fullname: true , withname: true , is_dropdown: true , classF: "wg-flags flag-3" },
     });

</script>
</html>