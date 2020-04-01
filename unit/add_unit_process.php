<?php
	include "../koneksi.php";

	$residenceID=$_POST['residenceID'];
	$unitNo=$_POST['unitNo'];
	$userID = $_POST['userID'];
	$availability="Available";
	$sql="insert into unit values('$unitNo','$residenceID','$userID','$availability')";

	$query=mysql_query($sql);
  if($query)
  {
    echo "<script>alert('Data succesfuly add !'); window.location.href = '../add_unit.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
