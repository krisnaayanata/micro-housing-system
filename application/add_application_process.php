<?php
	include "../koneksi.php";

	$applicantID = $_POST['applicantID'];
	$residenceID = $_POST['residenceID'];
	$applicationDate = $_POST['applicationDate'];
	$requiredMonth = $_POST['requiredMonth'];
	$requiredYear = $_POST['requiredYear'];
	$status = "New";

	$query_user = mysql_query("SELECT * FROM residence where residenceID = '$residenceID'");
	$hasil_user = mysql_fetch_assoc($query_user);
	$user_id = $hasil_user['userID'];

	$sql="INSERT INTO application VALUES('','$applicantID','$residenceID','$applicationDate','$requiredMonth','$requiredYear','$status','$user_id')";

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
