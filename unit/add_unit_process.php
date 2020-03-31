<?php
	include "../koneksi.php";

	$residenceID=$_POST['residenceID'];
	$availability=$_POST['availability'];

	$sql="insert into unit values('','$residenceID','$availability')";

	$query=mysql_query($sql);
  if($query)
  {
    echo "<script>alert('Data succesfuly add !'); window.location.href = '../add_unit.php'</script>";
  }

	else
	{
		echo"<script>alert ('Fail');</script>";
	}
?>
