<?php
	include "../koneksi.php";
  $applicantID = $_POST['applicantID'];
	$applicationID = $_POST['applicationID'];
	$residenceID = $_POST['residenceID'];
	$unitNo = $_POST['unitNo'];
	$fromDate = $_POST['fromDate'];
	$duration = $_POST['duration'];
  $endDate = date('Y-m-d', strtotime('+'.$duration.' month', strtotime($fromDate)));
	$status = $_POST['status'];

	$sql="INSERT INTO allocation VALUES('','$applicationID','$residenceID','$unitNo','$fromDate','$duration','$endDate','$status')";

	$query=mysql_query($sql);

  if($query)
  {
    $update_application = mysql_query("UPDATE application SET status = '$status' where applicationID = '$applicationID'");
		if($status=="Approved"){
	    $update_all_application = mysql_query("UPDATE application SET status = 'Rejected' where status = 'New' AND applicantID = '$applicantID'");
	    echo "<script>alert('Data succesfuly add !'); window.location.href = '../view_application_ho.php'</script>";
		}
		else {
			echo "<script>alert('Data succesfuly add !'); window.location.href = '../view_application_ho.php'</script>";
		}
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
