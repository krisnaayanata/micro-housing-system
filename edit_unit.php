<?php
  include "koneksi.php";
  $unitID = $_GET['unitID'];
  $query_cek = mysql_query("SELECT * FROM unit WHERE unitID = '$unitID'");
  $hasil_cek = mysql_num_rows($query_cek);
  if($hasil_cek==1){

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Unit Data</title>
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
              <h5 class="center-align">Edit Unit Data</h5>
              <div class="col s3">
                 &nbsp;
              </div>
              <div class="col s6">
                <div class="row">

                  <form class="col s12" action="unit/edit_unit_process.php" method="POST">
                    <?php
                      while($hasil = mysql_fetch_assoc($query_cek)){
                        ?>
                    <input type="hidden" name="unitID" value="<?php echo $hasil['unitID'] ?>">

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="unitNo" value="<?php echo $hasil['unitNo'] ?>" required>
                            <label for="text">Unit NO</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="hidden" name="residenceID" value="<?php echo $hasil['residenceID'] ?>">
                            <input id="text" type="text" class="validate" value="<?php echo $hasil['residenceID'] ?>" disabled>
                            <label for="text">Residence ID</label>
                        </div>
                    </div>
                    <input type="hidden" name="userID" value="<?php echo $hasil['userID'] ?>">
      
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" type="text" class="validate" name="availability" value="<?php echo $hasil['availability'] ?>" required>
                            <label for="text">Availability</label>
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
