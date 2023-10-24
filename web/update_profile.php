<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Match a Matrimonial Category Bootstrap Responsive Web Template | Bride Profile :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
<!-- nav smooth scroll -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //nav smooth scroll -->
</head>
<!-- //head -->
<!-- body -->
<body>
<!-- header -->

<header>
<!--  Navigation Start -->
<?php 
include"nav.php";
?>
</header>
<!-- /header -->

	<!-- inner banner -->	
	<div class="w3layouts-inner-banner">
		<div class="container">
			<div class="logo">
				<h1><a class="cd-logo link link--takiri" href="index.php">Match <span><i class="fa fa-heart" aria-hidden="true"></i>Made in heaven.</span></a></h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //inner banner -->	
	
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <a href="matches.php">Matches</a> > <span>Bride Profile Details</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->


	<!-- Bride Profile Details -->
	<div class="w3ls-list">
		<div class="container">
		<h2>Update Profile </h2>
		<div class="col-md-12 profiles-list-agileits">
			
			<div class="profile_w3layouts_details">
				<div class="container">
  <form method="post" action="myphp.php" enctype="multipart/form-data">
  <?php
 

								$ret=select("select * from reister where id='".$_SESSION['id']."'");
								while($t=mysqli_fetch_array($ret))
								{
									extract($t);
								?>
  <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="first"> Name</label>
          <input type="text" name="name" value="<?=$name?>" class="form-control" placeholder="" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">Date Of Birth</label>
          <input type="date" name="dob" value="<?=$dob?>" class="form-control" placeholder="" id="last">
        </div>
      </div>
	   
      <!--  col-md-6   -->
    </div>
	<div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="first"> Age</label>
          <input type="text" name="age" value="<?=$age?>"  class="form-control" placeholder="" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">Height</label>
          <input type="text" name="height" value="<?=$height?>"  class="form-control" placeholder="" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
	<div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="first"> Mobile</label>
          <input type="text" name="mobile" value="<?=$mobile?>"  class="form-control" placeholder="" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">Email</label>
          <input type="text" name="email" value="<?=$email?>"  class="form-control" placeholder="" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
  
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="first">Mother's Name</label>
          <input type="text" name="mother" class="form-control" value="<?=$mother?>" placeholder="" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">Father's Name</label>
          <input type="text" name="father" class="form-control" value="<?=$father?>"  placeholder="" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="company">profession</label>
          <input type="text" name="profession" class="form-control" value="<?=$profession?>" placeholder="" id="company">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">

        <div class="form-group">
          <label for="phone">Family Income</label>
          <input type="text" class="form-control" value="<?=$income?>"  name="income" id="phone" >
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->

<div class="row">
      <div class="col-md-4">

        <div class="form-group">
          <label for="email">Location</label>
          <input type="text" class="form-control" value="<?=$location?>"  name="location" id="email" >
          <input type="hidden" class="form-control" value="<?=$id?>"  name="id" id="email" >
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="url">Hobby</label>
          <input type="text" class="form-control" value="<?=$Hobbies?>"  name= "hobby" id="url" >
        </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <div class="row">
      <div class="col-md-4">

        <div class="form-group">
          <label for="email">Highest Education</label>
          <input type="text" class="form-control" value="<?=$qualification_details?>"  name="qualification" id="email" >
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="url">Lifestyle</label>
          <input type="text" class="form-control" value="<?=$lifestyle?>"  name= "lifestyle" id="url" >
        </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


   <div class="row">
      <div class="col-md-4">

        <div class="form-group">
          <label for="email">Language</label>
          <input type="text" name="language" value="<?=$language?>" class="form-control" id="email" >
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="url">Marital Status</label>
          <input type="text" class="form-control"  value="<?=$marital?>" name= "marital" id="url" >
        </div>

      </div>
      <!--  col-md-6   -->
    </div>
<div class="row">
      <div class="col-lg-4">

        <div class="form-group">
          <label for="email">Blood Group</label>
          <input type="text"  class="form-control" value="<?=$bg?>" name="bg" id="email" >
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-lg-4">
        <div class="form-group">
          <label for="url">Change Image</label>
          <input type="file" class="form-control" name= "myfile" id="url" >
        </div>

      </div>
      <!--  col-md-6   -->
    </div>
	
	<div class="row">
      <div class="col-md-4">

        <div class="form-group">
          <label for="email">About You</label>
           <textarea  name="about" class="form-control" id="email" ><?=$about?></textarea>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="url">uploaded image</label>
        <img src="images/<?=$img?>" style="height:100px">
      </div>  

      </div>
      <!--  col-md-6   -->
    </div>

    <button type="submit" name="update_profile" class="btn btn-primary">Submit</button>
	<?php
  }
	?>
  </form>
</div>
			</div>
		</div>
		
	<div class="clearfix"></div>
	</div>
	<!-- Modal -->
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form id="signin" action="#" method="post">
								<label>User Name </label>
								<input type="text" name="User Name" placeholder="Username" required="">
								<label>Password</label>
								<input type="password" name="Password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									<input type="checkbox" id="brand" name="checkbox" value="">
									<span> Remember me ?</span> 
									<a href="#">Forgot password ?</a>
								</div>
								<div class="clearfix"> </div>
								<input type="submit" name="submit" value="Login">
								<div class="clearfix"> </div>
								<div class="social-icons">
									<ul>  
										<li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li> 
										<li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>  
									</ul> 
									<div class="clearfix"> </div>
								</div>	
							</form>
						</div>
					  </div>
					</div>

				  </div>
				</div>
				<!-- //Modal -->
	</div>
	<!-- //Bride Profile Details -->
	
	<!-- browse profiles -->
	
	<div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a href="index.php">Get started</a></h4>
		</div>
	</div>
	<!-- //Get started -->
	
	
<!-- footer -->
<footer>
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 Match. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
		</div>
	</div> 
</footer>
<!-- //footer -->	
<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>
	<!-- //for smooth scrolling -->
</body>
<!-- //body -->
</html>
<!-- //html -->
