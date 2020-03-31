<?php
	session_start();
	if($_SESSION['levelUser']!="HousingOfficer"){
		header("location:login.php");
	}
	include "koneksi.php";
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
      <?php include('header.php'); ?>
      <div class="row"></div>

      <div class="container ">
        <div class="row">
          <div class="col s12">
              <h5 class="center-align">Add Residence</h5>
              <div class="col s3">
                 &nbsp;
              </div>
              <div class="col s6">
                <div class="row">
                    <form class="col s12" action="residence/add_residence_process.php" method="POST">
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="address" required>
                              <label for="text">Address</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="numUnits" required>
                              <label for="text">Number of Units</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="sizePerUnit" required>
                              <label for="text">Size per Unit</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="monthlyRental" required>
                              <label for="text">Monthly Rental</label>
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

      <br/>
          <h5 align="center">Residence Data</h5>
      <br/><br/>

      <div class="container">
          <div class="row">
            <table class="bordered center">
                <thead>
                  <tr>
                      <th data-field="residenceID">Residence ID</th>
                      <th data-field="address">Address</th>
                      <th data-field="numUnits">Number of Units</th>
                      <th data-field="sizePerUnit">Size per Unit</th>
                      <th data-field="monthlyRental">Monthly Rental</th>


                  </tr>
                </thead>

                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM residence");
                    while($hasil = mysql_fetch_assoc($query)){
                      echo "
                        <tr align='center'>
                          <td>".$hasil['residenceID']."</td>
                          <td>".$hasil['address']."</td>
                          <td>".$hasil['numUnits']."</td>
                          <td>".$hasil['sizePerUnit']."</td>
                          <td>".$hasil['monthlyRental']."</td>
                          <td><a href='edit_residence.php?residenceID=".$hasil['residenceID']."'><i class='fa fa-edit'></i></a> | <a href='residence/delete_residence.php?residenceID=".$hasil['residenceID']."'><i class='fa fa-remove'></i></a></td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
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
