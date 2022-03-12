<?php
$db=mysql_connect("localhost","root","");
if(!$db)
{
	echo "No Connection";
	exit();
}
mysql_select_db("gotadoubt",$db);
$sql="insert into doubt values('Rajan','Das','Student','Mumbai',9702427934,'rajandas1998@gmail.com','Good service');";
echo $sql;
if(mysql_query($sql))
    echo "data inserted";
else
	echo mysql_error();
?>