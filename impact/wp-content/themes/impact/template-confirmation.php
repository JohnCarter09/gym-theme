<?php
/*
Template Name: Confirmation
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<div class="status-steps steps-3">
						<div class="step">
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
						<div class="step step-right active">
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


			<div class="page-section section-slim section-grey-light">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-body">
									<p class="headline">Thank you for your order, User!</p>

									<hr/>

									<h5 class="bold"><i class="fa fa-lock icon-left"></i> Login credentials</h5>
									<table class="table table-invoice">
										<tbody>
											<tr>
												<th>Username:</th>
												<td>[MM_Member_Data name='username']</td>
											</tr>
											<tr>
												<th>Password:</th>
												<td><em>Hidden for security purposes</em></td>
											</tr>
										</tbody>
									</table>
									<p class="small">* Please check your Spam folder if you didn't receive the welcome email.</p>

									<div id="order-details" class="print-area">
										<h5 class="bold"><i class="fa fa-file-text-o icon-left"></i> Order details</h5>
										<table class="table table-invoice">
											<tbody>
												<tr>
													<th>Name:</th>
													<td>[MM_Member_Data name='firstName'] [MM_Member_Data name='lastName']</td>
												</tr>
												<tr>
													<th>Billing Address:</th>
													<td>[MM_Order_Data name='billingAddress']
													[MM_Order_Data name='billingCity'], [MM_Order_Data name='billingState'] [MM_Order_Data name='billingZipCode']
													[MM_Order_Data name='billingCountry']</td>
												</tr>
											</tbody>
										</table>

										<table class="table table-invoice">
											<tbody>
												<tr>
													<th>Product:</th>
													<td>[MM_Order_Data name='productName']</td>
												</tr>
												<tr>
													<th>Order ID:</th>
													<td>[MM_Order_Data name='id']</td>
												</tr>
												<tr>
													<th>Subtotal:</th>
													<td>[MM_Order_Data name='subtotal' doFormat='true']</td>
												</tr>
												<tr class="row-total">
													<th>Total:</th>
													<td>[MM_Order_Data name='total' doFormat='true']</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--/#order-details-->
								</div>
								<!--/.panel-body-->
							</div>
							<!--/.panel-->
						</div>
						<!--/.col-sm-6-->
						<div class="col-sm-6">
							<label><i class="fa fa-youtube-play icon-left"></i> Welcome Video</label>
							<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-video.png" />

							<hr/>
							
							<h5 class="bold"><i class="fa fa-list icon-left"></i> Quick Links</h5>
							<ul class="list-nav">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#">Premium Content</a></li>
								<li><a href="#">My Account</a></li>
							</ul>
						</div>
						<!--/.col-sm-6-->
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
