<?php
require_once"dbconfig.php";
//require_once"validation.php";
##################################################

###########################################################
	if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	 $query="select * from reister where email='$email' and password='$password'";
	
	
	
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['id']=$id;
		//$_SESSION['name']=$name;
		//$_SESSION['image']=$image;
		$_SESSION['login']="yes";
		
		echo"<script>alert('Login success');
		 window.location='index.php';
		 </script>";
	}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}

#############################################
if(isset($_REQUEST['add_cast']))
{
	extract($_REQUEST);
	 $t="INSERT INTO `cast`( `cast_name`)  VALUES ('$cast_name')";
	 $n=iud($t);
	if($n==1)
	{
		echo"<script>alert('Added');
		 window.location='basic_tables.php';
		 </script>";
	}else
	{
		echo"<script>alert('Something Wrong');
		 window.location='basic_tables.php';
		 </script>";
	}
}
	
#############################################
if(@$_REQUEST['deleteservice']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("UPDATE `services` SET `status`='0' WHERE service_id='$id'");
if($n==1)
{
	echo"<script>alert('Delete Successful');
		 window.location='view_service.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_service.php';
		 </script>";
}
}	
#############################################
if(isset($_REQUEST['updateservice']))
{
extract($_REQUEST);
$n=iud("UPDATE `services` SET `service_name`='$service_name' WHERE service_id='$id'");
if($n==1)
{
	echo"<script>alert('Update Successful');
		 window.location='view_service.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_service.php';
		 </script>";
}
}	

###########################################################################
if(isset($_REQUEST['register']))
{
	extract($_REQUEST);
	$error=$_FILES["myimage"]["error"];

$img_name=$_FILES["myimage"]["name"];
$type=$_FILES["myimage"]["type"];
$size=$_FILES["myimage"]["size"];
$tmp_name=$_FILES["myimage"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$img_name");
	
	 echo $t="INSERT INTO `reister`( `name`, `cast`, `gender`, `age`, `dob`, `height`, `religion`, `mobile`, `email`,
	 `password`, `img`) VALUES ('$name','$cast','$gender','$age','$dob','$height','$religion','$mobile',
	 '$email','$password','$img_name')";
	
	 $n=iud($t);
	if($n==1)
	{
		echo"<script>alert('Registration Successful');
		 window.location='index.php';
		 </script>";
	}else
	{
		echo"<script>alert('Something Wrong');
		 window.location='index.php';
		 </script>";
	}
}
###########################################################################
if(@$_REQUEST['deleteadver']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("UPDATE `advertisement` SET `status`='0' WHERE ad_id='$id'");
if($n==1)
{
	echo"<script>alert('Delete Successful');
		 window.location='view_advertisement.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_advertisement.php';
		 </script>";
}
}	
###########################################################################
if(isset($_REQUEST['updateadver']))
{
extract($_REQUEST);
 $ut="UPDATE `advertisement` SET `title`='$title', `description`='$description' WHERE ad_id='$id'";

$n=iud($ut);
if($n==1)
{
	echo"<script>alert('Update Successful');
		 window.location='view_advertisement.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_advertisement.php';
		 </script>";
}
}	
###########################################################################
if(isset($_REQUEST['updatenews']))
{
	extract($_REQUEST);
	 echo $t1="UPDATE `newsevent` SET `type`='$type',`title`='$title', `description`='$description' WHERE id='$id'";
	
	 
	 $n=iud($t1);
	if($n==1)
	{
		echo"<script>alert('Update_success');
		 window.location='view_news.php';
		 </script>";
	}else
	{
		echo"<script>alert('Something Wrong');
		 window.location='view_news.php';
		 </script>";
	}
}
###########################################################################
if(isset($_REQUEST['savenews']))
{
	extract($_REQUEST);
	 echo $t1="INSERT INTO `newsevent`( `type`, `title`, `description` ) VALUES  ('$type','$title','$description')";
	
	 
	 $n=iud($t1);
	if($n==1)
	{
		echo"<script>alert('Added');
		 window.location='view_news.php';
		 </script>";
	}else
	{
		echo"<script>alert('Something Wrong');
		 window.location='view_news.php';
		 </script>";
	}
}
###########################################################################
if(@$_REQUEST['deletenews']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("UPDATE `newsevent` SET `status`='0' WHERE id='$id'");
if($n==1)
{
	echo"<script>alert('Delete Successful');
		 window.location='view_news.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_news.php';
		 </script>";
}
}	
###########################################################################
if(isset($_REQUEST['update_profile']))
	{
		
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name_i=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$name_i");
	
		  $query="UPDATE `reister` SET `name`='$name',
		 `age`='$age',`dob`='$dob',`height`='$height',
		 `mobile`='$mobile',`email`='$email',`img`='$name_i',`profession`='$profession',
		 `qualification_details`='$qualification',`Hobbies`='$hobby',`location`='$location',
		 `about`='$about',`mother`='$mother',`father`='$father',`income`='$income',`lifestyle`='$lifestyle',
		 `language`='$language',`bg`='$bg',`marital`='$marital' WHERE id='$id'";
	$n=iud($query);
	 if($n==1)
	 {
		
		echo"<script>alert(' Updated successfully');
		 window.location='update_profile.php';
		 </script>";
		
		 }
		 else
		 {
			 echo"<script>alert(' Something Wrong');
		 window.location='update_profile.php';
		 </script>";
		 }
	
	}
	
##########################################################################

	if(@$_REQUEST['deletepannel']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("UPDATE `servicepannel` SET `status`='0' WHERE id='$id'");
if($n==1)
{
	echo"<script>alert('Delete Successful');
		 window.location='view_service_pannel.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_service_pannel.php';
		 </script>";
}
}
	
	
##########################################################################
if(isset($_REQUEST['update_service_pannel']))
	{
		
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$name");
	
		 $query="UPDATE `servicepannel` SET  `service_id`='$service', `title`='$title', `image`='$name', `description`='$description'  where id='$id'";
	$n=iud($query);
	 if($n==1)
	 {
		
		echo"<script>alert(' uploaded successfully');
		 window.location='view_service_pannel.php';
		 </script>";
		
		 }
		 else
		 {
			 echo"<script>alert(' Something Wrong');
		 window.location='view_service_pannel.php';
		 </script>";
		 }
	
	}
	
##########################################################################
if(isset($_REQUEST['save_product']))
	{
		
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$name");
	
		 $query="INSERT INTO `product`( `title`, `image`, `description`, `market_price`, `organic_price`) VALUES('$title','$name','$description','$market_price','$organic_price')";
	$n=iud($query);
	 if($n==1)
	 {
		
		echo"<script>alert(' uploaded successfully');
		 window.location='view_product.php';
		 </script>";
		
		 }
		 else
		 {
			 echo"<script>alert(' Something Wrong');
		 window.location='view_product.php';
		 </script>";
		 }
	
	}
##########################################################################
if(@$_REQUEST['deleteproduct']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("UPDATE `product` SET `status`='0' WHERE product_id='$id'");
if($n==1)
{
	echo"<script>alert('Delete Successful');
		 window.location='view_product.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_product.php';
		 </script>";
}
}
##########################################################################
	if(isset($_REQUEST['update_product']))
	{
		
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$name");
	
		 $query="UPDATE  `product` SET `title`='$title', `image`='$name', `description`='$description', `market_price`='$market_price', `organic_price`='$organic_price' where product_id='$id'";
	      $n=iud($query);
	 if($n==1)
	 {
		
		echo"<script>alert(' Updated successfully');
		 window.location='view_product.php';
		 </script>";
		
		 }
		 else
		 {
			 echo"<script>alert(' Something Wrong');
		 window.location='view_product.php';
		 </script>";
		 }
	
	}
	   
	
	
	










?>