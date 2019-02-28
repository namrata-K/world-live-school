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

    <title>Connect</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

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
*/

    .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #f4511e;
    }
    
    .bgimg {
    background-image: url('interaction.jpg');
    }

    .logo {
        color: #f4511e;
        font-size: 200px;
    }

    .container-fluid-new {
        text-align: center;
        padding: 60px 50px;
    }

    .container-fluid-foot {
        padding: 50px 40px;
    }

    .container-fluid-gap {
        padding: 10px 10px;
    }

    .bg-white {
        background-color: #FFFFFF;
    }

    .bg-grey {
        background-color: #f6f6f6;
    }

    .container-small {
        max-width: 100%;
    }

    @media (min-width: 768px) {
        .container-small {
            width: 375px;
        }
    }
    @media (min-width: 992px) {
        .container-small {
            width: 625px;
        }
    }
    @media (min-width: 1200px) {
        .container-small {
            width: 875px;
        }
    }

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
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

    .polaroid {
  box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 30px 0 rgba(0, 0, 0, 0.19);
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


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

#container
{
    margin: 0 auto;
    width: 550px;
}

textarea
{
    border: 2px solid #000;
    display: block;
    font: 14px Verdana, Arial, Helvetica;
    margin: 0 0 15px 0;
    overflow: auto;
    padding: 5px;
    resize: none;
    width: 500px;
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
                <h4>Hi <?php echo $name; ?>!</h4>
            </div>

            <center>
                <img class="stud-icon img-responsive" src="a.png">
            </center>
            <div>
                <center><i><p style="color: black;"><?php echo $uname; ?></p></center></i>
            </div>
             <div>
                <center><p style="color: black;"><?php echo $dob; ?></p></center>
            </div>
              <div>
                <center><p style="color: black;"><?php echo $qual; ?></p></center>
            </div>


            
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


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
                            <li class="nav-item">
                                <a class="nav-link" href="teacherprofile.php">Guidelines</a>
                            </li>
                            <li class="nav-item active">
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
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="urc" data-toggle="modal" data-target="#random_cmodal">Upload Random Course</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" name="ucc" data-toggle="modal" data-target="#class_cmodal">Upload Classroom Course</button>
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



            
            <div class="container container-small">
            <div class="row">
                <div class="col-sm-6">
                    <div class="polaroid">
                    <div class="card mb-4 text-white bg-dark">
                        <img class="card-img-top" src="sabolpreK.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Video Calling</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-light btn-sm">Interact with Teacher</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="polaroid">
                    <div class="card mb-4 text-white bg-dark">
                        <img class="card-img-top" src="childin.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Peer Discussion</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-light btn-sm">Interact with Students</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>


            <div class="container-fluid-new bg-white">
                <div class="row">
                <div class="col-sm-2">
                    <span class="glyphicon glyphicon-globe logo"></span>
                </div>
                <div class="col-sm-8">
                    <h2>Connect With Other People</h2>
                    <h4><strong>Peers or Teachers</strong> Our mission lorem ipsum..</h4>      
                    <p><strong>Interact with them</strong> Our vision Lorem ipsum..</p>
                </div>
                <div class="col-sm-2">
                </div>
                </div>
            </div>

            <div class="container-fluid-gap bg-grey">
                  <img src="interaction.jpeg" class="img-responsive" alt="Cinque Terre" width="1290" height="700"> 
            </div>

            <div class="container-fluid-new bg-white">
                <div id="container">
                    <p>Comment:</p>
                    <form name="form1">
                        <textarea rows="3" cols="40" name="text" placeholder="Enter your comment." onClick="select_area()"></textarea>
                        <input type="button" value="Submit" onClick="validate_text();">
                    </form>
                </div>
            </div>


            <footer class="container-fluid-foot text-center">
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
                <p>By <a href="https://www.w3schools.com">Technologues</a></p> 
            </footer>
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


    <script>
// When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
    }

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>

                <script>

var swear_words_arr=new Array("bloody","war","terror");

var swear_alert_arr=new Array;
var swear_alert_count=0;
function reset_alert_count()
{
 swear_alert_count=0;
}
function validate_text()
{
 reset_alert_count();
 var compare_text=document.form1.text.value;
 for(var i=0; i<swear_words_arr.length; i++)
 {
  for(var j=0; j<(compare_text.length); j++)
  {
   if(swear_words_arr[i]==compare_text.substring(j,(j+swear_words_arr[i].length)).toLowerCase())
   {
    swear_alert_arr[swear_alert_count]=compare_text.substring(j,(j+swear_words_arr[i].length));
    swear_alert_count++;
   }
  }
 }
 var alert_text="";
 for(var k=1; k<=swear_alert_count; k++)
 {
  alert_text+="\n" + "(" + k + ")  " + swear_alert_arr[k-1];
 }
 if(swear_alert_count>0)
 {
  alert("The message will not be sent!!!\nThe following illegal words were found:\n_______________________________\n" + alert_text + "\n_______________________________");
  document.form1.text.select();
 }
 else
 {
  document.form1.submit();
 }
}
function select_area()
{
 document.form1.text.select();
}
window.onload=reset_alert_count;
            </script>


</body>

</html>