<?php
  session_start();
  if($_SESSION['levelUser']!="HousingOfficer"){
    header("location:login.php");
  }
  include "koneksi.php";
  $applicationID = $_GET['applicationID'];
  $applicantID = $_GET['applicantID'];
  $query_cek = mysql_query("SELECT * FROM application WHERE applicationID = '$applicationID'");
  $hasil_cek = mysql_num_rows($query_cek);
  if($hasil_cek==1){

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Allocate Housing</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('select').formSelect();
      });
    </script>
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
              <h5 class="center-align">Allocate Housing</h5>
              <div class="col s3">
                 &nbsp;
              </div>
              <div class="col s6">
                <div class="row">

                  <form class="col s12" action="allocation/allocate_process.php" method="POST">
                    <?php
                      while($hasil = mysql_fetch_assoc($query_cek)){
                        ?>
                    <div class="row">
                      <input type="hidden" name="applicantID" value="<?php echo $hasil['applicantID'] ?>">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" value="<?php echo $hasil['applicantID'] ?>" disabled>
                            <label for="text">applicantID</label>
                        </div>
                    </div>
                    <div class="row">
                      <input type="hidden" name="applicationID" value="<?php echo $hasil['applicationID'] ?>">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" value="<?php echo $hasil['applicationID'] ?>" disabled>
                            <label for="text">applicationID</label>
                        </div>
                    </div>
                    <div class="row">
                      <input type="hidden" name="residenceID" value="<?php echo $hasil['residenceID'] ?>">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" value="<?php echo $hasil['residenceID'] ?>" disabled>
                            <label for="text">Residence ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <select name="unitNo" id="unit">
                            <option disabled selected>Unit No </option>
                             <?php
                              $residenceID = $hasil['residenceID'];
                              $sql=mysql_query("SELECT * FROM unit where residenceID = $residenceID");
                              while ($data=mysql_fetch_array($sql)) {
                             ?>
                               <option value="<?=$data['unitNo']?>" required><?=$data['unitNo']?></option>
                             <?php
                              }
                             ?>
                          </select>
                          <label>Choose unit no</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="date" class="validate" name="fromDate" required>
                            <label for="text">From Date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="duration" required>
                            <label for="text">Duration</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <select name="status" id="status">
                            <option value="" disabled selected>Status</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                            <option value="Waitlist">Waitlist</option>
                          </select>
                          <label>Choose the status</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit" name="allocate">Allocate</button>
                            </p>
                        </div>
                    </div>
                    <?php
                  }
                ?>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}
else {
  header("location:add_residence.php");
}
