<?php
	if(isset($_GET['message'])){
		if($_GET['message']=="fail"){
			echo "<script>alert('Login Failed ! Username / Password not register yet !');</script>";
		}
	}
	?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Micro Housing System</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">M H S</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="registerAs.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text">Welcome to Micro Housing System</h1>
      <div class="row center">
        <h5 class="header col s12 light">an easy way to find your house with your best price</h5>
      </div>
      <div class="row center">
        <a href="registerAs.php" id="download-button" class="btn-large waves-effect waves-light teal">Register Now!</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Fast Serives</h5>

            <p class="light">We did most of the heavy lifting for you to provide a faster service for better experience in finding your home needs.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center center teal-text"><i class="material-icons">accessibility</i></h2>
            <h5 class="center">Comfort Focused</h5>

            <p class="light">Having a comfortable residence would be everyone's desire. Younger friends might be one of those who long to live in a comfortable place so that they can relieve stress after a day of activities.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center center teal-text"><i class="material-icons">attach_money</i></h2>
            <h5 class="center">Affordable</h5>

            <p class="light">For the current problem young people from low income groups who have difficulty finding affordable accommodation in the city of Kuala Lumpur. But the government offered help through the upcoming Kuala Lumpur micro housing facility (DBKL).</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About</h5>
          <p class="justify grey-text text-lighten-4">By implementing technological advancements, the government can build an information
						 system to make it easier for young people to look for micro homes. With the benefits and facilities available,
						 this system must be developed as well as possible. This is in line with advances in information and communication
						 technology such as internet and web technologies that are able to support the process of input, output and data search quickly and accurately.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="teal-text text-lighten-3">Student of HELP UNIVERSITY</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
