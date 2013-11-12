<?php 
/*
Base class for SQL connection information.
*/
if(isset($_POST['mysql_host']) && isset($_POST['mysql_user']) && isset($_POST['mysql_pass'])){
	try
	{
	$host=$_POST['mysql_host'];
	$dbinfo= new PDO("mysql:host=$host",$_POST['mysql_user'],$_POST['mysql_pass']);
	$fetch = $dbinfo -> query('SHOW DATABASES');
		while( ( $db = $fetch->fetchColumn( 0 ) ) !== false )
		{
		    echo $db.'<br>';
		}
	}
	catch(PDOException $ex)
	{
	echo "Error in SQL connection";
	}
}
else
{
echo "Error parsing values";
}
?>
