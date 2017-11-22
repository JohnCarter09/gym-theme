<?php
/*
Template Name: Account Settings
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
				<div class="container">
					<h1><i class="mdi mdi-settings-1"></i> Account Settings</h1>
				</div>
				<!--/.container-->
			</div>
			<!--/.page-header-->

			<div class="page-section section-white">
				<div class="container">
					
					<div class="row">
						<div class="col-sm-6">
							<div class="mm-myaccount">
							  	<div id="mm-account-details-section" class="mm-myaccount-module">
								    <div id="mm-account-details-header" class="mm-myaccount-module-header"> 
								    	<i class="fa fa-address-card mm-icon blue" style=" font-size:1.2em; position:relative; top:1px;"></i>	    	Account Details 
								    	<a href="javascript:myaccount_js.updateAccountDetails(10);" id="mm-account-details-update-button" class="mm-update-button">update</a>
								    </div>
								    <div class="mm-myaccount-content-wrapper">
									    <div id="mm-account-details-body" class="mm-myaccount-block">
									    	<p id="mm-element-first-name" class="mm-myaccount-element">
										    	<span id="mm-label-first-name" class="mm-myaccount-label">
										    		First Name: 
										    	</span>
										    	<span id="mm-data-first-name" class="mm-myaccount-data">
										    		John
										    	</span>
									    	</p>
									    	<p id="mm-element-last-name" class="mm-myaccount-element">
										    	<span id="mm-label-last-name" class="mm-myaccount-label">
										    		Last Name: 
										    	</span>
										    	<span id="mm-data-last-name" class="mm-myaccount-data">
										    		Carter
										    	</span>
									    	</p>
									    	<p id="mm-element-phone" class="mm-myaccount-element">
										    	<span id="mm-label-phone" class="mm-myaccount-label">
										    		Phone: 
										    	</span>
										    	<span id="mm-data-phone" class="mm-myaccount-data">
										    		(123) 456-7890
										    	</span>
									    	</p>
									    	<p id="mm-element-email" class="mm-myaccount-element">
										    	<span id="mm-label-email" class="mm-myaccount-label">
										    		Email: 
										    	</span>
										    	<span id="mm-data-email" class="mm-myaccount-data">
										    		johncarter@gmail.com
										    	</span>
									    	</p>
									    	<!--
									    	<p id="mm-element-username" class="mm-myaccount-element">
										    	<span id="mm-label-username" class="mm-myaccount-label">
										    		Username: 
										    	</span>
										    	<span id="mm-data-username" class="mm-myaccount-data">
										    		[MM_Form_Data name='username']
										    	</span>
									    	</p>
									    	-->
									    	<p id="mm-element-password" class="mm-myaccount-element">
										    	<span id="mm-label-password" class="mm-myaccount-label">
										    		Password: 
										    	</span>
										    	<span id="mm-data-password" class="mm-myaccount-data">
										    		********
										    	</span>
									    	</p>
									    	<p id="mm-element-registration" class="mm-myaccount-element">
										    	<span id="mm-label-registration" class="mm-myaccount-label">
										    		Member Since: 
										    	</span>
										    	<span id="mm-data-registration" class="mm-myaccount-data">
										    		Sep 7, 2017 11:23 am
										    	</span>
									    	</p>
									    	
									    	<p id="mm-element-membership-level" class="mm-myaccount-element">
										    	<span id="mm-label-membership-level" class="mm-myaccount-label">
										    		Membership Level: 
										    	</span>
										    	<span id="mm-data-membership-level" class="mm-myaccount-data">
										    		Monthly Plan
										    		
										    		<a href="http://sos3.wpengine.com/cancel/" class="mm-cancel-membership-button">cancel</a>
										    		
										    	</span>
									    	</p>
									    </div>
									    <div id="mm-account-profile-body" class="mm-myaccount-block">
									    	
									    </div>
								    </div>
							  	</div>
							  
							  	<div id="mm-billing-shipping-info-section" class="mm-myaccount-module">
							    	<div id="mm-billing-info-container" class="mm-myaccount-block">
							      		<div id="mm-billing-info-header" class="mm-myaccount-module-header">
							      			<i class="fa fa-credit-card mm-icon blue" style=" font-size:1.2em; position:relative; top:1px;"></i> 
							      			Billing Address 
							      			<a href="javascript:myaccount_js.updateBillingInfo(10);" id="mm-billing-info-update-button" class="mm-update-button">update</a>
							      		</div>
							      		<div class="mm-myaccount-content-wrapper">
								      		<div id="mm-billing-info-body"> 
										    	<p id="mm-element-billing-address" class="mm-myaccount-element">
											    	<span id="mm-label-billing-address" class="mm-myaccount-label">
											    		Address: 
											    	</span>
											    	<span id="mm-data-billing-address" class="mm-myaccount-data">
											    		123 Test Dr
											    	</span>
										    	</p>
										    	<p id="mm-element-billing-city" class="mm-myaccount-element">
											    	<span id="mm-label-billing-city" class="mm-myaccount-label">
											    		City: 
											    	</span>
											    	<span id="mm-data-billing-city" class="mm-myaccount-data">
											    		Testville
											    	</span>
										    	</p>
										    	<p id="mm-element-billing-state" class="mm-myaccount-element">
											    	<span id="mm-label-billing-state" class="mm-myaccount-label">
											    		State: 
											    	</span>
											    	<span id="mm-data-billing-state" class="mm-myaccount-data">
											    		Colorado
											    	</span>
										    	</p>
										    	<p id="mm-element-billing-zip-code" class="mm-myaccount-element">
											    	<span id="mm-label-billing-zip-code" class="mm-myaccount-label">
											    		Zip Code: 
											    	</span>
											    	<span id="mm-data-billing-zip-code" class="mm-myaccount-data">
											    		80123
											    	</span>
										    	</p>
										    	<p id="mm-element-billing-country" class="mm-myaccount-element">
											    	<span id="mm-label-billing-country" class="mm-myaccount-label">
											    		Country: 
											    	</span>
											    	<span id="mm-data-billing-country" class="mm-myaccount-data">
											    		United States
											    	</span>
										    	</p>
								      		</div>
							      		</div>
							    	</div>
							    	<div id="mm-shipping-info-container" class="mm-myaccount-block">
							      		<div id="mm-shipping-info-header" class="mm-myaccount-module-header">
							      			<i class="fa fa-truck mm-icon blue" style=" font-size:1.2em; position:relative; top:1px;"></i>      			Shipping Address 
							      			<a href="javascript:myaccount_js.updateShippingInfo(10);" id="mm-shipping-info-update-button" class="mm-update-button">update</a>
							      		</div>
							      		<div class="mm-myaccount-content-wrapper">
								      		<div id="mm-shipping-info-body"> 
								      			<p id="mm-element-shipping-address" class="mm-myaccount-element">
											    	<span id="mm-label-shipping-address" class="mm-myaccount-label">
											    		Address: 
											    	</span>
											    	<span id="mm-data-shipping-address" class="mm-myaccount-data">
											    		123 Test Dr
											    	</span>
										    	</p>
										    	<p id="mm-element-shipping-city" class="mm-myaccount-element">
											    	<span id="mm-label-shipping-city" class="mm-myaccount-label">
											    		City: 
											    	</span>
											    	<span id="mm-data-shipping-city" class="mm-myaccount-data">
											    		Testville
											    	</span>
										    	</p>
										    	<p id="mm-element-shipping-state" class="mm-myaccount-element">
											    	<span id="mm-label-shipping-state" class="mm-myaccount-label">
											    		State: 
											    	</span>
											    	<span id="mm-data-shipping-state" class="mm-myaccount-data">
											    		Colorado
											    	</span>
										    	</p>
										    	<p id="mm-element-shipping-zip-code" class="mm-myaccount-element">
											    	<span id="mm-label-shipping-zip-code" class="mm-myaccount-label">
											    		Zip Code: 
											    	</span>
											    	<span id="mm-data-shipping-zip-code" class="mm-myaccount-data">
											    		80123
											    	</span>
										    	</p>
										    	<p id="mm-element-shipping-country" class="mm-myaccount-element">
											    	<span id="mm-label-shipping-country" class="mm-myaccount-label">
											    		Country: 
											    	</span>
											    	<span id="mm-data-shipping-country" class="mm-myaccount-data">
											    		United States
											    	</span>
										    	</p>
								      		</div>
							      		</div>
							    	</div>
								</div>
							  
							  	<div id="mm-subscription-info-section" class="mm-myaccount-module">
							    	<div id="mm-subscription-info-header" class="mm-myaccount-module-header"> 
							    		<i class="fa fa-refresh mm-icon blue" style=" font-size:1.2em; position:relative; top:1px;"></i> 
							    		Subscriptions 
							    	</div>
							    	<div class="mm-myaccount-content-wrapper">
								    	<div id="mm-subscription-info-body"> 
								    		<table id="mm-subscriptions-table">
								<thead>
									<tr>
							      		<th id="mm-subscriptions-date-column">Start Date</th>
										<th id="mm-subscriptions-description-column">Description</th>
									 	<th id="mm-subscriptions-amount-column">Amount</th>
										<th id="mm-subscriptions-action-column"></th>
										<th id="mm-subscriptions-status-column"></th>
							      	</tr>
								</thead>
								<tbody>
											<tr>
														<td>Sep 7, 2017</td>
														<td>Monthly Plan</td>
														<td><span style="font-family:courier; font-size:12px;">$9.99</span> every month</td>
														<td><a href="javascript:myaccount_js.updateSubscriptionInfo(10, 9);" class="mm-update-subscription-button">update billing details</a> | <a href="http://sos3.wpengine.com/cancel/" class="mm-cancel-subscription-button">cancel</a></td>
														<td></td>
												</tr>
										</tbody>
							</table>
								    	</div>
							    	</div>
							  	</div>
							  
							  	<div id="mm-order-history-section" class="mm-myaccount-module">
							    	<div id="mm-order-history-header" class="mm-myaccount-module-header">
							    		<i class="fa fa-shopping-cart mm-icon blue" style=" font-size:1.2em; position:relative; top:1px;"></i>    		Order History (most recent orders)
							    		<a href="javascript:myaccount_js.viewOrderHistory(10);" id="mm-order-history-view-all-button" class="mm-update-button">view all</a>
							    	</div>
							    	<div id="mm-order-history-body" class="mm-myaccount-content-wrapper">
							      		<table id="mm-order-history-table">
								<thead>
									<tr>
							      		<th id="mm-order-history-date-column">Order #</th>
										<th id="mm-order-history-id-column">Order Date</th>
									 	<th id="mm-order-history-description-column">Description</th>
										<th id="mm-order-history-amount-column">Amount</th>
										<th id="mm-order-history-type-column">Type</th>
							      	</tr>
								</thead>
								<tbody>
											<tr>
														<td><span style="font-family:courier;">1047</span></td>
														<td>Nov 10, 2017</td>
														<td>Tac Force Karambit (Total Black)</td>
														<td><span style="font-family:courier;">$27.95</span></td>
														<td><a title="Successful Payment "><i class="fa fa-money mm-icon green" style=" font-size:1.4em; position:relative; top:2px;"></i></a></td>
												</tr>
											<tr>
														<td><span style="font-family:courier;">1046</span></td>
														<td>Nov 10, 2017</td>
														<td>Body Weapons (Digital Access)</td>
														<td><span style="font-family:courier;">$9.95</span></td>
														<td><a title="Successful Payment "><i class="fa fa-money mm-icon green" style=" font-size:1.4em; position:relative; top:2px;"></i></a></td>
												</tr>
											<tr>
														<td><span style="font-family:courier;">1042</span></td>
														<td>Nov 10, 2017</td>
														<td>Smith &amp; Wesson Tactical Folding Knife</td>
														<td><span style="font-family:courier;">$15.95</span></td>
														<td><a title="Successful Refund "><i class="fa fa-money mm-icon red" style=" font-size:1.4em; position:relative; top:2px;"></i></a></td>
												</tr>
											<tr>
														<td><span style="font-family:courier;">1042</span></td>
														<td>Nov 10, 2017</td>
														<td>Smith &amp; Wesson Tactical Folding Knife</td>
														<td><span style="font-family:courier;">$15.95</span></td>
														<td><a title="Successful Payment "><i class="fa fa-money mm-icon green" style=" font-size:1.4em; position:relative; top:2px;"></i></a></td>
												</tr>
											<tr>
														<td><span style="font-family:courier;">1041</span></td>
														<td>Nov 10, 2017</td>
														<td>Body Weapons (Digital Access)</td>
														<td><span style="font-family:courier;">$9.95</span></td>
														<td><a title="Successful Payment "><i class="fa fa-money mm-icon green" style=" font-size:1.4em; position:relative; top:2px;"></i></a></td>
												</tr>
										</tbody>
							</table>
							    	</div>
							  	</div>
							  	
							  	<div style="display:none;">

							  	<div id="mm-gifts-section" class="mm-myaccount-module">
							    	<div id="mm-gifts-header" class="mm-myaccount-module-header">
							    		<i class="fa fa-gift mm-icon purple" style=" font-size:1.2em; position:relative; top:1px;"></i>    		Gifts Purchased (most recent gifts)
							    		<a href="javascript:myaccount_js.viewGiftHistory(10);" id="mm-gifts-view-all-button" class="mm-update-button">view all</a>
							    	</div>
							    	<div id="mm-gifts-body" class="mm-myaccount-content-wrapper">
							      		<em>No gifts purchased</em>
							    	</div>
							  	</div>
							  	</div>

							    
							    <div>
							     </div>


							</div>
							<!--/.mm-myaccount-->
					
						</div>
						<!--/.col-sm-6-->
						<div class="col-sm-6">
							<div class="form-container">
								<h3>My Profile</h3>
								<hr/>
								<div class="acf-form-container">	
									<form id="acf-form" class="acf-form" action="" method="post">
										
										<div id="acf-form-data" class="acf-hidden">
											<input type="hidden" id="_acf_post_id" name="_acf_post_id" value="59">
											<input type="hidden" id="_acf_nonce" name="_acf_nonce" value="49a0d921c2">
											<input type="hidden" id="_acf_validation" name="_acf_validation" value="1">
											<input type="hidden" id="_acf_ajax" name="_acf_ajax" value="0">
											<input type="hidden" id="_acf_changed" name="_acf_changed" value="0">
											<input type="hidden" id="_acf_form" name="_acf_form" value="anRNM281Ui82WE51WlpJbXhnd01MNjBzMlM3U0pHbEtVVlNodS84R0ZxQkJIWTJlZ3VJdTdkZlQvdmMvRXBwZVNEZENtWEt6OFQyeEdQeXFaWWtkYmI2K2NTYkJnNG9Na1h2U2YvTk1xTzRsSjE2cHhhZnVkbGtpd2xCS1dnS2U4dFUrMEJGeWVTTHdDbk9iWG8yUW5pTVMvUElmYXROdGtJdERpQWg1WHRITytBWkdpdzN1Z1RkTjE2Qm9MakRFTm5pYU81cHlUcjc2TFdrNktsTytqQTRqZnhFdkx1UVZXSXBNNzZXTzczWkV2YU41Z0JoWHloTG5ZaVZLeGgwOWs4MnBkUEhsUGNDd1RLeTBOMjI5eFBBS1NsaHQ4MFZZUnluS3hLbXVSak5Ja2pWRGhyRkZmNXBHZGVEOVcwUTdrOEhsalM4ck9mSm5UN2U0ZlpCUmx4T2h1dzJsL1ZaVUNvalh3VVlRZ0l0Sk1EYXlOK0NaMlJYb1NPR0prL2hxWVNhK28vT0RLZ1ZGcEpleEhQaVIvWHVMVWZmNzRlNFNQWFMwOEF2dkg3M3poYmNlbFlwMHR4QTlZTVBhWmpsLytEYTA3blZEemwyUnZMRDUzbkVlZ2VXWG5OOXk0aDJQZDF2RGhvRzdrcEl3ME82Y29nUjZaeEViSGlpNG5ockdpRFgwOTJaaDVIeEM2aGt6QjhJRDVTQVNHeXh0VmhQdzlMUEQ4aE54SHY5MVQ2bVo0QXdoUnhacDNnTm5GajRHWjVwREZUWTNJMk5JYlh5bXhJSDNUL0g4SXFmRmgvaHgybXplU3RDbWNCbThKR3VTZzlNZHljaVQ2TEJRRVUwM0U3Ulg4ekdZTkw3VG4veFg4MDNKQ2U5eXl1Qmt3czZIMmJ5QlBrOUNwK1NlZlhrZmFwTEM2dkVQbGlya3ZYWGM5UHBZYW9iS2lqcjJqaDRTSHM3VnpNVmEzMWs0dGRxN0dmZElxUGpQRzE4L0xYbGNZQ3kzUGpDbWVtTVE4OEZCTXVjeWFiVUlYRWRyZDdQZzZlSVBxeUFyY01ZQ3hlUndHNVBLbE1PbG1VWXlWeWFYQlZxdEJhNWlBbk9aQ3A5ZWN4OXlJbTJhUUZaWGRvMTk2cnhhNW9lUStoMmZVR0VETDZ4cGh1Q1VOajRvV2FEd0V3VUthTTlWZTMrMGtwKzJpYlR6RGlJWU8zTmt0ZzBtc3RQTDMxd214MjV2c2VTZFF4UCtQbkpyS0tVMVd6VTcxVXBRZG1qb3Rld0o3SUJLczBBR2FZd2NEcU5ITXBvS095L3hUbmFZUU10SURqcC9nV0NLQWtGNlIyYzhQc2VGdHpVcTFuZWJ5Nko5QmU5bW5YSGRPNVc3eEt5SnhsT2FVeGpjV3JtRmE4Z0NHSUordUplN2tNWksvOVNIUG5PbWhWREJJVXVFM08zOTA0SUp3OG1TWDM3bFN4OWJua0RJOVpzZlhBPT06OlACQLqtLI7fQ2ryCFzQk8w=">
												</div>
										
									<div class="acf-fields acf-form-fields -top">
										<div class="acf-field acf-field-text acf-field--post-title" data-name="_post_title" data-type="text" data-key="_post_title" data-required="1">
									<div class="acf-label">
									<label for="acf-_post_title">Title <span class="acf-required">*</span></label>			</div>
									<div class="acf-input">
									<div class="acf-input-wrap"><input type="text" id="acf-_post_title" name="acf[_post_title]" value="John Carter" required="required"></div>					</div>
							</div>
							<div class="acf-field acf-field-image acf-field-5a04a345a3c9b" data-name="profile_photo" data-type="image" data-key="field_5a04a345a3c9b">
									<div class="acf-label">
									<label for="acf-field_5a04a345a3c9b">Profile Photo</label>		<p class="description">Upload a profile photo.</p>	</div>
									<div class="acf-input">
									<div class="acf-image-uploader has-value" data-preview_size="thumbnail" data-library="uploadedTo" data-mime_types=".jpg, .png, .gif" data-uploader="wp">
								<input name="acf[field_5a04a345a3c9b]" value="60" type="hidden">
								<div class="show-if-value image-wrap" style="max-width: 150px">
									<img data-name="image" src="<?php echo get_template_directory_uri(); ?>/images/john-carter.jpg" alt="">
									<div class="acf-actions -hover">
										<a class="acf-icon -pencil dark" data-name="edit" href="#" title="Edit"></a><a class="acf-icon -cancel dark" data-name="remove" href="#" title="Remove"></a>
									</div>
								</div>
							</div>
												</div>
							</div>
							<div class="acf-field acf-field-textarea acf-field-5a04a3bda3c9d" data-name="bio" data-type="textarea" data-key="field_5a04a3bda3c9d">
									<div class="acf-label">
									<label for="acf-field_5a04a3bda3c9d">Bio</label>		<p class="description">Include a short description about yourself.</p>	</div>
									<div class="acf-input">
									<textarea id="acf-field_5a04a3bda3c9d" name="acf[field_5a04a3bda3c9d]" rows="8">Sample bio...</textarea>					</div>
							</div>
							<div class="acf-field acf-field-select acf-field-5a04a387a3c9c" data-name="profile_visibility" data-type="select" data-key="field_5a04a387a3c9c">
									<div class="acf-label">
									<label for="acf-field_5a04a387a3c9c">Profile Visibility</label>		<p class="description">Choose if you want your activity to show up in public feeds.</p>	</div>
									<div class="acf-input">
									<select id="acf-field_5a04a387a3c9c" class="" name="acf[field_5a04a387a3c9c]" data-ui="0" data-ajax="0" data-multiple="0" data-placeholder="Select" data-allow_null="0">
							<option value="Public" selected="selected" data-i="0">Public</option>
							<option value="Private">Private</option>
							</select>
												</div>
							</div>
							<div class="acf-field acf-field-text acf-field--validate-email" style="display:none !important;" data-name="_validate_email" data-type="text" data-key="_validate_email">
									<div class="acf-label">
									<label for="acf-_validate_email">Validate Email</label>			</div>
									<div class="acf-input">
									<div class="acf-input-wrap"><input type="text" id="acf-_validate_email" name="acf[_validate_email]"></div>					</div>
							</div>
									</div>
									
											
									<div class="acf-form-submit">
										
										<input type="submit" class="acf-button button button-primary button-large" value="Save Profile">			<span class="acf-spinner"></span>			
									</div>
									
									</form>
								</div>
							</div>
							<!--/.form-container-->	
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
