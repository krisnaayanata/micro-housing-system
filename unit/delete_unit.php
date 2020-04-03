<?php
	include "../koneksi.php";

	$unitID = $_GET['unitID'];

	$sql = "delete from unit where unitID = '$unitID'";

	$query = mysql_query($sql);

  if($query)
  {
    echo "<script>alert('Data succesfuly deleted !'); window.location.href = '../add_unit.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
