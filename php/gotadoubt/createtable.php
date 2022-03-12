<?php
$db=mysql_connect("localhost","root","");
if(!$db)
{
	echo "No Connection";
	exit();
}
mysql_select_db("gotadoubt",$db);
$sql="create table doubt(firstname varchar(20),lastname varchar(20),school varchar(30),place varchar(20),contact varchar(10),email varchar(40),comment varchar(60));";
if(mysql_query($sql))
    echo "table created";
else
	echo mysql_error();
?>