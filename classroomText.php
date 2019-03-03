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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="styles.css"/>
        <script>
                function myFunction() {
                  var x = document.getElementById("myTopnav");
                     if (x.className === "topnav") {
                       x.className += " responsive";
                        } 
                     else {
                        x.className = "topnav";
                        }
                    }
        </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student</title>

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

* {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
            }

            body {
                overflow-y: hidden;
            }

            a {
                color: aliceblue;
                text-decoration: none;
            }

            ul {
                list-style-type: none;
            }



            @media only screen and (max-width: 600px) {
                .container {
                    flex: column wrap;
                    justify-content: space-around;
                }
                .container__nav-icon {
                    font-size: 22px;
                }
                .container__sidebar-nav {
                    flex-flow: row wrap;
                    justify-content: space-around;
                    align-content: stretch;
                    padding: 0;
                }
                
                .container__nav-link {
                    padding: 0;
                }
                .container__sidebar-nav:hover .container__nav-link-name {
                    visibility: hidden;
                    opacity: 0;
                }
                
            }

            .topnav {
              overflow: hidden;
              background-color: #333;
            }

            .topnav a {
              float: left;
              width: 20%;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            .topnav a:hover {
              background-color: #ddd;
              color: black;
            }

            
            .topnav .icon {
              display: none;
            }

            @media screen and (max-width: 600px) {
              .topnav a:not(:first-child) {display: none;}
              .topnav a.icon {
                float: right;
                display: block;
              }
            }

            @media screen and (max-width: 600px) {
              .topnav.responsive {position: relative;}
              .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
              }
              .topnav.responsive a {
                float: left;
                display: block;
                text-align: left;
              }
            }


            .wrap-whole{
              display:flex;
              flex-flow:row nowrap;
              justify-content:space-between;
               overflow-y: scroll;
              height:100%;
            }

            .main-header {
                background-color: #A9CCE3;
                padding: 10px;
                box-shadow: 1px 2px 3px #ccc;
                color: white;
                display: flex;
                flex-flow: row nowrap;
            }

            .main-header-content {
                flex: 1 1 auto;
            }

            .topnav-container {
                padding: 10px;
                box-shadow: 1px 2px 3px #ccc;
                color: white;
                display: flex;
                flex-flow: row nowrap;
                width: 100%;
            }

            .vertical-nav-bar {
                display: flex;
                flex: 0 0 450px;
                flex-flow: column nowrap;
                text-align: center;
                z-index: 30;
                 
                background: #061e2a;
                background: linear-gradient(to right,#fefefe, 99%, #8c8c8d);
                padding: 1rem 0 0 0;
                justify-content: flex-start;
            }

            .menu-container {
                display: flex;
                flex-flow: column wrap;
                justify-content: space-between;
            }
            .main-nav-link {
                transition: opacity .2s, visibility .2s;
                flex: 1 1 auto;
                align-self: center;
                display: flex;
                position: relative;
            }
             .dropbtn {
  background-color: white; /* Green */
  border: 1;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  display: block;
  width: 82%;


  margin: 0.5%;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: #FF8000 ; 
  color: black; 
  border: 2px solid #FF8000;
}

.button1:hover {
  background-color: black;
  color: black;
}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: black;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}

            .main-nav-link a {
                font-family: "Whitney Cond A", "Whitney Cond B", "Lato", "Lucida Grande", "Lucida Sans Unicode", Tahoma, Sans-Serif;
                font-weight: 500;
                font-size: 0.66rem;
                letter-spacing: 0.04rem;
                color: #03A9F4;
                padding: 0.75rem 0.5rem;
                text-transform: uppercase;
                
            }

            .main-nav-icon {
                font-size: 50px;
                padding: 5px;
            }


h1 {
  text-shadow: 5px 2px grey;

}
h3 {
  text-shadow: 5px 2px #FF8000;

}
h2{

font-size:25px;
color:black ;

margin-top: 5%;

}
.b {
  background-color:#00BFFF; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  height: 65px;
  width: 200px;
}

.b1 {border-radius: 4px;}
            .vertical-nav-bar:hover .main-nav-link {
                color: yellow;
            }

            .container__main {
                flex: 1 1 600px;
                width: 20%;
                height: 100%;
            }

            .container__header {
                text-align: center;
                font-size: 30px;
                
            }

            .container__content {
                margin: 30px 20px 10px 20px;
            }

            p {
                font-size: 24px;
                line-height: 1.4;
                margin-bottom: 20px;
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
    .vertical-nav-bar:hover .main-nav-link {
                color: yellow;
            }

            .container__main {
                flex: 1 1 600px;
                overflow-y: auto;
                height: 100%;
            }

            .container__header {
                text-align: center;
                font-size: 30px;
                
            }

            .container__content {
                margin: 30px 20px 10px 20px;
            }

            p {
                font-size: 24px;
                line-height: 1.4;
                margin-bottom: 20px;
            }
            .main-nav-link a {
                font-family: "Whitney Cond A", "Whitney Cond B", "Lato", "Lucida Grande", "Lucida Sans Unicode", Tahoma, Sans-Serif;
                font-weight: 500;
                font-size: 0.66rem;
                letter-spacing: 0.04rem;
                color: #03A9F4;
                padding: 0.75rem 0.5rem;
                text-transform: uppercase;
                
            }

            .activee {
              background-color: #FF8000;
              color: white;
            }

            .main-nav-icon {
                font-size: 50px;
                padding: 5px;
            }
            * {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
            }

            body {
                overflow-y: hidden;
            }

            a {
                color: aliceblue;
                text-decoration: none;
            }

            ul {
                list-style-type: none;
            }



            @media only screen and (max-width: 600px) {
                .container {
                    flex: column wrap;
                    justify-content: space-around;
                }
                .container__nav-icon {
                    font-size: 22px;
                }
                .container__sidebar-nav {
                    flex-flow: row wrap;
                    justify-content: space-around;
                    align-content: stretch;
                    padding: 0;
                }
                
                .container__nav-link {
                    padding: 0;
                }
                .container__sidebar-nav:hover .container__nav-link-name {
                    visibility: hidden;
                    opacity: 0;
                }
                
            }

            .topnav {
              overflow: hidden;
              background-color: #333;
            }

            .topnav a {
              float: left;
              width: 20%;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            .topnav a:hover {
              background-color: #ddd;
              color: black;
            }

            
            .topnav .icon {
              display: none;
            }

            @media screen and (max-width: 600px) {
              .topnav a:not(:first-child) {display: none;}
              .topnav a.icon {
                float: right;
                display: block;
              }
            }
            h1 {
              text-shadow: 5px 2px grey;

            }
            @media screen and (max-width: 600px) {
              .topnav.responsive {position: relative;}
              .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
              }
              .topnav.responsive a {
                float: left;
                display: block;
                text-align: left;
              }
            }


            .wrap-whole{
              display:flex;
              flex-flow:row nowrap;

              justify-content:space-between;
              height:100vh;
            }

            .main-header {
                background-color: #A9CCE3;
                padding: 10px;
                box-shadow: 1px 2px 3px #ccc;
                color: white;
                display: flex;
                flex-flow: row nowrap;
            }

            .main-header-content {
                flex: 1 1 auto;
            }

            .topnav-container {
                padding: 10px;
                box-shadow: 1px 2px 3px #ccc;
                color: white;
                display: flex;
                flex-flow: row nowrap;
                width: 100%;
            }

            .vertical-nav-bar {
                display: flex;
                flex: 0 0 250px;
                flex-flow: column nowrap;
                text-align: center;
                z-index: 30;
                background: #061e2a;
                background: linear-gradient(to right,#fefefe, 99%, #8c8c8d);
                padding: 1rem 0 0 0;
                justify-content: flex-start;
            }

            .menu-container {
                display: flex;
                flex-flow: column wrap;
                justify-content: space-between;
            }
            .main-nav-link {
                transition: opacity .2s, visibility .2s;
                flex: 1 1 auto;
                align-self: center;
                display: flex;
                position: relative;
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

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color: #FF8000; border-color: #FF8000">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
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
                        <span>SELECT LEVEL</span>
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
                                <a class="nav-link active" href="classroomText.php">My Classroom</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link " href="connect.php">Connect</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="activitiesfinal.php">Activities</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
                <center><h2><B> GUIDELINES FOR STUDENTS </h2></center></B>
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