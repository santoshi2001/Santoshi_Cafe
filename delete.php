<?php
include("dbconnect.php");

	if(isset($_GET['id']))
	{
		$del_id=$_GET['id'];
		$q="DELETE FROM dishes WHERE id=$del_id";
		$res=mysqli_query($con,$q);
		if(!$res)
		{
			die("Failed");
		}
		else
		{
			header("Location:dishes.php");
		}
	}
	


?>