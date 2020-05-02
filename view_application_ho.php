<?php
	session_start();
	if($_SESSION['levelUser']!="HousingOfficer"){
		header("location:login.php");
	}
	include "koneksi.php";
	$userID = $_SESSION['userID'];
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
										<th data-field="residenceID">Residence ID</th>
										<th data-field="numUnits">numUnits</th>
										<th data-field="monthlyRental">Monthly Rental</th>
										<th data-field="username">Username</th>
										<th data-field="monthlyIncome">Monthly Income</th>
										<th data-field="requiredMonth">Required Month</th>
										<th data-field="requiredYear">Required Year</th>
										<th data-field="status">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = mysql_query("SELECT a.applicationID, a.applicantID, a.residenceID,
									r.numUnits, r.monthlyRental, u.username, u.monthlyIncome, a.requiredMonth, a.requiredYear, a.status
									FROM application AS a INNER JOIN residence AS r on a.residenceID  = r.residenceID
									INNER JOIN user AS u on a.applicantID = u.userID
									WHERE  r.userID = $userID");
									while($hasil = mysql_fetch_array($query)){
										echo "
											<tr align='center'>
												<td>".$hasil['applicationID']."</td>
												<td>".$hasil['residenceID']."</td>
												<td>".$hasil['numUnits']."</td>
												<td>".$hasil['monthlyRental']."</td>
												<td>".$hasil['username']."</td>
												<td>".$hasil['monthlyIncome']."</td>
												<td>".$hasil['requiredMonth']."</td>
												<td>".$hasil['requiredYear']."</td>
												<td>".$hasil['status']."</td>
												<td><a href='allocate_housing.php?applicationID=".$hasil['applicationID']."&applicantID=".$hasil['applicantID']."'><i>Allocate Now</i></a><td>
											</tr>
										";
									}
								;?>
							</tbody>
						</table>
				</div>
		</div>
  </body>
</html>
