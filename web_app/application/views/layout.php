<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $title ?> - <?php echo $graph->description ?>">

<!-- Styles -->
<link href="/public/css/bootstrap.css" rel="stylesheet">
<link href="/public/css/bootstrap-responsive.css" rel="stylesheet" />
<link href="/public/css/cookiecuttr.css" rel="stylesheet" />
<link href="/public/css/customization.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/public/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/public/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/public/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="/public/ico/favicon.png">
</head>

<body>
	<div id="toptile"></div>

   	<div class="header hidden-phone">
    	<div class="container">
			<div class="knights visible-desktop hidden-tablet hidden-phone">
			<div class="pull-left logo"><a href="/"><img src="/public/img/logo_white.png" class="pull-left visible-desktop hidden-tablet hidden-phone" /></a></div>
			<div class="pull-right visible-desktop hidden-tablet hidden-phone">
				<span class="contact_details">
					<div id="header_image"></div>
					<div id="strapline">Leicestershire's Medieval Manor House</div>
					<span class="phone"><label>Telephone:</label> <b><?php echo $graph->phone ?></b></span><br>
					<span class="email"><label>Email:</label> <b><a href="mailto:dlhmanorhouse@leics.gov.uk">dlhmanorhouse@leics.gov.uk</a></b></span>
				</span>
			</div> 
			</div>
			<div class="tabletView hidden-desktop visible-tablet hidden-phone">
			<div class="pull-left logo"><a href="/"><img src="/public/img/logo_white.png" class="pull-left" width="300"/></a></div>
			<div class="pull-right hidden-desktop visible-tablet hidden-phone">
				<span class="contact_details"> 
					<div id="strapline">Leicestershire's Medieval Manor House</div>
					<span class="phone">Telephone: <b><?php echo $graph->phone ?></b></span><br>
					<span class="email">Email: <b><a href="mailto:dlhmanorhouse@leics.gov.uk">dlhmanorhouse@leics.gov.uk</a></b></span>
				</span>
			</div>
			</div>
		</div>
    </div>
    <div class="navigation">
    	<div class="container">
    	<div class="navbar navbar-inverse navbar-static-top ">
			<div class="navbar-inner">
				<span class="container">
					<a class="btn btn-navbar" data-toggle="collapse"
						data-target=".nav-collapse"> <span class="icon-bar"></span> <span
						class="icon-bar"></span> <span class="icon-bar"></span>
					</a> 
					<span class="hidden-desktop hidden-tablet visible-phone">
						<a class="brand" href="/"><img src="/public/img/logo_150px.png" alt="" title=""></a>
					</span>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="/">Home</a></li>
							<li class="dropdown">
              					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Visit <b class="caret"></b></a>
              					<ul class="dropdown-menu">
									<li><a href="/welcome/visit">Visit</a></li>
									<li><a href="/welcome/eat">Eat and Shop</a></li>
									<li><a href="/welcome/about">About</a></li>
									<li><a href="/welcome/facilities">Facilities and Access</a></li>
								</ul>
				            </li>
							<li><a href="/welcome/events">What's On</a></li>
							<li class="dropdown">
              					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Learn <b class="caret"></b></a>
              					<ul class="dropdown-menu">
               						<li><a href="/welcome/learn">Learn at Donington</a></li>
              					    <li><a href="/welcome/education">Making an Educational Visit</a></li>	
               						<li><a href="/welcome/sessions">Learning Sessions</a></li>
              					    <li><a href="/welcome/sen">SEN</a></li> 
                				</ul>
				            </li>
							<li><a href="/welcome/hire">Hire</a></li>
							<li><a href="/welcome/location">How to find us</a></li>
						</ul>
						<span class="pull-right visible-desktop hidden-tablet hidden-phone"><h5> <span class="shields"></span></h5></span>
					</div>
					<!--/.nav-collapse -->
				</span>
			</div>
		</div>
		<div class="mobile_contact hidden-desktop hidden-tablet visible-phone">
			<span class="phone"><b><span></span><a href="tel:<?php echo $graph->phone ?>"><?php echo $graph->phone ?></a></b></span>
			<span class="email"><b><span></span><a href="mailto:dlhmanorhouse@leics.gov.uk">dlhmanorhouse@leics.gov.uk</a></b></span> 
		</div>
		</div>
    </div>
    
	<div class="wrapper">
		
		<div class="container">
			<!-- Opening Times and Prices -->
			<div class="row">
				<div class="span4 bs-docs-sidebar">
					<aside>
						<h3 class="openingtimes"><a class="secret" href="<?php echo $graph->sourceUrl?>">Opening Times</a></h3>
						<ul class="times">
							<li><b>Today:</b> <?php echo $graph->openingHoursToday ?></li>
							<?php foreach ($graph->openingHours as $key => $value) : ?>
							<li><b><?php echo $key ?>:</b> <?php echo $value ?></li>
							<?php endforeach ?>
						</ul>
					</aside>
					<aside>
						<h3 class="tickets"><a class="secret" href="<?php echo $prices_post->sourceUrl?>"><?php echo $prices_post->title?></a></h3>
						<ul class="prices">
							<li><?php echo $prices_post->content ?></li>
						</ul>
					</aside>
					<aside>
						<span class="visible-desktop visible-tablet hidden-phone">
							<h3 class="socialmedia">Social Media</h3>
							<ul class="socialmedia">
								<li><a href="https://twitter.com/DoningtonLCC" target="_blank" class="twitter">Follow us on Twitter</a></li>
								<li><a href="https://www.facebook.com/DoningtonleHeath" target="_blank" class="facebook">Find us on Facebook</a></li>
								<li><a href="http://www.flickr.com/photos/lccheritage" target="_blank" class="flickr">See us on Flickr</a></li>
								<li><a href="http://www.tripadvisor.co.uk/Attraction_Review-g815421-d1451715-Reviews-Donington_le_Heath_Manor_House-Coalville_Leicestershire_England.html" target="_blank" class="tripadvisor">Recommend us on Tripadvisor</a></li>
							</ul>
						</span>
					</aside>
					<aside class="location">
 						<h3><a class="secret" href="/welcome/location">How to find us</a></h3>
						<p>Our <a href="/welcome/location">location</a>, and all you need to know about <a href="/welcome/facilities">facilities and access</a>.</p>
						<a href="/welcome/location" class='hidden-phone'><img src="/public/img/map.gif" /></a>
					</aside>					
					<aside>
						<span>
							<h3><a class="secret" href="https://twitter.com/DoningtonLCC">Latest News</a></h3>
							<div class="tweet">Sorry, no news.</div>
						</span>
					</aside>
				</div>
				<div class="span8"><?php echo $content ?></div>
			</div>
		</div>
		
	    <footer>
		    <div class="container">
			    <p class="pull-right visible-desktop hidden-tablet hidden-phone">
			    	<img src="/public/img/logos.png" alt="Logos">
			    </p>
			    <p class="left">
			    	<img src="/public/img/leicester_logo.png" alt="Leicestershire county council">
			    </p>
			</div>
			<div class="container">
	        <p class="pull-left">Leicestershire County Council &copy; 2013 &middot; 
	        	<a href="/welcome/privacy">Privacy</a></p>
	        </p>
	        </div>
        </footer>
	</div>
	<!-- Le javascript -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="/public/js/bootstrap.min.js"></script>
	<script src="/public/js/jquery.cookie.js"></script>
	<script src="/public/js/jquery.cookiecuttr.js"></script>
	<script src="/public/js/jquery.tweet.js"></script>
	<?php if (isset($page_specific_scripts)) {foreach ($page_specific_scripts as $script): ?>
	<script src="<?php echo $script ?>"></script>
	<?php endforeach; } ?>
	
	<script type="text/javascript">
    if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
        // Google Analytics
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-36961584-1', 'auto');
		ga('send', 'pageview');

  		// Update the news
        $(".tweet").tweet({
            username: "DoningtonLCC",
            join_text: "auto",
            avatar_size: 32,
            count: 7,
            template: "{text}",
            loading_text: "loading tweets..."
        });
  	}
  	
  	jQuery(function($){
  		$.cookieCuttr();
  		// Roll the carousel
  		$('.carousel').carousel();
  	});
      </script>
</body>
</html>
