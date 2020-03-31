<?php
	include "../koneksi.php";

	$residenceID = $_GET['residenceID'];

	$sql = "delete from residence where residenceID = '$residenceID'";

	$query = mysql_query($sql);

  if($query)
  {
    echo "<script>alert('Data succesfuly deleted !'); window.location.href = '../add_residence.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
