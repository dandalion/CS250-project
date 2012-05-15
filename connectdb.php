
<?php
	$user = "root";
	$passwd = "<3myfrog";
	
	$connect = mysql_connect('localhost', $user, $passwd)
	   or die('Could not connect: ' . mysql_error());
	
	$db = 'books';
	mysql_select_db($db) or die('Could not select database ('.$db.') because of : '.mysql_error());

	mysql_close($connect);
?>
