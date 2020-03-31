<?php
  if(isset($_SESSION['username'])){
    ?>
      <div class="navbar-fixed">
          <nav class="white text-teal">
              <div class="container">
                <div class="nav-wrapper">
                  <a class="brand-logo teal-text ">Micro Housing System</a>
                  <ul class="right hide-on-med-and-down">
                    <li><a class='dropdown-trigger btn'>Hi, <b><?php echo $_SESSION['username']; ?></b> !</a></li>
                    <li><a href="view_residence.php" class="teal-text">View Residence</a></li>
                    <li><a href="view_application.php?" class="teal-text">View Application</a></li>
                    <li><a href="logout.php" class="teal-text">Logout</a></li>
                    <!-- Dropdown Trigger -->
                    </ul>
                </div>
              </div>
            </nav>
        </div>
    <?php

  }
?>
