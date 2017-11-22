<?php
/*
Template Name: Membership
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<div class="status-steps steps-3">
						<div class="step active">
							<label>
								<span class="step-number">1</span>
								<span class="step-label">Choose Plan</span>
							</label>
						</div>
						<div class="step step-centered">
							<label>
								<span class="step-number">2</span>
								<span class="step-label">Account Info</span>
							</label>
						</div>
						<div class="step step-right">
							<label>
								<span class="step-number">3</span>
								<span class="step-label">Confirmation</span>
							</label>
						</div>
					</div>
					<!--/.status-steps-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->


			<div class="page-section section-grey-light">
				<div class="container">

					<div class="row">
						<div class="col-sm-4">
							<div class="card card-product">
								<div class="card-content">
									<h3 class="product-title">Monthly Plan</h3>
									<h5 class="product-price">$12 month</h5>
									<p class="product-desc">Short plan description or benefit...</p>
									<hr/>
									<a href="#" class="btn btn-default btn-block"><i class="mdi mdi-plus-circle icon-left"></i> Select Plan</a>
								</div>
								<!--/.card-content-->
							</div>
							<!--/.card-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="card card-product">
								<div class="card-content">
									<h3 class="product-title">Annual Plan</h3>
									<h5 class="product-price">$99 year</h5>
									<p class="product-desc">Short plan description or benefit...</p>
									<hr/>
									<a href="#" class="btn btn-default btn-block"><i class="mdi mdi-plus-circle icon-left"></i> Select Plan</a>
								</div>
								<!--/.card-content-->
							</div>
							<!--/.card-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="card card-product">
								<div class="card-content">
									<h3 class="product-title">Lifetime Plan</h3>
									<h5 class="product-price">$199 one-time</h5>
									<p class="product-desc">Short plan description or benefit...</p>
									<hr/>
									<a href="#" class="btn btn-default btn-block"><i class="mdi mdi-plus-circle icon-left"></i> Select Plan</a>
								</div>
								<!--/.card-content-->
							</div>
							<!--/.card-->
						</div>
						<!--/.col-sm-4-->
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-section-->

			<div class="page-section section-white">
				<div class="container">

					<h2 class="section-title centered"><i class="mdi mdi-comments-2 icon-left"></i> Member Testimonials</h2>
					<div class="row">
						<div class="col-sm-6">
							<blockquote class="quote">
								<p class="quote-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."</p>
								<div class="user">
									<span class="user-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-user.jpg" /></span>
									<span class="user-label">User Label</span>
									<h6 class="user-title">User Name/Title</h6>
								</div>
								<!--/.user-->
							</blockquote>
						</div>
						<!--/.col-sm-6-->
						<div class="col-sm-6">
							<blockquote class="quote">
								<p class="quote-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."</p>
								<div class="user">
									<span class="user-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-user.jpg" /></span>
									<span class="user-label">User Label</span>
									<h6 class="user-title">User Name/Title</h6>
								</div>
								<!--/.user-->
							</blockquote>
						</div>
						<!--/.col-sm-6-->
					</div>
					<!--/.row-->

				</div>
				<!--/.container-->
			</div>
			<!--/.page-section-->

			<div class="page-section section-grey-dark">
				<div class="container">
					<h2 class="section-title centered color-white"><i class="mdi mdi-check-circle-2 icon-left"></i> Membership Features</h2>
					<hr class="hr-trans" />
					<div class="row">
						<div class="col-sm-4">
							<div class="feature">
								<span class="feature-icon color-white"><i class="mdi mdi-files-2"></i></span>
								<h4 class="feature-title color-white">Premium Articles</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="feature">
								<span class="feature-icon color-white"><i class="mdi mdi-play-circle"></i></span>
								<h4 class="feature-title color-white">Exclusive Video</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							</div>
							<!--/.feature-->
						</div>
						<!--/.col-sm-4-->
						<div class="col-sm-4">
							<div class="feature">
								<span class="feature-icon color-white"><i class="mdi mdi-microphone"></i></span>
								<h4 class="feature-title color-white">Audio &amp; More</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							</div>
							<!--/.feature-->
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
