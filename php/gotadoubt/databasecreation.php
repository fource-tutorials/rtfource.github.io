<?php
$db=mysql_connect("localhost","root","");
if(!$db)
{
	echo "No Connection";
	exit();
}
$sql="CREATE DATABASE gotadoubt";
if(mysql_query($sql))
{
	echo "Database created";
}
else
{
	mysql_error();
}



?>