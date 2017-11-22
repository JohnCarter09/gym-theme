<?php
/*
Template Name: Dashboard
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<h1><i class="mdi mdi-layout-1"></i> Dashboard</h1>
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-slim section-white">
				<div class="container">
					<p class="headline">Welcome back to IMPACT, Member!</p>

					<hr/>

					<div class="row">
						<div class="col-sm-4">
							<div class="metric metric-no-icon">
								<label class="metric-label">Current Membership</label>
								<h2 class="metric-value">Monthly Plan</h2>
							</div>
							<!--/.metric-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="metric metric-no-icon">
								<label class="metric-label">Membership Status</label>
								<h2 class="metric-value color-green"><i class="mdi mdi-check-circle icon-left"></i> Active</h2>
							</div>
							<!--/.metric-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="metric metric-no-icon">
								<label class="metric-label">Membership Lifetime</label>
								<h2 class="metric-value"><i class="mdi mdi-calendar icon-left"></i> 74 days</h2>
							</div>
							<!--/.metric-->
						</div>
						<!--/.col-sm-4-->
					</div>
					<!--/.row-->

					<div class="spacer-dots"></div>

					<div class="row">
						<div class="col-sm-4">
							<div class="feature feature-link">
								<a href="/member-content/">
									<span class="feature-icon"><i class="mdi mdi-agenda-2"></i></span>
									<span class="feature-title">Member Content</span>
									<span class="feature-desc">View the Latest Member Content</span>
								</a>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="feature feature-link">
								<a href="/my-favorites/">
									<span class="feature-icon"><i class="mdi mdi-star"></i></span>
									<span class="feature-title">My Favorites</span>
									<span class="feature-desc">View Your Saved Favorites</span>
								</a>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="feature feature-link">
								<a href="/account-settings/">
									<span class="feature-icon"><i class="mdi mdi-settings-1"></i></span>
									<span class="feature-title">Account Settings</span>
									<span class="feature-desc">Manage Your Account Details</span>
								</a>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
					</div>
					<!--/.row-->

					<div class="spacer-dots"></div>

					<div class="well well-cta">
						<div class="row">
							<div class="col-sm-8">
								<label class="caps bold color-yellow">Upgrade Available</label>
								<p class="color-white">Your account is eligible for an upgrade to our premium membership!</p>
							</div>
							<!--/.col-sm-8-->
							<div class="col-sm-4">
								<a href="#upgrade-modal" data-toggle="modal" class="btn btn-cta btn-block"><i class="fa fa-plus icon-left"></i> Learn more</a>
							</div>
							<!--/.col-sm-4-->
						</div>
						<!--/.row-->
					</div>
					<!--/.well-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-section-->

			<div class="page-section section-grey-light">
				<div class="container">
					<h3><i class="fa fa-list icon-left"></i> Latest Content</h3>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Category</span>
									<span class="meta-label">Date/Time</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
							</div>
							<!--/.item-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Category</span>
									<span class="meta-label">Date/Time</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
							</div>
							<!--/.item-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Category</span>
									<span class="meta-label">Date/Time</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
							</div>
							<!--/.item-->
						</div>
						<!--/.col-sm-4-->
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-section-->

		<?php endwhile; ?>

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
