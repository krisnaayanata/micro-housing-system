<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if($data['levelUser']=="HousingOfficer"){
		$_SESSION['username'] = $username;
		$_SESSION['levelUser'] = "HousingOfficer";
		header("location:add_residence.php");
	}
	else if($data['levelUser']=="Applicant"){
		$_SESSION["userID"] = $data["userID"];
		$_SESSION['username'] = $username;
		$_SESSION['levelUser'] = "Applicant";
		header("location:view_residence.php");
	}
	else{
	header("location:login.php?message=fail");
	}
}
else{
	header("location:login.php?message=fail");
}

?>
