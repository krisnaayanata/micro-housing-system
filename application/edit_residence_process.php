<?php
  include "../koneksi.php";
  $residenceID=$_POST['residenceID'];
  $address=$_POST['address'];
  $numUnits=$_POST['numUnits'];
  $sizePerUnit=$_POST['sizePerUnit'];
  $monthlyRental=$_POST['monthlyRental'];

  $sql = mysql_query("update residence set residenceID = '$residenceID', address='$address', numUnits='$numUnits', sizePerUnit='$sizePerUnit', monthlyRental='$monthlyRental' where residenceID='$residenceID'");
  if($sql)
  {
    echo "<script>alert('Data succesfuly edit !'); window.location.href = '../add_residence.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}

?>
