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
	
	
	
	<div class="w3ls-list">
		<div class="container">
		<h2>Profile View</h2>
		<div class="col-md-12 profiles-list-agileits">
			<?php
			$t=select("select * from reister where id='".$_REQUEST['id']."'");
			while($r=mysqli_fetch_array($t))
			{extract($r);
			?>
			
				<div class="container" >
				<div class="row" >
	  <div class="col-sm-4" style="background-color:lavender;font-weight:;font-size:25px;height:200px"></div>
	  <div class="col-sm-4" style="background-color:lavender;font-weight:;font-size:25px;height:200px">
	  <img src="images/<?=$img?>" style="border-radius: 80%;height:200px;width:200px">
	  
	  
	  </div>
   <div class="col-sm-4" style="background-color:lavender;font-weight:;font-size:25px;height:200px"></div>
</div>
	<div class="row" >
	  <div class="col-sm-4" style="background-color:lavender;font-weight:;font-size:25px;height:200px"></div>
	  <div class="col-sm-8" style="background-color:lavender;font-weight:;font-size:25px;height:200px">
	  Name- <?=  ucwords($name);?></br>
	  Religion- <?=  ucwords($religion);?></br>
	  Cast- <?= ucwords($cast);?></br>
	  
	  </div>
   
</div>
  
</div>
<?php
			}
?>
			</div>
		
		
	<div class="clearfix"></div>
	</div>
	<!-- Modal -->
				
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
