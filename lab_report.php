<?php
include("connection.php");

?>
<html>
<head>
<title>lab_report</title>
</head>
<body>
  <form method="POST" action="">
  <label for="pid"><b>Enter P_ID</b></label><br>
  <input type="text" placeholder="Enter patient_id" name="p_id"><br>

  <button type="submit" name="submit" >SUBMIT</button><br><br><br>
	<a href="dwnldlabreport.php" download as pdf >DOWNLOAD LAB-REPORT</a>

<table width = "1600" border="1" cellspacing="1">
<tr>
<th>PID</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>BMI</th>
<th>BLOOD_GROUP</th>
<th>CBC</th>
<th>BP</th>
<th>TEST</th>

<th>PROBLEM</th>
</body>

<?php
if(isset($_POST['submit']))
{
	$p_id = $_POST['p_id'];
	
	$query = "SELECT * FROM lab_report WHERE PID=$p_id";
	$result = mysqli_query($conn,$query);
	if($result)
	{
		echo " successfull!!";
		while ($lab_report = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$lab_report["PID"]."</td>";
			echo "<td>".$lab_report["FIRST_NAME"]."</td>";
			echo "<td>".$lab_report["LAST_NAME"]."</td>";
			echo "<td>".$lab_report["BMI"]."</td>";
			echo "<td>".$lab_report["BLOOD_GROUP"]."</td>";
			echo "<td>".$lab_report["CBC"]."</td>";
			echo "<td>".$lab_report["BP"]."</td>";
			echo "<td>".$lab_report["TEST"]."</td>";
			echo "</tr>";
			
		}

		
	}
	else
	{
		echo "error!! enter only pid present in table!";
	}
	mysqli_close($conn);
}

		


?>
</html>
