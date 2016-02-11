<?php
// Block direct requests
if ( !defined('ABSPATH') ) {
	exit();
}

// ------------- Functions -------------
function sci_contact_info_admin() {

	$hidden_field_name = 'contact_info';

	if (!empty($_POST) && ($_POST[$hidden_field_name] == 'Y')) {

		// Social links
		$twitter    = !empty($_POST['twitter']) ? trim(strip_tags($_POST['twitter'])) : '';
		$facebook 	= !empty($_POST['facebook']) ? trim(strip_tags($_POST['facebook'])) : '';
		$youtube 	= !empty($_POST['youtube']) ? trim(strip_tags($_POST['youtube'])) : '';
		$google 	= !empty($_POST['google']) ? trim(strip_tags($_POST['google'])) : '';
		$linkedin 	= !empty($_POST['linkedin']) ? trim(strip_tags($_POST['linkedin'])) : '';

		// Contact info
		$phone 		= !empty($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
		$phone2		= !empty($_POST['phone2']) ? trim(strip_tags($_POST['phone2'])) : '';
		$fax 		= !empty($_POST['fax']) ? trim(strip_tags($_POST['fax'])) : '';
		$fax2		= !empty($_POST['fax2']) ? trim(strip_tags($_POST['fax2'])) : '';
		$email 		= !empty($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';

		// Address
		$state 		= !empty($_POST['state']) ? trim(strip_tags($_POST['state'])) : '';
		$state2 	= !empty($_POST['state2']) ? trim(strip_tags($_POST['state2'])) : '';
		$city 		= !empty($_POST['city']) ? trim(strip_tags($_POST['city'])) : '';
		$city2		= !empty($_POST['city2']) ? trim(strip_tags($_POST['city2'])) : '';
		$street 	= !empty($_POST['street']) ? trim(strip_tags($_POST['street'])) : '';
		$street2 	= !empty($_POST['street2']) ? trim(strip_tags($_POST['street2'])) : '';
		$zip 		= !empty($_POST['zip']) ? trim(strip_tags($_POST['zip'])) : '';
		$zip2		= !empty($_POST['zip2']) ? trim(strip_tags($_POST['zip2'])) : '';

		// Custom social links
		if (!empty($_POST['customOpt'])) {
			foreach ($_POST['customOpt'] as $key => $value) {
				update_option($key,	trim(strip_tags($value)));
			}
		}

		// Social links
		update_option('qs_contact_twitter',	$twitter);
		update_option('qs_contact_facebook', $facebook);
		update_option('qs_contact_youtube', $youtube);
		update_option('qs_contact_google', $google);
		update_option('qs_contact_linkedin', $linkedin);

		// Contact info
		update_option('qs_contact_phone', $phone);
		update_option('qs_contact_phone2', $phone2);
		update_option('qs_contact_fax', $fax);
		update_option('qs_contact_fax2', $fax2);
		update_option('qs_contact_email', $email);

		// Address
		update_option('qs_contact_state', $state);
		update_option('qs_contact_state2', $state2);
		update_option('qs_contact_city', $city); 
		update_option('qs_contact_city2', $city2); 
		update_option('qs_contact_street', $street);
		update_option('qs_contact_street2', $street2);
		update_option('qs_contact_zip', $zip);
		update_option('qs_contact_zip2', $zip2);  

		add_action('admin_notices', 'sci_updated_notice');
		$msg = __('Information successfully updated.', 'simple-contact-info');
		sci_updated_notice($msg);

		do_action( 'sci_updated_info' ); // clear widgets cache
	} 
	$customSocial = sci_get_options();
	?>
	<div class="wrap">
		<div class="icon-sci-contact">
			<img src="<?php echo SCI_URL . 'css/contact-info-icon.png'; ?>" alt="">
		</div>
		<h2><?php _e("Simple Contact Information", "simple-contact-info"); ?></h2>
		<form name="contactForm" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<!--<h3><?php _e("Social links", "simple-contact-info"); ?></h3>

			<span class="description"><?php _e("This information is used by", "simple-contact-info"); ?> <strong><?php _e("Simple Social Icons", "simple-contact-info"); ?></strong></span>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="twitter"><?php _e("Twitter", "simple-contact-info"); ?></label></th>
						<td>
							<input id="twitter" name="twitter" class="regular-text" type="text" value="<?php echo get_option('qs_contact_twitter'); ?>" />
							<span class="description"><?php _e("Link to Twitter page. (example \"https://twitter.com/lehamotovilov\")", "simple-contact-info"); ?></span>
						</td>
					</tr>
					<tr>
						<th><label for="facebook"><?php _e("Facebook", "simple-contact-info"); ?></label></th>
						<td>
							<input id="facebook" name="facebook" class="regular-text" type="text" value="<?php echo get_option('qs_contact_facebook'); ?>" />
							<span class="description"><?php _e("Link to Facebook page. (example \"http://www.facebook.com/LehaMotovilov\")", "simple-contact-info"); ?></span>
						</td>
					</tr>
					<tr>
						<th><label for="youtube"><?php _e("YouTube", "simple-contact-info"); ?></label></th>
						<td>
							<input id="youtube" name="youtube" class="regular-text" type="text" value="<?php echo get_option('qs_contact_youtube'); ?>" />
							<span class="description"><?php _e("Link to YouTube page. (example \"http://www.youtube.com/user/AlekseyMotovilov\")", "simple-contact-info"); ?></span>
						</td>
					</tr>
					<tr>
						<th><label for="google"><?php _e("Google+", "simple-contact-info"); ?></label></th>
						<td>
							<input id="google" name="google" class="regular-text" type="text" value="<?php echo get_option('qs_contact_google'); ?>" />
						</td>
					</tr>
					<tr>
						<th><label for="linkedin"><?php _e("LinkedIn", "simple-contact-info"); ?></label></th>
						<td>
							<input id="linkedin" name="linkedin" class="regular-text" type="text" value="<?php echo get_option('qs_contact_linkedin'); ?>" />
						</td>
					</tr>
					<?php if (!empty($customSocial)) : ?>
						<?php foreach ($customSocial as $social) : ?>
							<tr>
								<th><label for="customOpt[<?php echo $social->option_name; ?>]"><?php echo ucfirst(str_replace('qs_contact_custom_', '', $social->option_name)); ?></label></th>
								<td>
									<input id="customOpt[<?php echo $social->option_name; ?>]" name="customOpt[<?php echo $social->option_name; ?>]" class="regular-text" type="text" value="<?php echo get_option($social->option_name); ?>" />
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table> -->
			<h3><?php _e("Contact info", "simple-contact-info"); ?></h3>
			<span class="description"><?php _e("This information is used by", "simple-contact-info"); ?> <strong><?php _e("Simple Contact Info", "simple-contact-info"); ?></strong></span>
			<table class="form-table">
				<tbody>
					<tr>
						<td></td>
						<th colspan="1"><label>Office One</label></th>
						<th><label>Office Two</label></th>
					</tr>
					<tr>
						<th><label for="phone"><?php _e("Phone number", "simple-contact-info"); ?></label></th>
						<td><input id="phone" name="phone" class="regular-text" type="text" value="<?php echo get_option('qs_contact_phone'); ?>" /></td>
						<td><input id="phone2" name="phone2" class="regular-text" type="text" value="<?php echo get_option('qs_contact_phone2'); ?>" /></td>
					</tr>					
					<tr>
						<th><label for="fax"><?php _e("FAX", "simple-contact-info"); ?></label></th>
						<td><input id="fax" name="fax" class="regular-text" type="text" value="<?php echo get_option('qs_contact_fax'); ?>" /></td>
						<td><input id="fax2" name="fax2" class="regular-text" type="text" value="<?php echo get_option('qs_contact_fax2'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="email"><?php _e("Email address", "simple-contact-info"); ?></label></th>
						<td><input id="email" name="email" class="regular-text" type="text" value="<?php echo get_option('qs_contact_email'); ?>" /></td>
					</tr>
				</tbody>
			</table>
			<h3><?php _e("Address", "simple-contact-info"); ?></h3>
			<span class="description"><?php _e("This information is used by", "simple-contact-info"); ?> <strong><?php _e("Simple Google Map, Simple Address Info", "simple-contact-info"); ?></strong></span>
			<table class="form-table">
				<tbody>
					<tr>
						<td></td>
						<th colspan="1"><label>Office One</label></th>
						<th><label>Office Two</label></th>
					</tr>
					<tr>
						<th><label for="state"><?php _e("State", "simple-contact-info"); ?></label></th>
						<td><input id="state" name="state" class="regular-text" type="text" value="<?php echo get_option('qs_contact_state'); ?>" /></td>
						<td><input id="state2" name="state2" class="regular-text" type="text" value="<?php echo get_option('qs_contact_state2'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="city"><?php _e("City", "simple-contact-info"); ?></label></th>
						<td><input id="city" name="city" class="regular-text" type="text" value="<?php echo get_option('qs_contact_city'); ?>" /></td>
						<td><input id="city2" name="city2" class="regular-text" type="text" value="<?php echo get_option('qs_contact_city2'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="street"><?php _e("Street", "simple-contact-info"); ?></label></th>
						<td><input id="street" name="street" class="regular-text" type="text" value="<?php echo get_option('qs_contact_street'); ?>" /></td>
						<td><input id="street2" name="street2" class="regular-text" type="text" value="<?php echo get_option('qs_contact_street2'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="zip"><?php _e("Zip code", "simple-contact-info"); ?></label></th>
						<td><input id="zip" name="zip" class="regular-text" type="text" value="<?php echo get_option('qs_contact_zip'); ?>" /></td>
						<td><input id="zip2" name="zip2" class="regular-text" type="text" value="<?php echo get_option('qs_contact_zip2'); ?>" /></td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
				<input id="submit" class="button button-primary" type="submit" value="<?php _e('Update info', "simple-contact-info"); ?>" name="submit" />
			</p>
		</form>
	</div>
<?php }