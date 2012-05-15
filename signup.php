
<?php
include_once("connectdb.php");
?>
<?php
	$memberID  = ($_REQUEST['memberID']);
	$Fname = ($_REQUEST['Fname']);
	$Lname = ($_REQUEST['Lname']);
	$state = ($_REQUEST['state']);	
	$email = ($_REQUEST['email']);
	$DOB   = ($_REQUEST['DOB']);
	
	//$pswrd = ($_REQUEST["pswrd"]);
	//$conpswrd  = ($_REQUEST["conpswrd"]);

	

$sql = "INSERT INTO Members (memberID, Fname, Lname, state, email, DOB)
	VALUES ( '$memberID', '$Fname', '$Lname', '$state', '$email', '$DOB')";


?>
 
