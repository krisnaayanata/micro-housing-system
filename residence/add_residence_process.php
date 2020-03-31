<?php
	include "../koneksi.php";

	$address=$_POST['address'];
	$numUnits=$_POST['numUnits'];
	$sizePerUnit=$_POST['sizePerUnit'];
	$monthlyRental=$_POST['monthlyRental'];

	$sql="insert into residence values('','$address','$numUnits','$sizePerUnit','$monthlyRental')";

	$query=mysql_query($sql);
  if($query)
  {
    echo "<script>alert('Data succesfuly add !'); window.location.href = '../add_residence.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
