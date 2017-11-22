<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="hero hero-homepage">
				<div class="container">
					<div class="hero-content">
						<h1 class="hero-title centered color-white">IMPACT MemberDev Theme</h1>
						<hr class="hr-slim hr-trans" />
						<p class="headline headline-thin centered color-white">We build membership platforms that help small businesses grow.</p>
						<p class="centered">
							<a href="#" class="btn btn-cta btn-lg">Become a Member</a>
							<a href="#" class="btn btn-trans btn-lg js-scroll" data-id="intro">Learn more <i class="mdi mdi-arrow-1-down icon-right"></i></a>
						</p>
					</div>
					<!--/.hero-content-->
				</div>
				<!--/.container-->
			</div>
			<!--/.hero-->

			<div class="page-section section-light section-white" id="intro">
				<div class="container">
					<p class="headline centered">Promote your core products and services with Quick Features</p>
					
					<hr class="hr-30" />

					<div class="row">
						<div class="col-sm-4">
							<div class="feature">
								<span class="feature-icon"><i class="mdi mdi-files-2"></i></span>
								<h3 class="feature-title">Premium Articles</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="feature">
								<span class="feature-icon"><i class="mdi mdi-play-circle"></i></span>
								<h3 class="feature-title">Exclusive Video</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="feature">
								<span class="feature-icon"><i class="mdi mdi-microphone"></i></span>
								<h3 class="feature-title">Audio &amp; More</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
					</div>
					<!--/.row-->
				</div>
			</div>
			<!--/.page-section-->

			<div class="page-section section-grey-light">
				<div class="container">
					<h2 class="section-title centered">Featured Content</h2>
					<p class="headline centered">Here's a glimpse of what members get access to...</p>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="item item-with-image">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Content Category</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<!--/.item-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="item item-with-image">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Content Category</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<!--/.item-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="item item-with-image">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Content Category</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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

			<div class="page-section section-cta">
				<div class="container">
					<h2 class="section-title centered color-white">Section CTA</h2>
					<p class="centered headline color-white">Get instant access to member-only premium content and more!</p>
					<p class="centered"><a href="#" class="btn btn-cta btn-lg">Become a Member</a></p>
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
