<?php

session_start();

$con=mysqli_connect('localhost','root','');
if($con)
{
	echo "connected";
}
else
{
	echo "not ";
}
mysqli_select_db($con,'pandu');


	$name = $_POST['names'];
	$pas = $_POST['pass'];
	$tel=$_POST['phs'];

	$q = "select * from sign where number= '$name' && name='$pas' && pwd='$tel'";
	$result=mysqli_query($con, $q);
	$num=mysqli_num_rows($result);
	
	if($num ==1)
	{
	echo "dupilicate";
	}
	else
	{
	$qy="insert into sign(number, name,pwd) values ('$name','$pas','$tel')";
	mysqli_query($con, $qy);
	}
	
}
?>