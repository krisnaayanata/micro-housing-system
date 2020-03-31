<?php
	session_start();
	if($_SESSION['levelUser']!="Applicant"){
		header("location:login.php");
	}
	include "koneksi.php";
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
									$query = mysql_query("SELECT * FROM application");
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
