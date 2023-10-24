<?php
require_once"dbconfig.php";

 $id= $_SESSION['id'];
 $in_id=$_REQUEST['id'];

$n=iud("insert into interest(`userid`,`interested_id`) values ('$id','$in_id')");
if($n==1)
{
	echo"<script>alert('Suucessful');
		 window.location='index.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='index.php';
		 </script>";
}















?>