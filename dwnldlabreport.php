<?php
include("connection.php");
?>
<html>
<head>
<title>lab_report</title>
</head>
<body>

</body>

<?php

	
	$query = "SELECT * FROM lab_report";
	$result = mysqli_query($conn,$query);
	$lab_report = mysqli_fetch_assoc($result);
	echo ("<br>MEDITECH HOSPITAL<br><br>");
			echo "MR. ".$lab_report["FIRST_NAME"]."  ".$lab_report["LAST_NAME"]. "has been admitted to our hospital<br>";
			echo "after his medical test his BMI is ".$lab_report["BMI"].",his blood group ".$lab_report["BLOOD_GROUP"];
			echo "<br>his CBC ".$lab_report["CBC"]."and is BP ".$lab_report["BP"];
			echo "<br>the test has been ".$lab_report["TEST"];
	mysqli_close($conn);
		


?>
</html>
