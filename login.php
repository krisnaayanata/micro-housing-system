<?php
	if(isset($_GET['message'])){
		if($_GET['message']=="fail"){
			echo "<script>alert('Login Failed ! Username / Password not register yet !');</script>";
		}
	}
	?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Micro Housing</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>

    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="container ">
      <div class="row">
        <div class="col s12">
            <h4 class="center-align">Micro Housing System</h4>
            <div class="col s3">
               &nbsp;
            </div>
            <div class="col s6">
              <div class="row">
                  <form class="col s12" action="login_process.php" method="POST">
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="text" type="text" class="validate" name="username" required>
                              <label for="text">Username</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="pass" type="password" class="validate" name="password" required>
                              <label for="pass">Password</label>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col m12">
                              <p class="right-align">
																	<a href="index.php" class="btn btn-large waves-effect waves-light">Cancle</a>
                                  <button class="btn btn-large waves-effect waves-light" type="submit" name="login">Login</button>
                              </p>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/materialize.min.js"></script>
  </body>
</html>
