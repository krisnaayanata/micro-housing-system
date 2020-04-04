<?php
	include "koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$levelUser="HousingOfficer";

	$sql="insert into user values('','$username','$password','$fullname','$email','','$levelUser')";

	$sql_applicant ="insert into applicant values('','$fullname','$email','$monthlyIncome')";
	$query=mysql_query($sql);
	if ($query)
	{
		$query2=mysql_query($sql_applicant);
		echo "<script>alert ('Success!'); location.href='login.php';</script>";
	}

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
