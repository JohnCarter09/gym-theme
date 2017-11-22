<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header header-slim">
				<div class="container">
					<div class="breadcrumb">
						<a href="/blog/">Blog</a>
						&nbsp; / &nbsp;
						<span><?php the_title(); ?></span>
					</div>
					<!--/.breadcrumb-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-slim section-grey-light">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<!-- START Post content -->
							<div class="post">
								<div class="post-header">
									<div class="row">
										<div class="col-sm-5">
											<?php if ( has_post_thumbnail() ) : ?>
												<?php the_post_thumbnail(); ?>
											<?php else : ?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-image.png" />
											<?php endif; ?>
										</div>
										<!--/.col-sm-5-->
										<div class="col-sm-7">
											<div class="meta">
												<span class="meta-label label-cat"><?php the_category(' / '); ?></span>
												<span class="meta-label"><?php the_time('F j, Y'); ?></span>
											</div>
											<!--/.meta-->
											<h1 class="header-title"><?php the_title(); ?></h1>
											<div class="user">
								    			<span class="user-avatar"><?php echo get_avatar( get_the_author_email(), '80' ); ?></span>
								    			<label class="user-label">Author</label>
								    			<h5 class="user-title"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h5>
								    		</div>
								    		<!--/.user-->

										</div>
										<!--/.col-sm-7-->	
									</div>
									<!--/.row-->
								</div>
								<!--/.post-header-->
								<div class="post-body">
									<?php the_content(); ?>

									<div class="post-nav">
										<?php the_post_navigation(); ?>
									</div>
									<!--/.post-nav-->
								</div>
								<!--/.post-body-->
							</div>
							<!--/.post-->	
							<!-- END Post content -->
						</div>
						<!--/.col-md-8-->
						<div class="col-md-4">
							<?php include('inc/widget-cta.php'); ?>
							
							<?php get_sidebar(); ?>
						</div>
						<!--/.col-md-4-->
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
			</div>
			<!--/.page-section-->

		<?php endwhile; ?>
			
	</main>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
