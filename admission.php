<?php
include("connection.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>
        admission
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
            <div class="main-heading">
                    <div class="img">
                            <img id="title-img" src="https://cdn2.vectorstock.com/i/1000x1000/96/81/cross-hospital-logo-vector-17069681.jpg">
                        </div>
               <div  class="main-title">
                    MEDITECH</div>
           
                <div class="subtitle">
                    <a href="login.html" style="text-decoration: none";>alandi 
                            </a>
                </div>
            </div>
            <div class="strip"><marquee direction="left">A person who is healthy lives a longer life!!!</marquee></div>
            <div class="main">
                <div class="column1">
          
                            </div>
                              <div id="mySidenav" class="sidenav">
                                    <a href="index.php" id="home">HOME</a>
                                    <a href="admission.php" id="admission">ADMISSION</a>
                                    <a href="history.html" id="history">HISTORY</a>
                                    <a href="expert_choice.php" id="expert">EXPERT</a>
                                    <a href="alert.html" id="alert">ALERT</a>
                                    <a href="contact.html" id="contact">CONTACT</a>
                                  </div>
                                  
                                
                </div>
                <div class="column2">
                
                </div>
                <div class="column3">
                  
                 <div class="container">
		<form action="" method="POST">
                <label for="pname"><b>Enter first Name</b></label><br>
                <input type="text" placeholder="Enter first name" name="FIRST_NAME" required><br>
                <label for="pname"><b>Enter last Name</b></label><br>
                <input type="text" placeholder="Enter last name" name="LAST_NAME" required><br>
                <label for="GENDER"><b>Gender</b></label><br>
                <input type="radio" name="GENDER" value="male">male<br>
                <input type="radio" name="GENDER" value="female">female<br>
                <label for="age"><b>Enter age</b></label>
                <input type="number" placeholder="Enter age" name="AGE" required>
                <label for="pweight"><b>Weight</b></label>
                <input type="number" placeholder="weight" name="WEIGHT" required><br><br>
                <label for="pblood"><b>blood group</b></label>
                <input type="text" placeholder="blood group" name="BLOOD_GROUP"><br><br>
                <label for="paddress"><b>Address</b></label><br>
                <input type="text" placeholder="Enter address" name="ADDRESS" required><br>
                <label for="pmobile"><b>Phone no</b></label><br>
                <input type="number" placeholder="Enter mobile number" name="PHONE" required><br>
                <label for="problem"><b>Problem</b></label><br>
                <input type="text" placeholder="Tell your problem" name="PROBLEM" required><br>
                <label for="problem"><b>Problem Domain</b></label><br>
                <input type="radio" name="PROBLEM_DOMAIN" value="cardio">CARDIO<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="ortho">ORTHO<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="ent">ENT<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="neurology">NEUROLOGY<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="dental">DENTAL<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="optical">OPTICAL<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="dermotology">DERMOTOLOGY<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="pediatrics">PEDIATRICS<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="medicine">MEDICINE<br>
                <input type="radio" name="PROBLEM_DOMAIN" value="General">GENERAL<br>
		<button type="submit" name="submit" >SUBMIT</button>
		<a href="doc_alloc.php">CHECK DOCTOR ALLOCATED</a><br>
		<a href="lab_report.php">VIEW LAB REPORT</a>
		</form>
    
                  
                    </div>
                 </div>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
	$pid=2;
	$pid++;
	$pf = $_POST['FIRST_NAME'];
	$pl = $_POST['LAST_NAME'];
	$age = $_POST['AGE'];
	$wt = $_POST['WEIGHT'];
	$gen = $_POST['GENDER'];
	$mob = $_POST['PHONE'];
	$add = $_POST['ADDRESS'];
	$prblmdmn = $_POST['PROBLEM_DOMAIN'];
	$bg = $_POST['BLOOD_GROUP'];	
	$prblm = $_POST['PROBLEM'];
	$query = "INSERT INTO PATIENT VALUES('$pid','$pf','$pl','$age','$wt','$gen','$mob','$add','$prblmdmn','$bg','$prblm')";
		$data = mysqli_query($conn,$query);
}

?>