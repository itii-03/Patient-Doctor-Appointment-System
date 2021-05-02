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
                <input type="text" placeholder="Enter doctor id" name="doc_id" required><br>

<button type="delete" name="delete" >delete</button>
</html>
<?php
if(isset($_POST['delete']))
{
	$doc_id = $_POST['doc_id'];
	
	$query = "DELETE FROM DOCTOR WHERE DOC_ID= $doc_id";
	$result = mysqli_query($conn,$query);
	if($result)
	{
		echo "data deleted successfully";
	}
	else
	{
		echo "UNSUCCESFULL ";
	}
	mysqli_close($conn);
}
?>
