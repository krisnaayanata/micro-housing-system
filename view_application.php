<?php
	session_start();
	if($_SESSION['levelUser']!="Applicant"){
		header("location:login.php");
	}
	include "koneksi.php";
	$userID = $_SESSION['userID'];
	$applicantID = $_GET['applicantID'];
	$link = mysqli_connect("localhost", "root", "", "db_micro_housing");
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
		<?php include('header_applicant.php'); ?>
		<br/>
				<h5 align="center">Application Data</h5>
		<br/><br/>
		<div class="container">
				<div class="row">
					<table class="bordered center">
							<thead>
								<tr>
										<th data-field="applicationID">Application ID</th>
										<th data-field="residenceID">Residence ID</th>
										<th data-field="numUnits">Unit Available</th>
										<th data-field="monthlyRental">Monthly Rental</th>
										<th data-field="status">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = mysqli_query($link,"SELECT a.applicationID, a.residenceID, b.numUnits, b.monthlyRental, a.status
									FROM application AS a INNER JOIN residence AS b on a.residenceID  = b.residenceID
									WHERE applicantID = $userID");
									while($hasil = mysqli_fetch_array($query)){
										echo "
											<tr align='center'>
												<td>".$hasil['applicationID']."</td>
												<td>".$hasil['residenceID']."</td>
												<td>".$hasil['numUnits']."</td>
												<td>".$hasil['monthlyRental']."</td>
												<td>".$hasil['status']."</td>
											</tr>

										";
									}
								?>
							</tbody>
						</table>
				</div>
		</div>
  </body>
</html>
