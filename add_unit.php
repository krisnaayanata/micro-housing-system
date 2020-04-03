<?php
	include "koneksi.php";
	session_start();
	if($_SESSION['levelUser']!="HousingOfficer"){
		header("location:login.php");
	}
	$userID = $_SESSION['userID'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Unit Data</title>
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
              <h5 class="center-align">Add Unit</h5>
              <div class="col s3">
                 &nbsp;
              </div>
              <div class="col s6">
                <div class="row">
                    <form class="col s12" action="unit/add_unit_process.php" method="POST">
											<div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="residenceID" required>
                              <label for="text">Choose the Residence ID</label>
                          </div>
                      </div>
											<input type="hidden" name="userID" value="<?php echo $_SESSION['userID']; ?>">
											<div class="row">
													<div class="input-field col s12">
															<input id="text" type="text" class="validate" name="unitNo" required>
															<label for="text">Unit Number</label>
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
          <h5 align="center">Unit Data</h5>
      <br/><br/>

      <div class="container">
          <div class="row">
            <table class="bordered center">
                <thead>
                  <tr>
											<th data-field="unitNo">Unit ID</th>
											<th data-field="unitNo">Unit No</th>
                      <th data-field="residenceID">Residence ID</th>
                      <th data-field="availability">Availability</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM unit where userID = '$userID'");
                    while($hasil = mysql_fetch_assoc($query)){
                      echo "
                        <tr align='center'>
													<td>".$hasil['unitID']."</td>
													<td>".$hasil['unitNo']."</td>
                          <td>".$hasil['residenceID']."</td>
                          <td>".$hasil['availability']."</td>
                          <td><a href='edit_unit.php?unitID=".$hasil['unitID']."'><i class='fa fa-edit'></i></a> | <a href='unit/delete_unit.php?unitID=".$hasil['unitID']."'><i class='fa fa-remove'></i></a></td>
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
