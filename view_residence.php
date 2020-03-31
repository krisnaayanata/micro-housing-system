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
				<h5 align="center">Choose your residence!</h5>
		<br/><br/>

		<div class="container">
				<div class="row">
					<table class="bordered center">
							<thead>
								<tr>
										<th data-field="residenceID">Residence ID</th>
										<th data-field="address">Address</th>
										<th data-field="numUnits">Number of Units</th>
										<th data-field="sizePerUnit">Size per Unit</th>
										<th data-field="monthlyRental">Monthly Rental</th>


								</tr>
							</thead>

							<tbody>
								<?php
									$query = mysql_query("SELECT * FROM residence");
									while($hasil = mysql_fetch_assoc($query)){
										echo "
											<tr align='center'>
												<td>".$hasil['residenceID']."</td>
												<td>".$hasil['address']."</td>
												<td>".$hasil['numUnits']."</td>
												<td>".$hasil['sizePerUnit']."</td>
												<td>".$hasil['monthlyRental']."</td>
												<td><a href='add_application.php?residenceID=".$hasil['residenceID']."'><i class='material-icons'>add</i></a></td>
											</tr>
										";
									}
								?>
							</tbody>
						</table>
				</div>
  </body>
</html>
