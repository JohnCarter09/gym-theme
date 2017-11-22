<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<!-- MemberDev CDN CSS -->
	<link href="https://memberdev.com/cdn/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://memberdev.com/cdn/css/md-base.css" rel="stylesheet">
	<link href="https://memberdev.com/cdn/css/md-icon.css" rel="stylesheet">

	<!-- 3rd party CDN CSS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	<!-- We need jQuery in the header for custom page specific scripts to work -->
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="https://memberdev.com/cdn/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://memberdev.com/cdn/js/md-base.js"></script>

	<!-- MAIN WP Head hook -->
	<?php wp_head(); ?>

	<style type="text/css">
		/* over-ride the default WP admin bar styling */
		html,
		body {
			margin: 0 !important;
		}
		#wpadminbar {
			top: auto !important;
			bottom: 0 !important;
		}
		#mm-preview-settings-bar {
			top: auto;
			bottom: 32px;
			height: 38px;
			background: #000;
		}
	</style>
</head>

<body <?php body_class(); ?>>

<div class="site-header">
	<div class="container">
		<a href="/" class="header-brand">Impact</a>
		<div class="header-nav">
            <ul>
            	<?php if ( is_user_logged_in() ) : ?>
            		<li><a href="/dashboard/"><i class="mdi mdi-layout-1"></i> Dashboard</a></li>
	            	<li><a href="/member-content/"><i class="mdi mdi-agenda-2"></i> Member Content</a></li>
	            	<li><a href="/contact/"><i class="mdi mdi-help-1"></i> Support</a></li>
	            	<li class="nav-dropdown">
					    <a href="#" data-toggle="dropdown">
					    	<span class="dropdown-icon"><i class="mdi mdi-user-male-circle icon-left"></i></span>
					    	<span class="dropdown-text">
						    	My Account
							</span>
					   		<span class="caret"></span>
					  	</a>
					  	<ul class="dropdown-menu dropdown-menu-right">
					    	<li><a href="/dashboard/">Dashboard <i class="mdi mdi-layout-1"></i></a></li>
					    	<li><a href="/my-favorites/">My Favorites <i class="mdi mdi-star"></i></a></li>
						    <li><a href="/account-settings/">Account Settings <i class="mdi mdi-settings-1"></i></a></li>
						    <li class="divider"></li>
						    <li><a href="<?php echo wp_logout_url(); ?>">Logout <i class="mdi mdi-unlocked"></i></a></li>
					  	</ul>
				  </li>
            	<?php else : ?>	
	            	<li><a href="/membership/">Membership</a></li>
	                <li><a href="/about/">About</a></li>
	                <li><a href="/contact/">Contact</a></li>
	                <li class="nav-login"><a href="/login/"><i class="mdi mdi-lock"></i> Login</a></li>
	                <li class="nav-cta"><a href="/membership/"><i class="mdi mdi-plus-circle"></i> Become a Member</a></li>
	            <?php endif; ?>
            </ul>
        </div>
        <!--/.header-nav-->
		<a href="#" class="header-mobile-navicon js-mobile-navicon"><span class="bars"></span></a>
	</div>
	<!--/.container-->
</div>
<!--/.site-header-->

<div class="site-wrap">
