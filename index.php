<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
{
	echo "connected";
}
else
{
	echo "1";
}
mysqli_select_db($con,'nandha');
if(isset($_POST['submit']))
{
	$name = $_POST['name1'];
	$pas = $_POST['pas1'];

	$q = "select * from signin where name1 = '$name' && pas1 = '$pas'";
	$result=mysqli_query($con, $q);
	$num=mysqli_num_rows($result);
	
	if($num == 1)
	{
	echo "dupilicate";
	}
	else
	{
	$qy="insert into signin(name1, pas1) values ('$name','$pas')";
	mysqli_query($con, $qy);
	}
	
}
?>