<?php
	session_start();
	if($_SESSION['levelUser']!="Applicant"){
		header("location:login.php");
	}
	include "koneksi.php";
	$residenceID = $_GET['residenceID'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Residence Data</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/fontawesome.css" media="screen" title="no title" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="wrapper">
      <?php include('header_applicant.php'); ?>
      <div class="row"></div>

      <div class="container ">
        <div class="row">
          <div class="col s12">
              <h5 class="center-align">Submit Application</h5>
              <div class="col s3">
                 &nbsp;
              </div>
              <div class="col s6">
                <div class="row">
                    <form class="col s12" action="application/add_application_process.php" method="POST">
											<div class="row">
												<input type="hidden" name="applicantID" value="<?php echo $_SESSION['userID']; ?>">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" value="<?php echo $_SESSION['userID']; ?>" disabled>
                              <label for="text">Applicant ID</label>
                          </div>
                      </div>
											<div class="row">
												<input type="hidden" name="residenceID" value="<?php echo $_SESSION['residenceID']; ?>">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" value="<?php echo $_GET['residenceID']; ?>" disabled>
                              <label for="text">Residence ID</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="date" class="validate" name="applicationDate" required>
                              <label for="text">Application Date</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="requiredMonth" required>
                              <label for="text">Required Month</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="requiredYear" required>
                              <label for="text">Required Year</label>
                          </div>
                      </div>
											<div class="row">
                          <div class="col m12">
                              <p class="right-align">
                                  <button class="btn btn-large waves-effect waves-light" type="submit" name="add">Add</button>
                              </p>
                          </div>
                      </div>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script >
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      })
    </script>
  </body>
</html>
