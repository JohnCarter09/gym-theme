<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<h1>Contact</h1>
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-white">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-container">
								<h5>Get In Touch</h5>
								<p>Complete the fields below to send us an inquiry:</p>
								<div class="input-container">
									<input type="text" placeholder="Name" />
								</div>
								<!--/.input-container-->
								<div class="input-container">
									<input type="text" placeholder="Email" />
								</div>
								<!--/.input-container-->
								<div class="input-container">
									<input type="text" placeholder="Phone" />
								</div>
								<!--/.input-container-->
								<div class="input-container">
									<textarea placeholder="Add comments here..."></textarea>
								</div>
								<!--/.input-container-->
								<hr/>
								<div class="input-container">
									<input type="submit" value="Submit Inquiry" />
								</div>
								<!--/.input-container-->
							</div>
							<!--/.form-container-->
						</div> 
						<!--/.col-sm-6-->
						<div class="col-sm-6">
							<h5>Contact Info</h5>
							<table class="table table-list">
								<tr>
									<th><i class="fa fa-clock-o"></i> Business Hours</th>
									<td>9am-5pm / Mon-Fri</td>
								</tr>
								<tr>
									<th><i class="fa fa-envelope-o"></i> General Inquiries</th>
									<td><a href="#">info@memberdev.com</a></td>
								</tr>
								<tr>
									<th><i class="fa fa-map-marker"></i> Address</th>
									<td>1624 Market Street<br/>Denver, CO 80202</td>
								</tr>
							</table>
							<h5>Member Support</h5>
							<table class="table table-list">
								<tr>
									<th><i class="mdi mdi-window-code"></i> Support</th>
									<td>Chat with a representitive or call 1-800-222-1234</td>
								</tr>
								<tr>
									<th><i class="mdi mdi-support"></i> Help Desk Ticket</th>
									<td><a href="#">helpdesk.com</a></td>
								</tr>
							</table>
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
