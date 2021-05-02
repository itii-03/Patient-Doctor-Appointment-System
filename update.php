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
<form method="POST" action="">
  <label for="doc"><b>Enter DOCTOR ID</b></label><br>
                <input type="text" placeholder="Enter doctor id" name="DOCTOR_ID" required><br>
	<label for="USERNAME"><b>Enter username</b></label><br>
  	<input type="text" placeholder="Enter username" name="USERNAME"><br>
	<label for="PASSWORD"><b>Enter PASSWORD</b></label><br>
  	<input type="text" placeholder="Enter password" name="password"><br>
	<label for="DEGREE"><b>Enter DEGREE</b></label><br>
  	<input type="text" placeholder="Enter Updated degree" name="degree"><br>

<button type="UPDATE" name="UPDATE" >UPDATE</button>
</html>
<?php
if(isset($_POST['UPDATE']))
{
	$doc_id = $_POST['DOCTOR_ID'];
	$username=$_POST['USERNAME'];
	$password=$_POST['password'];
	$degree=$_POST['degree'];
	
	$query = "UPDATE DOCTOR SET USERNAME=$username,PASSWORD=$password,DEGREE=$degree WHERE DOC_ID=$doc_id";
	$result = mysqli_query($conn,$query);
	if($result)
	{
		echo "data updated successfully";
	}
	else
	{
		echo "UNSUCCESFULL ";
	}
	mysqli_close($conn);
}
?>
