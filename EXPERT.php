<?php
include("connection.php");
$sql="SELECT * FROM DOCTOR";
$records = mysqli_query($conn,$sql); 
?>
<html>
<head>
<title>doc_alloc</title>
</head>
<body>
<table width = "600" border="1" cellspacing="1">
<tr>
<th>Doctor_id</th>
<th>first_name</th>
<th>last_name</th>
<th>Department</th>
<th>Degree</th>
<th>Username</th>
</body>
<?php
while ($doctor = mysqli_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$doctor["DOC_ID"]."</td>";
	echo "<td>".$doctor["FIRST_NAME"]."</td>";
	echo "<td>".$doctor["LAST_NAME"]."</td>";
	echo "<td>".$doctor["DEPARTMENT_SPECIALIZATION"]."</td>";
	echo "<td>".$doctor["DEGREE"]."</td>";
	echo "<td>".$doctor["USERNAME"]."</td>";
	echo "</tr>";
}


?>
</html>
