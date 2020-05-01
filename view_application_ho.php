<?php
	session_start();
	if($_SESSION['levelUser']!="HousingOfficer"){
		header("location:login.php");
	}
	include "koneksi.php";
	$userID = $_SESSION['userID'];
	$query_user= mysql_query("SELECT * FROM residence where userID = '$userID'");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Residence Data</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/fontawesome.css" media="screen" title="no title" charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
  <body>
		<?php include('header.php'); ?>
		<br/>
				<h5 align="center">Application Data</h5>
		<br/><br/>
		<div class="container">
				<div class="row">
					<table class="bordered center">
							<thead>
								<tr>
										<th data-field="applicationID">Application ID</th>
										<th data-field="applicantID">Applicant ID</th>
										<th data-field="applicantID">Residence ID</th>
										<th data-field="applcationDate">Application Date</th>
										<th data-field="requiredMonth">Required Month</th>
										<th data-field="requiredYear">Required Year</th>
										<th data-field="status">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while($hasil_user = mysql_fetch_assoc($query_user)){
									$user_id = $hasil_user['residenceID'];
									$query = mysql_query("SELECT * FROM application where residenceID = $user_id");
									while($hasil = mysql_fetch_assoc($query)){
										echo "
											<tr align='center'>
												<td>".$hasil['applicationID']."</td>
												<td>".$hasil['applicantID']."</td>
												<td>".$hasil['residenceID']."</td>
												<td>".$hasil['applicationDate']."</td>
												<td>".$hasil['requiredMonth']."</td>
												<td>".$hasil['requiredYear']."</td>
												<td>".$hasil['status']."</td>
												<td><a href='allocate_housing.php?applicationID=".$hasil['applicationID']."&applicantID=".$hasil['applicantID']."'><i>Allocate Now</i></a><td>
											</tr>
										";
									}
									}
								?>
							</tbody>
						</table>
				</div>
		</div>
  </body>
</html>
