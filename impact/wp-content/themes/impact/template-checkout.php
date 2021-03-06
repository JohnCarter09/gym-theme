<?php
/*
Template Name: Checkout
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
						<div class="step step-centered active">
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


			<div class="page-section section-slim section-grey-light">
				<div class="container">
					<div class="checkout-container container-columns">
						<form id="mm_checkout_form" name="mm_checkout_form" action="#" onsubmit="return mmjs.checkout(true);" method="post"><input type="hidden" id="mm_membership_level_id" name="mm_membership_level_id" value="5"><input type="hidden" id="mm_product_id" name="mm_product_id" value="1"><input type="hidden" id="mm_is_member" name="mm_is_member" value="1"><input type="hidden" id="mm_field_user_id" name="mm_field_user_id" value="1"><input type="hidden" id="mm_is_free" name="mm_is_free" value="0"><input type="hidden" id="mm_is_gift" name="mm_is_gift" value="0"><input type="hidden" id="mm_is_shippable" name="mm_is_shippable" value="0"><input type="hidden" id="mm_checkout_url" name="mm_checkout_url" value="https://reflexionyoga.com/checkout/?rid=px1sVH"><input type="hidden" id="mm_checkout_debug_mode" name="mm_checkout_debug_mode" value="0"><input type="hidden" id="mm_field_payment_service" name="mm_field_payment_service"><input type="hidden" id="mm_field_billing_equals_shipping" name="mm_field_billing_equals_shipping" value="1"><input type="hidden" id="mm_is_admin" value="1"><input type="hidden" id="mm_is_customer_support_order" name="mm_is_customer_support_order" value="0"><input type="hidden" id="mm_data_product_price" value="$89.00"><input type="hidden" id="mm_data_shipping_price" value="$0.00"><input type="hidden" id="mm_data_discount" value="$0.00"><input type="hidden" id="mm_do_comp" value="0"><input type="hidden" id="hasFormSubmitted" value="">
							<div class="mm-checkoutContainer">
								<div class="checkout-column column-product">
									<div class="mm-checkoutSection">
										
										<h2 class="pricing-title"><span class="mm-data">Monthly Plan</span></h2>
										<p class="mm-productDesc"><span class="mm-data">Unlimited access to all training articles, videos and downloads, plus member-only product discounts!</span></p>
										
										<table class="table table-price">
										<tbody>
										<tr>
										<th>Price:</th>
										<td><span class="mm-data">$19.00/month</span>
										</td>
										</tr>
										<tr>
										<th>Discount:</th>
										<td><span class="mm-data"><span id="mm_label_discount">$0.00</span></span>
										</td>
										</tr>
										<tr>
										<th>Total:</th>
										<td><span class="mm-data"><span id="mm_label_total_price">$19.00</span></span>
										</td>
										</tr>
										</tbody>
										</table>

										<ul class="list-icon color-white bold">
											<li><i class="fa fa-check color-green"></i> Full access to all Training Articles, Videos and Downloads</li>
											<li><i class="fa fa-check color-green"></i> Lifetime Price-lock Guarantee</li>
										</ul>

										<hr />

										<h5 class="feature-title color-white">Money-back Guarantee</h5>
										<p class="small color-grey">All orders are backed by our 30-day money back guarantee. If you are not 100% delighted with your membership, you can email or call us for a compete refund (yes, you can even call on weekends or holidays). No contract, no commitment, and no obligation.</p>
										
									</div>
								</div>
								<div class="checkout-column column-payment">
									<div class="mm-checkoutInfo">

									<div class="mm-checkoutInfoBlock" id="mm-account-information-section">
									<h3>Account Information</h3>

									<div class="row">
									<div class="col-sm-6"><div class="mm-formField"><label class="label-hidden">First Name:</label><input type="text" id="mm_field_first_name" name="mm_field_first_name" value="" class="mm-textField" placeholder="First Name">
							</div></div>
									<div class="col-sm-6"><div class="mm-formField"><label class="label-hidden">Last Name:</label><input type="text" id="mm_field_last_name" name="mm_field_last_name" value="" class="mm-textField" placeholder="Last Name">
							</div></div>
									</div>
									<div class="row">
									<div class="col-sm-6"><div class="mm-formField"><label class="label-hidden">Email:</label><input type="text" id="mm_field_email" name="mm_field_email" class="mm-textField" placeholder="Email">
							</div></div>
									<div class="col-sm-6"><div class="mm-formField"><label class="label-hidden">Password:</label><input type="password" autocomplete="off" id="mm_field_password" name="mm_field_password" class="mm-textField" placeholder="Password">
							</div></div>
									
									</div>
									</div>

									<div>

									<div class="mm-checkoutInfoBlock" id="mm-billing-information-section">
									<h3>Billing Information </h3>
									<p class="mm-ccLogos"><img alt="Visa, Master Card, American Express, Discover" src="<?php echo get_template_directory_uri(); ?>/images/credit-card-logos.png"></p>

									<div class="row">
									<div class="col-sm-8"><div class="mm-formField"><label class="label-hidden">Credit Card:</label><input type="text" maxlength="16" onkeydown="return mmjs.onlyNumbers(event,'cc')" id="mm_field_cc_number" autocomplete="off" name="mm_field_cc_number" class="mm-textField" placeholder="Credit Card Number">
							</div></div>
									<div class="col-sm-4"><div class="mm-formField"><label class="label-hidden">Security Code:</label><input autocomplete="off" type="password" maxlength="4" onkeydown="return mmjs.onlyNumbers(event,'cc')" id="mm_field_cc_cvv" name="mm_field_cc_cvv" class="mm-textField" placeholder="Security Code">
							</div></div>
									</div>
									<div class="mm-checkout-expiration-date mm-formField" id="mm-checkout-expiration-date"><label class="mandatory">Expiration Date: </label><select name="mm_field_cc_exp_month" id="mm_field_cc_exp_month" class="mm-selectList mm-expMonthList">
							<option value="01">(01) Jan</option>
							<option value="02">(02) Feb</option>
							<option value="03">(03) Mar</option>
							<option value="04">(04) Apr</option>
							<option value="05">(05) May</option>
							<option value="06">(06) Jun</option>
							<option value="07">(07) Jul</option>
							<option value="08">(08) Aug</option>
							<option value="09">(09) Sep</option>
							<option value="10">(10) Oct</option>
							<option value="11">(11) Nov</option>
							<option value="12">(12) Dec</option>
							</select><select name="mm_field_cc_exp_year" id="mm_field_cc_exp_year" class="mm-selectList mm-expYearList">
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							</select>
							</div>
									<div class="mm-formField"><label class="label-hidden">Address:</label><input type="text" id="mm_field_billing_address" name="mm_field_billing_address" value="" class="mm-textField" placeholder="Billing Address">
							</div>
									<div class="row">
									<div class="col-sm-4"><div class="mm-formField"><label class="label-hidden">City:</label><input type="text" id="mm_field_billing_city" name="mm_field_billing_city" value="" class="mm-textField" placeholder="City">
							</div></div>
									<div class="col-sm-4"><div class="mm-formField"><label class="label-hidden">State:</label><select id="mm_field_billing_state_dd" size="1" onchange="mmjs.stateChangeHandler('billing');" class="mm-selectList billing_country_subdivisions">
							<option value="">Please select your state</option><option value="AL" selected="selected">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AS">American Samoa (see also separate entry under AS)</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="GU">Guam (see also separate entry under GU)</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="MP">Northern Mariana Islands (see also separate entry MP)</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico (see also separate entry under PR)</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UM">U.S. Minor Outlying Islands (cf. separate entry UM)</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VI">Virgin Islands of the U.S. (see also separate entry VI)</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
							<option value="-1">Other…</option>
							</select>
							<input type="text" id="mm_field_billing_state" name="mm_field_billing_state" value="AL" class="mm-textField" style="display:none;">
							</div></div>
									<div class="col-sm-4"><div class="mm-formField"><label class="label-hidden">Zip:</label><input type="text" id="mm_field_billing_zip" name="mm_field_billing_zip" value="" class="mm-textField" placeholder="Zip">
							</div></div>
									</div>
									<div class="mm-formField hidden"><label class="label-hidden">Country:</label><select id="mm_field_billing_country" name="mm_field_billing_country" onchange="mmjs.countryChangeHandler('billing');" class="mm-selectList">
							<option value="US" selected="">United States</option>
							</select>
							</div>
									</div>
									</div>

									</div>
														

									<div class="mm-purchaseSection">
										<div class="mm-paymentbuttons"><p><a href="javascript: mmjs.checkout(true);" class="mm-button large green" style="width:160px; text-align:center;">Complete Order</a></p></div>
									</div>
									<p class="checkout-terms">By clicking "Complete Order" you agree to our <a href="/terms-of-use/" target="_blank">Terms of Use</a>.</p>
									<p class="checkout-security"><i class="fa fa-lock color-green"></i>example.com is secured with SSL encryption.</p>
								</div>
							</div>
							<input type="hidden" id="mm_field_phone_override" name="mm_field_phone_override" value="">
							<div style="border: 0 none; height: 0; width: 0; padding: 0; margin: 0; overflow: hidden;"><input type="submit" tabindex="-1"></div>
							<input type="hidden" id="mm_submission_mutex" name="mm_submission_mutex" value="vzmi01wj8u">
						</form>
							
					</div>
					<!--/.checkout-container-->
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
