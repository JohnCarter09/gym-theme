<?php
/*
Template Name: Member Content
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<h1><i class="mdi mdi-agenda-2"></i> Member Content</h1>

					<div class="site-search">
						<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
							<span class="screen-reader-text">Search:</span>
							<input type="search" class="search-input" placeholder="Search content..." value="" name="s" title="Search for:">
							<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!--/.site-search-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-white">
				<div class="container">
					<h5 class="caps spaced-3">Latest Content</h5>
					
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
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
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
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
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
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
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

			<div class="page-section section-grey-light">
				<div class="container">
					<h3><i class="fa fa-list icon-left"></i> Content Categories</h3>

					<hr/>

					<div class="rsp-grid grid-spaced">
						<div class="grid-container container-33">
							<a href="#" class="cover-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/cover-image-placeholder-001.jpg" />
								<span class="image-title">Category Title</span>
							</a>
						</div>
						<!--/.grid-container-->
						<div class="grid-container container-33">
							<a href="#" class="cover-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/cover-image-placeholder-002.jpg" />
								<span class="image-title">Category Title</span>
							</a>
						</div>
						<!--/.grid-container-->
						<div class="grid-container container-33">
							<a href="#" class="cover-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/cover-image-placeholder-003.jpg" />
								<span class="image-title">Category Title</span>
							</a>
						</div>
						<!--/.grid-container-->
					</div>
					<!--/.rsp-grid-->
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
