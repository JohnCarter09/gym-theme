<?php
/*
Template Name: Login
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-section section-auth">
				<div class="container">
					<div class="auth-container">
						<h3 class="centered"><i class="fa fa-lock icon-left"></i> Member Login</h3>
						<div class="input-container">
							<input type="text" placeholder="Email" />
						</div>
						<!--/.input-container-->
						<div class="input-container">
							<input type="text" placeholder="Password" />
						</div>
						<!--/.input-container-->
						<div class="input-container">
							<button type="submit" class="btn-block"><i class="fa fa-lock icon-left"></i> Login</button>
						</div>
						<!--/.input-container-->

						<hr/>

						<p class="centered"><a href="/forgot-password/"><i class="fa fa-question-circle icon-left"></i> Forgot password?</a></p>
					</div>
					<!--/.auth-container-->
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
