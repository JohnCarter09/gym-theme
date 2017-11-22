<?php
/*
Template Name: About
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-grey-light">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2 class="section-title">Company History</h2>
							<p class="headline">Here's a look at our company history and where we started...</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

							<p>Tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
						</div>
						<!--/.col-sm-6-->
						<div class="col-sm-6">
							<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-image.png" />
						</div>
						<!--/.col-sm-6-->
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-section-->

			<div class="page-section section-white">
				<div class="container">
					<h2>Our Team</h2>
					<hr>
					<div class="row">
						<div class="col-sm-4">
							<div class="user">
								<span class="user-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-user.jpg" /></span>
								<span class="user-label">User Label</span>
								<h5 class="user-title">User Name/Title</h5>
								<p class="user-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<!--/.user-->
						</div>
						<!--/.col-sm-4-->
							<div class="col-sm-4">
							<div class="user">
								<span class="user-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-user.jpg" /></span>
								<span class="user-label">User Label</span>
								<h5 class="user-title">User Name/Title</h5>
								<p class="user-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<!--/.user-->
						</div>
						<!--/.col-sm-4-->
							<div class="col-sm-4">
							<div class="user">
								<span class="user-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-user.jpg" /></span>
								<span class="user-label">User Label</span>
								<h5 class="user-title">User Name/Title</h5>
								<p class="user-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<!--/.user-->
						</div>
						<!--/.col-sm-4-->
					</div>
					<!--/.row-->
				</div>
				<!--/.continer-->
			</div>
			<!--/.page-section-->

		<?php endwhile; ?>

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
