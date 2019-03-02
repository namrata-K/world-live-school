<?php
  $Connection = mysqli_connect('localhost', 'root', '');
  $Selected = mysqli_select_db($Connection, 'live_school');
  session_start();
  $max_score=0;
      while(1)
      {  
         $max_query = "SELECT max(score) as ms from signup_student where score <> '$max_score' limit 1";
         $Execute = mysqli_query($Connection, $max_query); 
         $DataRow = mysqli_fetch_assoc($Execute); 
         if($DataRow)
            $max_score = $DataRow['ms'];
         $user_check_query = "SELECT oname,id,name,score,donor FROM signup_student WHERE score='$max_score'  LIMIT 1"; 
         $Execute = mysqli_query($Connection, $user_check_query); 
         $DataRow = mysqli_fetch_assoc($Execute);
         if($DataRow['donor']!=1 && $DataRow['oname']!="NA")  break;
      } 
      if($DataRow){
       $name= $DataRow['name'];
       $score = $DataRow['score'];
       $id = $DataRow['id'];
       $oname = $DataRow['oname'];
       $_SESSION["child_name"]=$name;
    $_SESSION["child_id"]=$id;
  }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Ecole</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
    
    <link href="assets/fonts/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="dknotus-tour.js"></script>

  <style>

  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  q {font-size: 16px;}
  .margin {}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  p {font-size: 13px;
    line-height: 1.4;}
  
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .tp-class{

  }

  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 30px;
    padding-bottom: 30px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 3px;
    text-align: left;
  }

  .b {
  background-color:#fb4f14; /* Green */
  border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  
  height: 35px;
  width: 90px;
}

.b1 {border-radius: 4px;}
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>


 

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        
        <!-- Modal body -->
        <div class="modal-body">
         <button type="button" class="btn btn-danger" name="sponsorChild" data-dismiss="modal" data-toggle="modal" data-target="#myModal1">Sponsor a child's education</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal2" >Help us to spread smiles </button> 
        </div>
        
        
      </div>
    </div>
  </div>
     
<!-- sponsor child modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
       
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
          You are sponsoring the following child's education. You'll be notified of his/her progress via email.<br>
          CHILD'S NAME: <?php echo $name; ?><br>
          ECOLE SCORE : <?php echo $score; ?><br>
          ORPHANAGE NAME : <?php echo $oname; ?><br>
         <form action="donate_child.php" method="post">
          <div class="form-group">
              <label for="name" style="color: black;">Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
              <label for="email" style="color: black;">Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
              <label for="contact" style="color: black;">Contact number</label>
              <input type="number" class="form-control" id="contact" name="contact" aria-describedby="contact" placeholder="Enter your contact number">
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="sponsor">Donate now</button> 
        </form>
        </div>
      </div>
    </div>
  </div>
<!-- modal for general fund-->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
         <form action="donate_us.php" method="post">
          <div class="form-group">
              <label for="name" style="color: black;">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
              <label for="email" style="color: black;">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
              <label for="contact" style="color: black;">Contact number</label>
              <input type="number" class="form-control" id="contact" aria-describedby="contact" placeholder="Enter your contact number">
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="sponsor">Donate now</button> 
        </form>
        </div>
        
      </div>
    </div>
  </div>

<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
          <button type="button" class="btn btn-danger" name="sponsorChild" data-dismiss="modal" data-toggle="modal" data-target="#loginStudent">Student</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#loginTeacher"> Teacher </button> 
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="loginStudent">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
         <form action="login_student.php" method="post">
          <div class="form-group">
              <label for="text" style="color: black;">Username</label>
              <input type="text" class="form-control" name="uname" id="uname" aria-describedby="name" placeholder="Enter your username">
          </div>
           <div class="form-group">
              <label for="text" style="color: black;">Password</label>
              <input type="text" class="form-control" name="psw" id="psw" aria-describedby="name" placeholder="Enter your Password ">
          </div>
          <div>
            <label for="text" style="color: : black;">Don't have an account? </label>
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#signupStudent"> SignUp Now </button>
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Login</button> 
        </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="signupStudent">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
         <form action="sign_up_student.php" method="post">
          <div class="form-group">
              <label for="text" style="color: black;">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
              <label for="date" style="color: black;">Date of birth</label>
              <input type="date" class="form-control" name="dob" id="dob" aria-describedby="name" placeholder="Enter your date of birth">
          </div>
          <div class="form-group">
              <label for="text" style="color: black;">Orphanage name</label>
              <input type="text" class="form-control" name="oname" id="oname" aria-describedby="name" placeholder="Enter your Orphanage name(Write NA if not applicable)">
          </div>
          <div class="form-group">
              <label for="text" style="color: black;">Username</label>
              <input type="text" class="form-control" name="uname" id="uname" aria-describedby="name" placeholder="Enter your username">
          </div>
           <div class="form-group">
              <label for="text" style="color: black;">Password</label>
              <input type="text" class="form-control" name="psw" id="psw" aria-describedby="name" placeholder="Enter your Password ">
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="submit">Sign Up</button> 
        </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="loginTeacher">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
         <form action="login_teacher.php" method="post">
          <div class="form-group">
              <label for="text" style="color: black;">Username</label>
              <input type="text" class="form-control" name="uname" id="uname" aria-describedby="name" placeholder="Enter your username">
          </div>
           <div class="form-group">
              <label for="text" style="color: black;">Password</label>
              <input type="text" class="form-control" name="psw" id="psw" aria-describedby="name" placeholder="Enter your Password ">
          </div>
          <div>
            <label for="text" style="color: : black;">Don't have an account? </label>
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#signupTeacher"> SignUp Now </button>
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Login</button> 
        </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="signupTeacher" style="height: 100%;overflow-y: auto;">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" style="color: black; ">
         <form action="sign_up_teacher.php" method="post">
          <div class="form-group">
              <label for="text" style="color: black;">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
              <label for="date" style="color: black;">Date of birth</label>
              <input type="date" class="form-control" name="dob" id="dob" aria-describedby="name" placeholder="Enter your date of birth">
          </div>
          <div class="form-group">
              <label for="email" style="color: black;">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="name" placeholder="Enter your E-mail">
          </div>
          <div class="form-group">
              <label for="text" style="color: black;">Qualification</label>
              <input type="text" class="form-control" name="qual" id="qual" aria-describedby="name" placeholder="Enter your Qualification">
          </div>
          <div class="form-group">
              <label for="text" style="color: black;">Occupation</label>
              <input type="text" class="form-control" name="occ" id="occ" aria-describedby="name" placeholder="Enter your Occupation">
          </div>
          <div class="form-group">
              <label for="text" style="color: black;">Username</label>
              <input type="text" class="form-control" name="uname" id="uname" aria-describedby="name" placeholder="Enter your username">
          </div>
           <div class="form-group">
              <label for="text" style="color: black;">Password</label>
              <input type="text" class="form-control" name="psw" id="psw" aria-describedby="name" placeholder="Enter your Password ">
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="submit">Sign Up</button> 
        </form>
        </div>
      </div>
    </div>
  </div>

    <body class="homepage">
<div class="overlay" style="width: 100%;"></div>

<div class="outer-wrapper" style="width: 100%;">
<div class="page-wrapper" style="width: 100%;">

    <header class="navigation" id="top">
        <div class="container" style="width: 100%;">
           
            <!--/.secondary-nav-->
            <div class="main-nav">
                <div class="brand"><img src="ecolelogo.png" alt="Ecole" height="50%" width="50%"></a></div><!--/.brand-->
               
                <nav>

                    <ul>

                        <li><a  href="#aboutus">About Us</a></li>
                        <li><a href="#donate">Donate</a></li>
                        <li><a href="#services">Our Services</a></li>
                       
                        <li><a href="#contact">Contact</a></li>
                       
                      <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#loginModal" >Login</button> 

                    </ul>

                    <div class="nav-toggle"><i class="icon_menu"></i></div>
                </nav>
                
  </div>
</nav>


<div class="overlay"></div>

<div class="outer-wrapper">
<div class="page-wrapper">
<div class="hero-slider" style="min-height: 100px">
        <div class="rev-slider">
            <ul>
               <li>
                   <img src="imgfr2.jpg" alt="">
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="150"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="500">
                   </div>
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="210"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="600">
                   </div>
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="410"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="700">
                   </div>
               </li>
                <li>
                    <img src="imgfr3.jpg" alt="">
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="150"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="500">
                    </div>
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="210"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="600">
                    </div>
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="410"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="700">
                    </div>
                </li>
                <li>
                    <img src="imgfr4.jpg" alt="">
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="150"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="500">
                    </div>
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="210"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="600">
                    </div>
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="410"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="700">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin"><a id="aboutus">ABOUT US</a></h3>
  <q>We at école believe that education is the elementary right of every student. Hence, a team of 6 decided to take up the initiative to connect the students in need of education and knowledge with the people who already possess it in abundance but need a platform to share it.
  École provides a free online virtual school environment for students who can’t afford it, with the help of the content creators, hence, providing both a platform to connect and excel. Our website is accessible to the differently abled students too so that there remains no barrier in educating themselves. 
 </q>
 
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin" size="2px">SUCCESS STORIES</h3><br>
  <div class="row">
    <div class="col-sm-4" style="border-top: 20%">
      <img src="author.jpg" height="20%" ; width="40%">
      <p align="left">Ms Savita Gupta</p>
<p align="left">Shalimar Bagh, Delhi</p>
<p align="left">Housewife</p>
<p align="left">After I heard about this initiative, I have been telling my friends that ecole is the best way to impart our knowledge to the one's who need it to change their lives. 

</p>
      
    </div>
    <div class="col-sm-4"> 
      <img src="story.jpg" height="50%" ; width="50%">

      <p align="left">Prof. Sunil Sharma</p> 
<p align="left">Kashmere Gate, Delhi</p>
<p align="left">Retired Math Professor</p>
<p align="left">After my retirement I have a lot of time on my hands. ecole looks promising to people like me across the globe.Looking forward to use this website.  

</p>
      
    </div>
    <div class="col-sm-4"> 
      <img src="orphan.jpg" height="50%" ; width="50%">
      <p align="left">Rajni</p> 
<p align="left">Rohini sector-8, Delhi</p>
<p align="left">Orphan at Nishulk Shiksha Sansthan</p>
<p align="left">I would learn dance and music. i am also goo at maths. We have 10 computers and we use them to play games sometimes. I want to come first in whatever I do.</p>
      
    </div>
  </div>
</div>

 <div class="container-fluid bg-2">
  <center>
<img src="countergif.gif" height="100px" width="250px" align="center" />

</center>
<center>
  <B><a id="donate"><font size="20">NUMBER OF LIVES CHANGED!</font></a></B>
</center>
<center>
  <p>"Join us to sponsor a child's Education anywhere around the globe. Your donations will help them live a life with diginty, confidence and optimism. Donate today by clicking on the below mentioned link and make the World a better place for all.
  </p>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Click here to donate
  </button>
</center>
</div>

<div class="container-fluid bg-3 text-center">

  <h3 class="margin"><a id="services">OUR SERVICES</a></h3>

  <div class="col-sm-4">
    <img src="trophy.png" height="20%" width=20%>
    <B align="center"><font size="5">Oppurtunities</B> 
<p>We aim at providing a better shot at education to the orphans enrolled in our system by connecting them to donors from across the World. The top 3 scores if our class room programs will be recommended to the logged in donor. 
</p>
  </div>
    <div class="col-sm-4">
    <img src="class.png" height="20%" width=20%>
    <B align="center"><font size="5">Virtual Classroom</B> 
<p>We offer a complete class room experience to the children, with Certified courses from Cognizant, offline access (downloadable) to all materials. 
</p>
  </div>
  <div class="col-sm-4">
    <img src="tts.jpg" height="20%" width=20%>
    <B align="center"><font size="5">Text to Speech</B> 
<p>We offer a complete class room experience to the children, with Certified courses from Cognizant, offline access (downloadable) to all materials. 
</p>
  </div>
<div class="col-sm-4">
    <img src="people.jpg" height="20%" width=20%>
    <B align="center"><font size="5">Network Building</B> 
<p>We offer a complete class room experience to the children, with Certified courses from Cognizant, offline access (downloadable) to all materials. 
</p>
  </div>



</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p><a id="contact"><font color="white">Follow us on</font> </a></p>
  
  <div><img src="fb.png" height=3% width=3%>
    <img src="twitter.png" height=3% width=3%>
    <img src="insta.png" height=3% width=3%>
    <img src="f.png" height=3% width=3%>
     <h3 class="margin" style="margin-left: 87%;color:  #2f2f2f">Language</h3>
  </div>
</footer>

          <script>
            $(function(){
              $('#simpleBtn').click(function(){
                Tour.run([
                  {
                    element: $('#btn1'),
                    content: 'first btn'
                  },
                  {
                    element: $('#btn2'),
                    content: 'and the second one<br>description might be <strong>HTML</strong>'
                  },
                ]);
              });
            });
          </script>


<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/zabuto_calendar.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>

<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>


</body>

<!-- JS code for website translation-->

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
