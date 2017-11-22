<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div>
<!--/.site-wrap-->

<div class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="footer-column">
					<h5 class="footer-title">Impact</h5>
					<ul class="footer-nav">
						<li><a href="/membership/">Membership</a></li>
						<li><a href="/about/">About</a></li>
						<li><a href="/contact/">Contact</a></li>
						<li><a href="/blog/">Blog</a></li>
						<li><a href="/login/">Login</a></li>
					</ul>
					<hr/>
					<ul class="social-nav">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<p></p>
				</div>
				<!--/.footer-column-->
			</div>
			<!--/.col-sm-8-->
			<div class="col-sm-4">
				<div class="footer-column">
					<h5 class="footer-title">Follow</h5>
					<div class="footer-form">
						<p>Get [industry specific] news and insights delivered straight to your inbox!</p>
						<form>
							<div class="input-container">
								<input type="text" placeholder="Enter Your Email" />
							</div>
							<!--/.input-container-->
							<div class="input-container">
								<input type="submit" value="Subscribe" />
							</div>
							<!--/.input-container-->
						</form>
					</div>
					<!--/.footer-form-->
				</div>
				<!--/.footer-column-->
			</div>
			<!--/.col-sm-4-->
		</div>
		<!--/.row-->
		
		<hr/>
		
		<p class="copyright">&copy; 2017 Member<span class="bold">Dev</span></p>
	</div>
	<!--/.container-->
</div>
<!--/.site-footer-->

		
<!-- MAIN WP Footer Hook -->
<?php wp_footer(); ?>

</body>
</html>
