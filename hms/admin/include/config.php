<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hms";
$connection=mysqli_connect($mysql_hostname, $mysql_user, $mysql_password); if (!$connection)
	{
	die ('Could not connect:'.mysql_error());
	};
mysqli_select_db($connection,$mysql_database);if (!$connection)
	{
	die ('Could not connect:'.mysql_error());
	};

?>