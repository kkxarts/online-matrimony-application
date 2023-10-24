<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Match a Matrimonial Category Bootstrap Responsive Web Template | About :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
 <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
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

<?php include"nav.php";?>
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
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>About Us</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- about us -->
	<div class="w3l_about">
		<div class="container">
			<h3>About Us</h3>
			<p style="text-align:justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
		</div>
	</div>
	
	<!-- success stories -->
	<div class="w3_success-stories">
		<div class="container">
			<h4>Our Successful Stories</h4>
			<div class="w3l_about_left col-md-6 text-center">
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/s1.png" alt=" " class="img-responsive" /></a>
				<div class="w3l_about_left_pos">
					<h3>Groom <span>& </span>Bride</h3>
				</div>
			</div>
			<div class="w3l_about_left col-md-6 text-center">
				<a href="#" data-toggle="modal" data-target="#myModal2"><img src="images/s2.png" alt=" " class="img-responsive" /></a>
				<div class="w3l_about_left_pos1">
					<h3>Groom <span>& </span>Bride</h3>
				</div>
			</div>
			<div class="w3l_about_left col-md-6 text-center">
				<a href="#" data-toggle="modal" data-target="#myModal3"><img src="images/s3.png" alt=" " class="img-responsive" /></a>
				<div class="w3l_about_left_pos">
					<h3>Groom <span>& </span>Bride</h3>
				</div>
			</div>
			<div class="w3l_about_left col-md-6 text-center">
				<a href="#" data-toggle="modal" data-target="#myModal4"><img src="images/s4.png" alt=" " class="img-responsive" /></a>
				<div class="w3l_about_left_pos1">
					<h3>Groom <span>& </span>Bride</h3>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
			<!-- Success_Story Modal1 -->
				<div id="myModal1" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Bride and Groom</h4>
					  </div>
					  <div class="modal-body">
					  <div class="success_w3_story">
							<img src="images/s1.png" alt=" " class="img-responsive" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
							It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
							and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					  </div>
					</div>

				  </div>
				</div>
			<!-- //Success_Story Modal1 -->
			<!-- Success_Story Modal2 -->
				<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Bride and Groom</h4>
					  </div>
					  <div class="modal-body">
					  <div class="success_w3_story">
							<img src="images/s2.png" alt=" " class="img-responsive" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
							It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
							and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					  </div>
					</div>

				  </div>
				</div>
			<!-- //Success_Story Modal2 -->
			<!-- Success_Story Modal3 -->
				<div id="myModal3" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Bride and Groom</h4>
					  </div>
					  <div class="modal-body">
					  <div class="success_w3_story">
							<img src="images/s3.png" alt=" " class="img-responsive" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
							It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
							and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					  </div>
					</div>

				  </div>
				</div>
			<!-- //Success_Story Modal3 -->
			<!-- Success_Story Modal4 -->
				<div id="myModal4" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Bride and Groom</h4>
					  </div>
					  <div class="modal-body">
					  <div class="success_w3_story">
							<img src="images/s4.png" alt=" " class="img-responsive" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
							It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
							and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					  </div>
					</div>

				  </div>
				</div>
			<!-- //Success_Story Modal4 -->
		<!-- //Success Stories  -->
		
	<!-- services -->
	<div class="agileits_services">
		<div class="container">
			<h2>We are no. 1...<span>WHY?</span></h2>
			<div class="col-md-6 w3ls_services-grids">
				<ul class="w3_servicesgrid_info">
					<li class="tick">genuine Profiles in our website.</li>
					<li class="tick">Lorem Ipsum is simply dummy text.</li>
					<li class="tick">It is a long established fact that be distracted.</li>
				</ul>
			</div>
			<div class="col-md-6 w3ls_services-grids">
				<ul class="w3_servicesgrid_info">
					<li class="tick">Best Service Support</li>
					<li class="tick">There are many variations of passages.</li>
					<li class="tick">The standard chunk Ipsum used since the 1500s.</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wthree_services-bottom">
		<p>Our company have more than<span>200.000 customers</span>around the world!</p>
	</div>
	</br>
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
