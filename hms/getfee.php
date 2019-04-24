
<?php $mysql_hostname = "localhost";
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
if($_GET['action']=='doctorid'){
	$docinfo=$_POST['docinfo'];
	$query= mysqli_query($connection,"select * from doctors where doctorName=$docinfo");
	$array=mysqli_fetch_array($query);
	echo $array['docFees'];
	
	}
	?>