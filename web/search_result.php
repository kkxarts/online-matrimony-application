<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Match a Matrimonial Category Bootstrap Responsive Web Template | index :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript">
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
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

	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->			
<link rel="stylesheet" href="css/intlTelInput.css">
</head>
<!-- //head -->
<!-- body -->
<body>

<!-- header -->
<header>
<?php
$n="active";
?>
<?php include"nav.php";?>

</header>
<!-- /header -->

	
	<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Featured Profiles</h2>
					<?php
					extract($_REQUEST);
					 $q="select * from Payment where userid='".$_SESSION['id']."'";
					$u=select($q);
					
					if(!(mysqli_num_rows($u)>=1))
					{
						echo"<h2>You can Not View Any Profile</h2>";
					}	
else
{
	while($i=mysqli_fetch_array($u))
	{
		extract($i);
	}
	if($amount==300)
	{
		?>
		<ul id="flexiselDemo3">
								<li>
								<?php
							 	$o="select * from reister where gender='$gender' and age between
								'$age_min' and '$age_max' and religion like '%$religion%' and cast like '%$cast%'
								order by id desc limit 0,10";
								$ret=select($o);
								while($t=mysqli_fetch_array($ret))
								{extract($t);
								?>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php?id=<?=$id?>">
											<div class="profile-image">
												<img src="images/<?=$img?>" style="height:320px" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458deng<?=$id?></h4>
													<ul>
														<li><span>Age / Height</span>: <?=$age?>/ <?=$height?></li>
														<li><span>Caste</span>: <?=$cast?></li>
														<li><span>Religion</span>: <?=$religion?></li>
														<li><span>Profession</span>: <?=$profession?></li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<?php
								}
									?>
									
									
									
									
									
									
									
								</li>
								
							</ul>
		<?php
	}
	if($amount==500)
	{
	?>
	
		
		<ul id="flexiselDemo3">
								<li>
								<?php
							 	$o="select * from reister where gender='$gender' and age between
								'$age_min' and '$age_max' and religion like '%$religion%' and cast like '%$cast%'
								order by id desc limit 0,50";
								$ret=select($o);
								while($t=mysqli_fetch_array($ret))
								{extract($t);
								?>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php?id=<?=$id?>">
											<div class="profile-image">
												<img src="images/<?=$img?>" style="height:320px" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458deng<?=$id?></h4>
													<ul>
														<li><span>Age / Height</span>: <?=$age?>/ <?=$height?></li>
														<li><span>Caste</span>: <?=$cast?></li>
														<li><span>Religion</span>: <?=$religion?></li>
														<li><span>Profession</span>: <?=$profession?></li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<?php
								}
									?>
									
									
									
									
									
									
									
								</li>
								
							</ul>
		<?php
	}
	
	
	if($amount==1500)
	{
	?>
	
		
		<ul id="flexiselDemo3">
								<li>
								<?php
							 	$o="select * from reister where gender='$gender' and age between
								'$age_min' and '$age_max' and religion like '%$religion%' and cast like '%$cast%'
								order by id desc limit 0,100";
								$ret=select($o);
								while($t=mysqli_fetch_array($ret))
								{extract($t);
								?>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php?id=<?=$id?>">
											<div class="profile-image">
												<img src="images/<?=$img?>" style="height:320px" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458deng<?=$id?></h4>
													<ul>
														<li><span>Age / Height</span>: <?=$age?>/ <?=$height?></li>
														<li><span>Caste</span>: <?=$cast?></li>
														<li><span>Religion</span>: <?=$religion?></li>
														<li><span>Profession</span>: <?=$profession?></li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<?php
								}
									?>
									
									
									
									
									
									
									
								</li>
								
							</ul>
		<?php
	}
	
}	
					?>
					
							
					</div>   
			</div>
			<!-- //slider -->				
			</div>
	
	
	
	
	
	

<!-- Find your soulmate -->
	
	<!-- //Find your soulmate -->
		
		<!-- featured profiles -->			
			
			<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->	
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: false,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
			
	
	
	
	<div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a class="scroll" href="#home">Get started</a></h4>
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
			<p>© 2017 Match. All rights reserved | Design by <a href="http://projecttunnel.com"> Projecttunnel.</a></p>
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
