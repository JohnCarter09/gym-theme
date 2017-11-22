<?php
/*
Template Name: My Favorites
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<h1><i class="mdi mdi-star"></i> My Favorites</h1>
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-white">
				<div class="container">
					
					<div class="row">
						<div class="col-sm-8">
							<p class="headline">View your saved favorites below:</p>
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Post Type</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
							</div>
							<!--/.item-->
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Post Type</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
							</div>
							<!--/.item-->
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Post Type</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
							</div>
							<!--/.item-->
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Post Type</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
							</div>
							<!--/.item-->
							<div class="item item-with-image item-small">
								<div class="item-image">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
								</div>
								<!--/.item-image-->	
								<div class="meta">
									<span class="meta-label label-cat">Post Type</span>
								</div>
								<!--/.meta-->	
								<h4 class="item-title"><a href="#">Content Title</a></h4>
							</div>
							<!--/.item-->
						</div>
						<!--/.col-sm-8-->
						<div class="col-sm-4">
							<div class="widget">
								<label class="caps spaced-5">Top 3</label>
								<h4 class="widget-title">Member Favorites</h4>
								<div class="item item-with-image item-small">
									<div class="item-image">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
									</div>
									<!--/.item-image-->	
									<div class="meta">
										<span class="meta-label label-cat">Post Type</span>
									</div>
									<!--/.meta-->	
									<h5 class="item-title"><a href="#">Content Title</a></h5>
								</div>
								<!--/.item-->
								<div class="item item-with-image item-small">
									<div class="item-image">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
									</div>
									<!--/.item-image-->	
									<div class="meta">
										<span class="meta-label label-cat">Post Type</span>
									</div>
									<!--/.meta-->	
									<h5 class="item-title"><a href="#">Content Title</a></h5>
								</div>
								<!--/.item-->
								<div class="item item-with-image item-small">
									<div class="item-image">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" /></a>
									</div>
									<!--/.item-image-->	
									<div class="meta">
										<span class="meta-label label-cat">Post Type</span>
									</div>
									<!--/.meta-->	
									<h5 class="item-title"><a href="#">Content Title</a></h5>
								</div>
								<!--/.item-->
							</div>
							<!--/.widget-->	
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
