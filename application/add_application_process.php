<?php
	include "../koneksi.php";

	$applicantID = $_POST['applicantID'];
	$residenceID = $_POST['residenceID'];
	$applicationDate = $_POST['applicationDate'];
	$requiredMonth = $_POST['requiredMonth'];
	$requiredYear = $_POST['requiredYear'];
	$status = "New";

	$sql="INSERT INTO application VALUES('','$applicantID','$residenceID','$applicationDate','$requiredMonth','$requiredYear','$status')";

	$query=mysql_query($sql);



  if($query)
  {
    echo "<script>alert('Data succesfuly add !'); window.location.href = '../view_residence.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
