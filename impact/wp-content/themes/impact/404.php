<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<div class="page-header">
			<div class="container">
				<h1>404 Error</h1>
			</div>
			<!--/.container-->
		</div>
		<!--/.page-header-->

		<div class="page-section section-slim section-white">
			<div class="container">
				<p class="headline">Sorry... nothing was found at this location.</p>

				<hr/>

				<div class="site-search">
					<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
						<span class="screen-reader-text">Search:</span>
						<input type="search" class="search-input" placeholder="Search this site..." value="" name="s" title="Search for:">
						<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!--/.site-search-->

				<hr/>

				<p><a href="/">Return to Homepage <i class="fa fa-angle-right icon-right"></i></a></p>
			</div>
			<!--/.continer-->
		</div>
		<!--/.page-section-->

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
