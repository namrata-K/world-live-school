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

      $query_ganga_score = "SELECT sum(score) as sum from signup_student where house = 'Ganga' ";
  $Execute = mysqli_query($Connection, $query_ganga_score); 
  $ganga_score = 0;
  $DataGRow = mysqli_fetch_array($Execute);
  $ganga_score = $DataGRow['sum'];
  
  $query_yamuna_score = "SELECT sum(score) as sum from signup_student where house = 'Yamuna' ";
  $Execute = mysqli_query($Connection, $query_yamuna_score); 
  $yamuna_score = 0;
  $DataYRow = mysqli_fetch_array($Execute);
  $yamuna_score = $DataYRow['sum'];
  
  $query_krishna_score = "SELECT sum(score) as sum from signup_student where house = 'Krishna' ";
  $Execute = mysqli_query($Connection, $query_krishna_score); 
  $krishna_score = 0;
  $DataKRow = mysqli_fetch_array($Execute);
  $krishna_score = $DataKRow['sum'];
  
  $query_kaveri_score = "SELECT sum(score) as sum from signup_student where house = 'Kaveri' ";
  $Execute = mysqli_query($Connection, $query_kaveri_score); 
  $kaveri_score = 0;
  $DataKRow = mysqli_fetch_array($Execute);
  $kaveri_score = $DataKRow['sum'];
  
  $top_house = 'ganga';
  $max_score = $ganga_score;
  if($yamuna_score > $max_score)
  {
    $top_house = 'yamuna';
    $max_score = $yamuna_score;
  }
  if($krishna_score > $max_score)
  {
    $top_house = 'Krishna';
    $max_score = $krishna_score;
  }
  if($kaveri_score > $max_score)
  {
    $top_house = 'Kaveri';
    $max_score = $kaveri_score;
  }

  $query_ganga_max = "SELECT max(score) as max from signup_student where house = 'Ganga' ";
  $Execute = mysqli_query($Connection, $query_ganga_max); 
  $DataRow = mysqli_fetch_array($Execute);
  $max_ganga = $DataRow['max'];
  $query_ganga_gem = "SELECT name from signup_student where score = '$max_ganga' ";
  $Execute = mysqli_query($Connection, $query_ganga_gem); 
  $DataRow = mysqli_fetch_array($Execute);
  $gem_ganga = $DataRow['name'];

  $query_krishna_max = "SELECT max(score) as max from signup_student where house = 'Krishna' ";
  $Execute = mysqli_query($Connection, $query_krishna_max); 
  $DataRow = mysqli_fetch_array($Execute);
  $max_krishna = $DataRow['max'];
  $query_krishna_gem = "SELECT name from signup_student where score = '$max_krishna' ";
  $Execute = mysqli_query($Connection, $query_krishna_gem); 
  $DataRow = mysqli_fetch_array($Execute);
  $gem_krishna = $DataRow['name'];
  
  $query_yamuna_max = "SELECT max(score) as max from signup_student where house = 'Yamuna' ";
  $Execute = mysqli_query($Connection, $query_yamuna_max); 
  $DataRow = mysqli_fetch_array($Execute);
  $max_yamuna = $DataRow['max'];
  $query_yamuna_gem = "SELECT name from signup_student where score = '$max_yamuna' ";
  $Execute = mysqli_query($Connection, $query_yamuna_gem); 
  $DataRow = mysqli_fetch_array($Execute);
  $gem_yamuna = $DataRow['name'];
  
  $query_kaveri_max = "SELECT max(score) as max from signup_student where house = 'Kaveri' ";
  $Execute = mysqli_query($Connection, $query_kaveri_max); 
  $DataRow = mysqli_fetch_array($Execute);
  $max_kaveri = $DataRow['max'];
  $query_kaveri_gem = "SELECT name from signup_student where score = '$max_kaveri' ";
  $Execute = mysqli_query($Connection, $query_kaveri_gem); 
  $DataRow = mysqli_fetch_array($Execute);
  $gem_kaveri = $DataRow['name'];


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Activities</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     <script src='Winwheel.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.0/TweenMax.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


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

    #canvasContainer {
    position: relative;
    width: 300px;
    left: -200px;
}
 
#canvas {
    z-index: 1;
}
 
#prizePointer {
    position: relative;
    left: 370px;
    top: -750px;
    z-index: 999;
}
.btn-warning{
    position:absolute;
    left:350px;
    top: 650px;
    background-color:#FF8000 ;
    border-radius: 50%;
}
.btn-primary {
    position:absolute;
    left:1050px;
    top: 850px;
    background-color:#FF8000 ;
    border-radius: 12px;
}

.quote-contain {
	height: 20%;
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

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button style="background-color: #FF8000; border-color: #FF8000" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Student Profile</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <a href="home.php"><img src="ecolelogo.png" style="height: 35%; width: 35%"></a>


                    <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                             <li class="nav-item ">
                                <a class="nav-link" href="student.php">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="classroomText.php">My Classroom</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link " href="connect.php">Connect</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="activitiesfinal.php">Activities</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <center>
                <div class="container">
                  <div class="row">
                    <div class="col" style="height: 300px; padding: 20px; box-shadow: 5px 5px #888888; border-radius: 25px; margin: 5px; background-color: #ba0e0e; color: white" ><font size="6"><B>GANGA</B></font>
                        <p class="quote-contain">
                        	<font color=white>
                        		"Successful and unsuccessful people do not vary greatly in their abilities. They vary in their desires to reach their potential."
							</font>
						</p>
						<h1><font size=5px color=black align="right" style="color: white">HOUSE SCORE: <?php echo $ganga_score; ?></font></h1>
						<h1><font size=5px color=black align="right" style="color: white">STAR PERFORMER: <?php echo $gem_ganga; ?></font></h1>
					</div>

                    <div class="col" style="height: 300px; padding: 20px; box-shadow: 5px 5px #888888; border-radius: 25px; margin: 5px; background-color: #030247; color: white"><font size="6"><B>YAMUNA</B></font>               
                    	<p class="quote-contain">
                    		<font color=white>
                    			"Don’t let what you cannot do interfere with what you can do."
							</font>
						</p>
							<h1><font size=5px color=black align="right" style="color: white">HOUSE SCORE: <?php echo $yamuna_score; ?></font></h1>
							<h1><font size=5px color=black align="right" style="color: white">STAR PERFORMER: <?php echo $gem_yamuna; ?></font></h1>
					</div>

                    <div class="w-100"></div>

                    <div class="col" style="height: 300px; padding:20px; box-shadow: 5px 5px #888888; border-radius: 25px; margin: 5px; background-color: #dbd008; color: white"><font size="6"><B>KAVERI</B></font>               
                    	<p class="quote-contain">
                    		<font color=white> 
                    			"Successful and unsuccessful people do not vary greatly in their abilities. They vary in their desires to reach their potential."
							</font>
						</p>
						<h1><font size=5px color=black align="right" style="color: white">HOUSE SCORE: <?php echo $kaveri_score; ?></font></h1>
						<h1><font size=5px color=black align="right" style="color: white">STAR PERFORMER: <?php echo $gem_kaveri; ?></font></h1>
					</div>

                    <div class="col" style="height: 300px; padding:20px; box-shadow: 5px 5px #888888; border-radius: 25px; margin: 5px; background-color: #184f0c; color: white"><font size="6"><B>KRISHNA</B></font>               
                    	<p class="quote-contain">
                    		<font color=white>
                    			"Failure is the opportunity to begin again more intelligently."
							</font>
						</p>
						<h1><font size=5px color=black align="right" style="color: white">HOUSE SCORE: <?php echo $krishna_score; ?></font></p>
						<h1><font size=5px color=black align="right" style="color: white">STAR PERFORMER: <?php echo $gem_krishna; ?></font></p>
					</div>
                  </div>
                </div>
            </center>
            <div class="container">
                  <button style="float: right" type="button"  class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#spinModal">Take quiz now</button>
                  </div>

            <div class="modal fade" id="spinModal">
    <div class="modal-dialog">
      <div class="modal-content">
       
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
               <div id="canvasContainer">
        <canvas id='canvas' width='880' height='800'>
            Canvas not supported, use another browser.
        </canvas>

        <script type="text/javascript">
      function blink() {
        var blinks = document.getElementsByTagName('blink');
        for (var i = blinks.length - 1; i >= 0; i--) {
          var s = blinks[i];
          s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
        }
        window.setTimeout(blink, 1000);
      }
      if (document.addEventListener) document.addEventListener("DOMContentLoaded", blink, false);
      else if (window.addEventListener) window.addEventListener("load", blink, false);
      else if (window.attachEvent) window.attachEvent("onload", blink);
      else window.onload = blink;
    </script>
   
        <img id="prizePointer" src="pointer.png" height="20%" width="50%" alt="V" />
        
        <script>
          
    let theWheel = new Winwheel({
        'numSegments' : 10,
        'fillStyle'   : '#e7706f',
        'lineWidth'   : 3,
        'outerRadius' : 200,
        'innerRadius' : 50, 

        'segments'    :
        [
            {'fillStyle' : '#F7819F', 'text' : 'Maths'},
            {'fillStyle' : '#F3F781', 'text' : 'Physics'},
            {'fillStyle' : '#8181F7', 'text' : 'English'},
            {'fillStyle' : '#D8D8D8', 'text' : 'Crossword'},
            {'fillStyle' : '#BEF781', 'text' : 'Physics'},
            {'fillStyle' : '#F5A9F2', 'text' : 'English'},
            {'fillStyle' : '#81F781', 'text' : 'Maths'},
            {'fillStyle' : '#8181F7', 'text' : 'Crossword'},
            {'fillStyle' : '#FF8000', 'text' : 'Physics'},
            {'fillStyle' : '#81F7F3', 'text' : 'English'}
            
        ], 
            'animation' :                   // Note animation properties passed in constructor parameters.
        {
        'type'     : 'spinToStop',  // Type of animation.
        'duration' : 5,             // How long the animation is to take in seconds.
        'spins'    : 5, 

        'callbackFinished' : 'alertPrize()',
 
        }
        
      });
        
function alertPrize()
    {
        // Call getIndicatedSegment() function to return pointer to the segment pointed to on wheel.
        let winningSegment = theWheel.getIndicatedSegment();
 
        // Basic alert of the segment text which is the prize name.
        //alert("Take quiz on " + winningSegment.text + " now!");
        if (window.confirm("Click ok to take the challenge now")) 
        {
            window.location.href=winningSegment.text+".html";
        };
    }
 
 
</script>
<button type="button" onClick="theWheel.startAnimation();" class="btn btn-warning">Spin the Wheel</button>
</div>
            
        </div>
    </div>

    <div class="overlay"></div>


        </div>
    </div>
</div>
</div>


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
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>

<script>
    Weglot.setup({

      api_key: 'wg_02d8b91a1274c5774c7dc11ae2db765b8',
      
      originalLanguage: 'en',

      destinationLanguages : 'fr,es,hi',

      styleOpt : { fullname: true , withname: true , is_dropdown: true , classF: "wg-flags flag-3" },
     });

</script>
</html>