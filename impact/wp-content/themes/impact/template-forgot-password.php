<?php
/*
Template Name: Forgot Password
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-section section-auth">
				<div class="container">
					<div class="auth-container">
						<h3 class="centered"><i class="fa fa-question-circle icon-left"></i> Forgot Password</h3>
						<p class="centered">Enter your email below to receive password reset instructions.</p>
						<div class="input-container">
							<input type="text" placeholder="Email" />
						</div>
						<!--/.input-container-->
						<div class="input-container">
							<button type="submit" class="btn-block"><i class="fa fa-envelope-o icon-left"></i> Send Password Reset Instructions</button>
						</div>
						<!--/.input-container-->

						<hr/>

						<p class="centered"><a href="/login/"><i class="fa fa-lock icon-left"></i> Back to Login</a></p>
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
