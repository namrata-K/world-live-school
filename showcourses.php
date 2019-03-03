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

    $level ="";
    $subject="";

    if(isset($_POST["hindi1"])){
        $level = 1;
        $subject = "HINDI";
    }
    else if(isset($_POST["english1"])){
        $level = 1;
        $subject = "ENGLISH";
    }
    else if(isset($_POST["maths1"])){
        $level = 1;
        $subject = "MATHEMATICS";
    }
    else if(isset($_POST["science1"])){
        $level = 1;
        $subject = "SCIENCE";
    }
    else if(isset($_POST["sst1"])){
        $level = 1;
        $subject = "SOCIAL STUDIES";
    }
    else if(isset($_POST["hindi2"])){
        $level = 2;
        $subject = "HINDI";
    }
    else if(isset($_POST["english2"])){
        $level = 2;
        $subject = "ENGLISH";
    }
    else if(isset($_POST["maths2"])){
        $level = 2;
        $subject = "MATHEMATICS";
    }
    else if(isset($_POST["science2"])){
        $level = 2;
        $subject = "SCIENCE";
    }
    else if(isset($_POST["sst2"])){
        $level = 2;
        $subject = "SOCIAL STUDIES";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Student</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

        @media (min-width: 768px) {
      /* show 3 items */
      .carousel-inner .active,
      .carousel-inner .active + .carousel-item,
      .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
      }

      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
      }

      .carousel-inner .carousel-item-next,
      .carousel-inner .carousel-item-prev {
        position: relative;
        transform: translate3d(0, 0, 0);
      }

      .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;
        z-index: -1;
        display: block;
        visibility: visible;
      }

      /* left or forward direction */
      .active.carousel-item-left + .carousel-item-next.carousel-item-left,
      .carousel-item-next.carousel-item-left + .carousel-item,
      .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
      .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
      }

      /* farthest right hidden item must be abso position for animations */
      .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
      }

      /* right or prev direction */
      .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
      .carousel-item-prev.carousel-item-right + .carousel-item,
      .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
      .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
      }
    }

    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #ff8000;
      }

      /* Style the buttons that are used to open the tab content */
      .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
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

      .tabcontent {
          animation: fadeEffect 1s; /* Fading effect takes 1 second */
        }

        /* Go from zero to full opacity */
        @keyframes fadeEffect {
          from {opacity: 0;}
          to {opacity: 1;}
        }

</style>

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

        $(document).ready(function() {
          $("#myCarousel").on("slide.bs.carousel", function(e) {
            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 3;
            var totalItems = $(".carousel-item").length;

            if (idx >= totalItems - (itemsPerSlide - 1)) {
              var it = itemsPerSlide - (totalItems - idx);
              for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                  $(".carousel-item")
                    .eq(i)
                    .appendTo(".carousel-inner");
                } else {
                  $(".carousel-item")
                    .eq(0)
                    .appendTo($(this).find(".carousel-inner"));
                }
              }
            }
          });
        });

    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav style="background-color: #FF8000; border-color: #FF8000" id="sidebar">

            <div id="dismiss">
                <i style="background-color: #FF8000; border-color: #FF8000" class="fas fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#lv1menu" data-toggle="collapse" aria-expanded="false" style="background-color: #FF8000">Level 1</a>
                    <form action="showcourses.php" method="post">
                        <ul class="collapse list-unstyled" id="lv1menu" >
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="hindi1">Hindi</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="english1">English</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="maths1">Mathematics</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="science1">Science</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="sst1">Social Studies</button>
                            </li>
                        </ul>
                    </form>
                </li>

                <li class="active">
                    <a href="#lv2menu" data-toggle="collapse" aria-expanded="false" style="background-color: #FF8000">Level 2</a>
                    <form action="showcourses.php" method="post">
                        <ul class="collapse list-unstyled" id="lv2menu" style="background-color: #514f4f">
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="hindi2">Hindi</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="english2">English</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="maths2">Mathematics</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="science2">Science</button>
                            </li>
                            <li >
                                <button class="btn" style="background-color: #514f4f; color:white; width: 100%" name="sst2">Social Studies</button>
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button style="background-color: #FF8000; border-color: #FF8000" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Select Level</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <img class="img-responsive" src="ecolelogo.png" style="height: 10%; width: 10%">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="student.php">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="classroomText.php">My Classroom</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="connect.php">Connect</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="activitiesfinal.php">Activities</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

           
               <?php
                        $user_check_query = "SELECT * FROM course WHERE level='$level' AND subject='$subject'";  
                        $result = mysqli_query($Connection, $user_check_query); 
                    
                ?>       
                <table class="table table-striped table-hover">
                <?php 
                while($row = mysqli_fetch_array($result)){
                  $courseid = $row['course_id'];
                  $tnail = $row['thumbnail'];
                  $desc = $row['description'];
                  $coursename = $row['course_name'];
                 ?>
                <tr>
                <td style="vertical-align: middle;"><img style="width: 150px; height: 150px;" src="<?php echo $tnail; ?>"></td>
                <td><b><?php echo $coursename ?></b><br><?php echo $desc ?></td>
                <td>
                    <form action="xyz.php" method="post">
                            </div>
                                <button type="submit" name="submit" class="btn btn-info">Start Course</button> 
                                <input type="hidden" name="content-id" id="content-id" value="<?php echo $courseid; ?>">
                            </div>
                        </form>
                </td>
                </tr>
                <?php } ?>
                </table>
            </div>
        </div>
    <div class="overlay"></div>
</body>

</html>