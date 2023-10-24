<div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
          <div class="menu" style="padding-top:10px">
					<span style="font-weight:bold;font-size:20px">M A T R I M O N I A L</span>
				</div>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
				<?php
				if(isset($_SESSION['login']))
				{
				?>
		            <li class="<?php if($n=='active'){echo"active";}?>"><a href="index.php">Home</a></li>
		            <li><a href="about.php">About</a></li>
		            <li><a href="search.php">Search</a></li>
		            <li><a href="view.php">view</a></li>
		            <!--<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="profile.php">Recently Viewed Profiles</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                <li><a href="shortcodes.php">Shortcodes</a></li>
		              </ul>
		            </li>-->
		            
		             <li class="last"><a href="update_profile.php">Update Profile</a></li>
		             <li class="last"><a href="interest.php">Interested People's</a></li>
		             <li class="last"><a href="mambership.php">Mamber ship</a></li>
		             <li class="last"><a href="logout.php">Logout</a></li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
					<?php
				}
				else
				{
					?>
		 <li class="<?php if($n=='active'){echo"active";}?>"><a href="index.php">Home</a></li>
		            <li><a href="about.php">About</a></li>
		            
   <li class="last"><a href="contact.php">Contacts</a></li>
		<?php
				}
					?>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div>