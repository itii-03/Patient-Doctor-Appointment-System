<?php
include("connection.php");
$sql="SELECT DOCTOR.DEPARTMENT_SPECIALIZATION,patient.PID,doctor.DOC_ID FROM patient INNER JOIN doctor ON patient.PROBLEM_DOMAIN=doctor.DEPARTMENT_SPECIALIZATION";
$records = mysqli_query($conn,$sql); 
?>
<html>
<head>
<title>doc_alloc</title>
</head>
<body>
<table width = "600" border="1" cellspacing="1">
<tr>
<th>Domain</th>
<th>PID</th>
<th>DOC_ID</th>
</body>
<?php
while ($doc_alloc = mysqli_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$doc_alloc["DEPARTMENT_SPECIALIZATION"]."</td>";
	echo "<td>".$doc_alloc["PID"]."</td>";
	echo "<td>".$doc_alloc["DOC_ID"]."</td>";
	echo "</tr>";
}

?>
</html>
