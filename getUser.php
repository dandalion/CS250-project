<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

<link rel="shortcut icon"  href="/green.ico/" type="image/x-icon"/>

<title>Join Us!</title>

<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="sheets/boozesheet.css" />	
</head>
<body>
<?php
include_once("connectdb.php");
?>
<h2>Sign up and let us know what you think!</h2>

<form method="POST" action="signup.php">
<table border="0">

<tr>	
<td>First Name</td>
<td> <input type="text" name="Fname"/> </td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="Lname"/></td>
</tr>
<tr>
<td>Birth Date </td>
<td><input type="text" id="DOB" size="10" name="DOB" /></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email"/></td>
</tr>
<tr>
<td>User Name</td>
<td><input type="text" name="memberID" value="" /></td>
</tr>
<tr>
<td>Your State</td>
<td><input type="radio" name="state" value="wa" />Washington</br>
    <input type="radio" name="state" value="or" />Oregon</br>
    <input type="radio" name="state" value="id" />Idaho</br>
</td>
</tr>
</table>
<table>
<tr>
<td>Password</td>
<td><input type="password" name="pswrd" value=""/></td></br>
</tr>
<tr>
<td>Enter again</td>
<td><input type="password" name="conpswrd" value="" /></td>
</tr>
</table>
<input type="submit" value="Sign Me Up!!" />


</form>
</body>
</html>
