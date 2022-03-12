<?php
$db=mysql_connect("localhost","root","");
if(!$db)
{
	echo "No Connection";
	exit();
}
mysql_select_db("contactus",$db);
$sql="create table feedback(name varchar(20),email varchar(40),subject varchar(60),message varchar(60));";
if(mysql_query($sql))
    echo "table created";
else
	echo mysql_error();
?>