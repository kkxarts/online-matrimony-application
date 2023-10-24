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
<?php
if(isset($_SESSION['login']))
{
	?>
	
	<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Featured Profiles</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php
								$ret=select("select * from reister where id!='".$_SESSION['id']."' order by id desc limit 0,8");
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
					</div>   
			</div>
			<!-- //slider -->				
			</div>
	
	
	<?php
}
else
{
	?>
	<div class="w3layouts-banner" id="home">
<div class="container">
	<div class="logo">
		<h1><a class="cd-logo link link--takiri" href="index.php">Match <span><i class="fa fa-heart" aria-hidden="true"></i>Made in heaven.</span></a></h1>
	</div>
	<div class="clearfix"></div>
	<div class="agileits-register">
		<h3>Register NOW!</h3>
		
		<form action="myphp.php" method="post" enctype="multipart/form-data"> 
				
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="name" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Gender:</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="gender" value="male"><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Age:</span>
					<input type="text" name="age" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date" id="datepicker" name="dob" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Upload Photo</span>
					&nbsp;<input class="date"  name="myimage" type="file"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Height:</span>
					<input type="text" name="height" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>religion:</span>
					<select id="w3_country1" name="religion" onchange="change_country(this.value)" class="frm-field required"> 
						<option value="Muslim">Muslim</option>
						<option value="Hindu">Hindu</option>    
						<option value="Christian">Christian</option>   
						<option value="Sikh">Sikh</option>   
						<option value="Jain">Jain</option>   
						<option value="Buddhist">Buddhist</option>
						</select>
				</div>
				</br>
				<div class="w3_modal_body_grid">
					<span>Caste </span>
					<select id="w3_country" name="cast" onchange="change_country(this.value)" class="frm-field required">
					<?php
					$r=select("select * from cast");
					while($re=mysqli_fetch_array($r))
					{extract($re);
					?>
						<option value="<?=$cast_name?>"><?=ucwords($cast_name)?></option>
							
<?php
					}
?>						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
				<!-- country codes (ISO 3166) and Dial codes. -->
					<input id="phone" name="mobile" type="tel">
				  <!-- Load jQuery from CDN so can run demo immediately -->
				  <script src="js/intlTelInput.js"></script>
				  <script>
					$("#phone").intlTelInput({
					  // allowDropdown: false,
					  // autoHideDialCode: false,
					  // autoPlaceholder: "off",
					  // dropdownContainer: "body",
					  // excludeCountries: ["us"],
					  // formatOnDisplay: false,
					  // geoIpLookup: function(callback) {
					  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					  //     var countryCode = (resp && resp.country) ? resp.country : "";
					  //     callback(countryCode);
					  //   });
					  // },
					  // initialCountry: "auto",
					  // nationalMode: false,
					  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
					  // placeholderNumberType: "MOBILE",
					  // preferredCountries: ['cn', 'jp'],
					  // separateDialCode: true,
					  utilsScript: "js/utils.js"
					});
				  </script>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="email" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password:</span>
					<input type="password" name="password" placeholder=" " required=""/>
				</div>
				
				<input type="submit" name="register" value="Register me" />
				<div class="clearfix"></div>
				<p class="w3ls-login">Already a member? <a href="#" data-toggle="modal" data-target="#myModal">Login</a></p>
			</form>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- Modal -->
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form  action="myphp.php" method="post">
								<label>User Name </label>
								<input type="text" name="email" placeholder="Email" required="">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									
								</div>
								<div class="clearfix"> </div>
								<input type="submit" name="login" value="Login">
								<div class="clearfix"> </div>
								
							</form>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<!-- //Modal -->
	</div>
</div>
	<div class="w3l_find-soulmate text-center">
		<h3>Find Your Soulmate</h3>
			<div class="container">
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3>Sign Up</h3>
						<p>Signup for free and Upload your profile</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-search" aria-hidden="true"></i>
						<h3>Search</h3>
						<p>Search for your right partner</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>Connect</h3>
						<p>Connect your perfect Match</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-comments-o" aria-hidden="true"></i>
						<h3>Interact</h3>
						<p>Become a member and start Conversation</p>
					</div>
				</a>
				<div class="clearfix"> </div>
			</div>
	</div>
	<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Featured Profiles</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php
								$ret=select("select * from reister  order by id desc limit 0,8");
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
					</div>   
			</div>
			<!-- //slider -->				
			</div>
	<?php
}
?>

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
