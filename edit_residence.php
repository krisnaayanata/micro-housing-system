<?php
  include "koneksi.php";
  $residenceID = $_GET['residenceID'];
  $query_cek = mysql_query("SELECT * FROM residence WHERE residenceID = '$residenceID'");
  $hasil_cek = mysql_num_rows($query_cek);
  if($hasil_cek==1){

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Residence Data</title>
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
              <h5 class="center-align">Edit Residence Data</h5>
              <div class="col s3">
                 &nbsp;
              </div>
              <div class="col s6">
                <div class="row">

                  <form class="col s12" action="residence/edit_residence_process.php" method="POST">
                    <?php
                      while($hasil = mysql_fetch_assoc($query_cek)){
                        ?>
                    <div class="row">
                      <input type="hidden" name="residenceID" value="<?php echo $hasil['residenceID'] ?>">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" value="<?php echo $hasil['residenceID'] ?>" disabled>
                            <label for="text">Residence ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="address" value="<?php echo $hasil['address'] ?>" required>
                            <label for="text">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="numUnits" value="<?php echo $hasil['numUnits'] ?>" required>
                            <label for="text">Number of Units</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="sizePerUnit" value="<?php echo $hasil['sizePerUnit'] ?>" required>
                            <label for="text">Size per Unit</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="monthlyRental" value="<?php echo $hasil['monthlyRental'] ?>" required>
                            <label for="text">Monthly Rental</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit" name="edit">Edit</button>
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

      <script src="js/jquery-2.2.3.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script >
        $(document).ready(function(){
          $(".button-collapse").sideNav();
        })
      </script>

    </div>
  </body>
</html>
<?php
}
else {
  header("location:add_residence.php");
}
