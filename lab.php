<?php
include("connection.php");
$sql="select PID,DOC_ID,DEPARTMENT from patient";
$records = mysql_query($sql); 
?>
<html>
<head>
<title>lab_report</title>
</head>
<body>
<table width = "1800" border="1" cellspacing="1">
<tr>
<th>PID</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>AGE</th>
<th>WEIGHT</th>
<th>GENDER</th>
<th>PHONE</th>
<th>ADDRESS</th>
<th>PROBLEM DOMAIN</th>
<th>PROBLEM</th>
<th>BLOOD_GROUP</th>
<th>PROBLEM</th>
		<form action="" method="GET">
 		<label for="BMI"><b>BMI</b></label><br>
                <input type="number" placeholder="Enter BMI" name="bmi" required><br>
                <label for="cbc"><b>Enter cbc</b></label><br>
                <input type="text" placeholder="Enter cbc" name="cbc" required><br>
		<label for="BP"><b>BP</b></label><br>
                <input type="number" placeholder="Enter BP" name="bp" required><br>
		<label for="test"><b>TEST</b></label><br>
                <input type="text" placeholder="test result" name="test" required><br>
		<a href="lab_report.php"><button type="submit" name="Generate lab report" >SUBMIT</button></a>
		</form>
    
               
</body>
<?php
while ($patient = mysql_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$patient["PID"]."</td>";
	echo "<td>".$patient["FIRST_NAME"]."</td>";
	echo "<td>".$patient["LAST_NAME"]."</td>";
	echo "<td>".$patient["AGE"]."</td>";
	echo "<td>".$patient["WEIGHT"]."</td>";
	echo "<td>".$patient["GENDER"]."</td>";
	echo "<td>".$patient["PHONE"]."</td>";
	echo "<td>".$patient["ADDRESS"]."</td>";
	echo "<td>".$patient["PROBLEM_DOMAIN"]."</td>";
	echo "<td>".$patient["BLOOD_GROUP"]."</td>";
	echo "<td>".$patient["PROBLEM"]."</td>";
	echo "</tr>";
}
	$pid = $patient["PID"];
	$pf = $patient["FIRST_NAME"];
	$pl = $patient["LAST_NAME"];
	$bg = $patient["BLOOD_GROUP"];
?>
</html>
<?php
if($_GET['Genarate lab_report'])
{
	$cbc = $_GET['cbc'];
	$bmi = $_GET['bmi'];
	$test = $_GET['test'];
	$bp = $_GET['bp'];
	$query = "INSERT INTO LAB_REPORT VALUES('$pid','$pf','$pl','$bmi','$bg ','$cbc','$bp','$test')";
		$data = mysqli_query($conn,$query);
}

?>
