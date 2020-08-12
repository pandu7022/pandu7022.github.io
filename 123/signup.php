<?php
session_start();
$con=mysql_connect("localhost","root","");
if($con){
	echo "string";
}else{
	echo "1";
}


mysql_select_db($con,'pandu');
$name = $_POST['name1'];
$pas = $_POST['pas1'];

$q = "select * from signin where name1 = '$name' && pas1 = '$pas'";
$res =mysqli_query($con,$q);
$row = mysqli_num_rows($res)
if($row == TRUE)
{
echo "dupilicate";
}
else
{
	$qy="insert into signin(name1, pas1) values ('$name','$pas')";
	mysqli_query($con,$qy);
}
?>