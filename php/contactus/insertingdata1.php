<?php
$n=$_POST['name1'];
$em=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];
$db=mysql_connect("localhost","root","");
if(!$db)
{
	echo "No Connection";
	exit();
}
mysql_select_db("contactus",$db);
$sql="insert into feedback values('Raj','raj@gmail.com','enquiry','nt');";
if(mysql_query($sql))
    echo "data inserted";
else
	echo mysql_error();
?>