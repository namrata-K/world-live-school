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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Connect</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    
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


            
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button style="background-color: #FF8000; border-color: #FF8000" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Student Profile</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <img class="img-responsive" src="ecolelogo.png" style="height: 10%; width: 10%">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="student.php">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="classroomText.php">My Classroom</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link active" href="connect.php">Connect</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="activitiesfinal.php">Activities</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            
            <div class="container container-small">
            <div class="row">
                <div class="col-sm-6">
                    <div class="polaroid">
                    <div class="card mb-4 text-white bg-dark">
                        <img class="card-img-top" src="sabolpreK.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Video Calling</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="samplevideo1.html" class="btn btn-outline-light btn-sm">Interact with Teacher</a>
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

            <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type ="text" name="comment_link" id="comment_link" class="form-control" placeholder="Enter supported links, if any" />
    </div>

    <!-- <div class="form-group">
        <label for="file" style="color: black;">Upload Video</label>
        <input type="file" class="form-control" name ="file" id="file" aria-describedby="name" />
    </div> -->
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
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

                


</body>
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

</html>