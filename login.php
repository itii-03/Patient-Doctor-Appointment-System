<?php
include("connection.php");
$sql="select * from DOCTOR";
$result = mysql_query($sql); 
?>
<!DOCTYPE html>
<html>
    <head>
    <title>login-page</title>
</head><body>

        <h2>Login Form</h2>
        
        <form action="" method="POST">
          <div class="imgcontainer">
            <img src="https://png.pngtree.com/svg/20161229/_username_login_1172579.png" alt="Avatar" class="avatar">
          </div>
        
          <div class="container">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" required><br>
        
            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" required><br>
                
            <button type="submit" name="submit">Login</button><br>
    
          </div>
        
     
        </form>
        
        </body>
        </html>
<?php

if (isset($_POST["submit"]))
{
	$user = $_POST["uname"];
	$pass = $_POST["psw"];
	$query = "select * from DOCTOR where USERNAME='$user' && PASSWORD='$pass'";
	$result = mysqli_query($conn,$query);
	$row = $conn->query($query);
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$doc_id = $row['DOC_ID'];
			$fs = $row['FIRST_NAME'];
			$fl = $row['LAST_NAME'];
			$ds = $row['DEPARTMENT_SPECIALIZATION'];
			$degree = $row['DEGREE'];
			$user = $row['USERNAME'];
			$pass= $row['PASSWORD'];
			while ($lab_report = mysql_fetch_assoc($records))

	echo "<tr>";
	echo "<td>".$DOCTOR["PID"]."</td>";
	
	echo "<td>".$DOCTOR["FIRST_NAME"]."</td>";

	echo "<td>".$DOCTOR["LAST_NAME"]."</td>";

	echo "<td>".$DOCTOR["DEPARTMENT_SPECIALIZATION"]."</td>";

	echo "<td>".$DOCTOR["DEGREE"]."</td>";

	echo "<td>".$DOCTOR."</td>";
	echo "<td>".$lab_report["USERNAME"]."</td>";
	echo "<td>".$lab_report["PASSWORD"]."</td>";
	
	echo "</tr>";

			
		}
	}
	else
	{
		echo "$nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;nbsp;undefined username";
	}
	mysqli_free_result($result);
	mysqli_close($conn);

}
?>  
