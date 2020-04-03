<?php
  include "../koneksi.php";
  $unitID=$_POST['unitID'];
  $unitNo=$_POST['unitNo'];
  $residenceID=$_POST['residenceID'];
  $userID=$_POST['userID'];
  $availability=$_POST['availability'];

  $sql = mysql_query("update unit set unitID = '$unitID', unitNo = '$unitNo', residenceID = '$residenceID', userID = '$userID', availability='$availability' where unitID='$unitID'");
  if($sql)
  {
    echo "<script>alert('Data succesfuly edit !'); window.location.href = '../add_unit.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}

?>
