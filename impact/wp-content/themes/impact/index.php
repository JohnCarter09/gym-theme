<?php
/**
 * The template for displaying the main Blog page
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="page-header">
			<div class="container">
				<h1>Impact Blog</h1>
			</div>
			<!--/.container-->
		</div>
		<!--/.page-header-->
		<div class="page-section section-slim section-white">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<?php if ( have_posts() ) : ?>

							<h5 class="caps spaced-3">Latest Posts</h5>

							<?php while ( have_posts() ) : the_post(); ?>

								<div class="item item-with-image">
									<div class="item-image">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) : ?>
							    				<?php the_post_thumbnail('thumbnail'); ?>
							    			<?php else : ?>
							    				<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-thumb.png" />
							    			<?php endif; ?>
							    		</a>
									</div>
									<!--/.item-image-->
									<div class="block-content">
										<div class="meta">
											<label class="meta-label label-category"><?php the_category('<span class="meta-spacer">/</span>'); ?></label>
											<label class="meta-label label-date"><?php the_time('F j, Y'); ?></label>
										</div>
										<!--/.meta-->
										<h4 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<p><?php the_excerpt(); ?></p>
									</div>
									<!--/.item-content-->
								</div>
								<!--/.item-->

							<?php endwhile; ?>

							<?php wp_pagenavi(); ?>

						<?php else : ?>

							<div class="alert alert-info">
								<h3>No Posts...</h3>
								<p>Sorry, there are currently no posts.</p>
							</div>
							<!--/.alert-->
						
						<?php endif; ?>  	
					</div> 
					<!--/.col-sm-8-->
					<div class="col-sm-4">
						<?php include('inc/widget-cta.php'); ?>
						
						<?php get_sidebar(); ?>
					</div>
					<!--/.col-sm-4-->
				</div>
				<!--/.row-->
			</div>
			<!--/.continer-->
		</div>
		<!--/.page-section-->

	</main>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
