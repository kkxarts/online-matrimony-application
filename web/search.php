<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Match a Matrimonial Category Bootstrap Responsive Web Template | Search :: w3layouts</title>
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
<body >
<!-- header -->

<header>
	<!--  Navigation Start -->
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
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>Search</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->


	<!-- Search form -->
	<div class="w3ls-list">
		<div class="container">
		<h2>Search your Match</h2>
		<div class="col-md-12 profiles-list-agileits">
		<!--Horizontal Tab-->
			<div id="parentHorizontalTab">
				<ul class="resp-tabs-list hor_1">
					<li>Regular Search</li>
				</ul>
				<div class="resp-tabs-container hor_1">
					<div>	
						<div class="w3_regular_search">
							<form action="search_result.php" method="post">	
							   <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Gender : </label>
								<div class="col-sm-7 form_radios">
									<input type="radio" name="gender" value="male" checked> Male &nbsp;&nbsp;
									<input type="radio" name="gender" value="female"> Female<br>
									
									<!--<hr />
									<p id="sel"></p><br />
									<input id="btnRadio" type="button" value="Get Selected Value" />-->
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Age in years : </label>
								<div class="w3agile__text col-sm-7 w3agile_banner_btom_login_left1">
									<input type="text" name="age_min">
									<span>To </span>
									<input type="text" name="age_max">
								</div>
								<div class="clearfix"></div>
							</div>
											
							  
							  
							  
							 
							  <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Religion : </label>
								<div class="col-sm-7 form_radios">
								  <div class="select-block1">
									<input type="text" name="religion">
								  </div>
								</div>
								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Cast : </label>
								<div class="col-sm-7 form_radios">
								  <div class="select-block1">
									<input type="text" name="cast">
								  </div>
								</div>
								<div class="clearfix"> </div>
							  </div>
							  
							  
							  
							  <input type="submit" name="search" value="Search" />
							</form>
						</div>
					</div>
					<div>
						
					</div>
				</div>
			</div>
		</div>
		
	<div class="clearfix"></div>
	</div>
	</div>
	<script src="js/easyResponsiveTabs.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
		
					$name.text($tab.text());
		
					$info.show();
				}
			});
	 
		});
	</script>
	<!-- //Search form -->
	
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
