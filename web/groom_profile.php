<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Match a Matrimonial Category Bootstrap Responsive Web Template | Groom Profile :: w3layouts</title>
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
	<!--  Navigation Start -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <?php include"nav.php";?>
    </div> <!-- end navbar-inverse-blue -->
<!--  Navigation End -->
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
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <a href="matches.php">Matches</a> >
			<span>Bridegroom Profile Details</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->


	<!-- Bridegroom Profile Details -->
	<div class="w3ls-list">
		<div class="container">
		<h2>Bridegroom Profile Details</h2>
		<?php
		if(isset($_SESSION['login']))
		{
			?>
			<div class="col-md-9 profiles-list-agileits">
			<div class="single_w3_profile">
			<?php
								$ret=select("select * from reister where id='".$_REQUEST['id']."'");
								while($t=mysqli_fetch_array($ret))
								{
									extract($t);
								?>
				<div class="agileits_profile_image">
					<img src="images/<?=$img?>" alt="profile image" />
				</div>
				<div class="w3layouts_details">
					<h4>Profile ID : 458deng<?=$id?></h4>
					<p><?=$age?> Years, <?=$height?> , <?=$religion?>.</p>
					<?php
					$t=select("SELECT * FROM `interest` INNER JOIN reister on interest.interested_id=reister.id
					WHERE interest.userid='".$_SESSION['id']."' and interest.interested_id='".$_REQUEST['id']."'");
					if(mysqli_num_rows($t)>=1)
					{
						echo"<h3 style='color:red'>Already Interested</h3>";
					}
					else
					{
						?>					<a href="send_interest.php?id=<?=$id?>" >Send interest</a>

						<?php
					}
					
					?>
						</div>
				<div class="clearfix"></div>
			</div>
			<div class="profile_w3layouts_details">
				<div class="agileits_aboutme">
					<h4>About me</h4>
					<h5>Brief about me:</h5>
					<p><?=$about?></p>
					<h5>Family Details:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mother : </label>
						<div class="col-sm-9 w3_details">
							<?=$mother?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Father : </label>
						<div class="col-sm-9 w3_details">
							<?=$father?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Family Income : </label>
						<div class="col-sm-9 w3_details">
							<?=$income?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<h5>Education Details:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Highest Education : </label>
						<div class="col-sm-9 w3_details">
							<?=$qualification_details?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Occupation : </label>
						<div class="col-sm-9 w3_details">
							<?=$profession?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<h5>Lifestyle:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Appearance : </label>
						<div class="col-sm-9 w3_details">
							<?=$lifestyle?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Languages Known : </label>
						<div class="col-sm-9 w3_details">
							<?=$language?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Blood Group : </label>
						<div class="col-sm-9 w3_details">
							<?=$bg?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Height : </label>
						<div class="col-sm-9 w3_details">
							 <?=$height?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Marital Status : </label>
						<div class="col-sm-9 w3_details">
							<?=$marital?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Religion : </label>
						<div class="col-sm-9 w3_details">
							<?=$religion?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Caste : </label>
						<div class="col-sm-9 w3_details">
							<?=$cast?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
				</div>
			</div>
		</div><div class="col-md-3 w3ls-aside">
			<div class="view_profile">
        	<h3>Similar Profiles</h3>
			<?php
								$ret=select("select * from reister where id > '".$_REQUEST['id']."'");
								while($t=mysqli_fetch_array($ret))
								{
									extract($t);
								?>
        	<ul class="profile_item">
        	  <a href="groom_profile.php?id=<?=$id?>">
        	   <li class="profile_item-img">
        	   	  <img src="images/<?=$img?>" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 458deng<?=$id?></h6>
        	   	  <p><?=$age?> Yrs, <?=$height?>Ft  <?=$religion?>	</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
        	<?php
								}
			?>
        	
           
           
           
       </div>
		</div><?php
								}
		?>
			<?php
		}
		else
		{
			?>
				<div class="w3layouts_details" style="margin-left:400px"><a href="#" data-toggle="modal" data-target="#myModal">Login First</a></div>
					
			
			<?php
		}
		?>
		
		
		
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
							<form  action="myphp.php" method="post">
								<label>Email</label>
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
