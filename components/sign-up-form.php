  <?php require './database/client-view.php'; ?>

	<section class="sign-up-container">
	<h1><img style="width: 50px; padding-bottom: 10px; margin-right: 15px;" src="https://s3-ap-southeast-2.amazonaws.com/itac.technology/Web+Assets/meerkat.png" alt="">Welcome to the clan! :)</h1>
		<form action="scripts/service-agreement.php" method="post" id="sign-up-form">
		<div class="form-group">
   	 			<label for="business_name">Business Name</label>
    			<input name="business_name" type="text" class="form-control" id="business_name" required>
  		</div>
			<div class="form-group">
   	 			<label for="business_phone">Business Phone</label>
    			<input name="business_phone" type="text" class="form-control" id="business_phone" required>
  		</div>
			<div class="form-group">
   	 			<label for="business_email">Business Email</label>
    			<input name="business_email" type="email" class="form-control" id="business_email" required>
  		</div>
			<div class="form-group">
   	 			<label for="business_address">Business Street Address</label>
    			<input name="business_address" type="text" class="form-control" id="business_address" required>
  		</div>
			<div style="margin-bottom: 50px;" class="form-group">
   	 			<label for="business_billing">Business Billing Address</label>
    			<input name="business_billing" placeholder="Leave blank if it is the same as your street address" type="text" class="form-control" id="business_billing">
  		</div>
			<div class="form-group">
   	 			<label for="first_name">Your First Name</label>
    			<input name="first_name" type="text" class="form-control" id="first_name" required>
  		</div>
			<div class="form-group">
					<label for="middle_name">Your Middle Name</label>
					<input name="middle_name" type="text" class="form-control" id="middle_name">
			</div>
			<div class="form-group">
					<label for="last_name">Your Last Name</label>
					<input name="last_name" type="text" class="form-control" id="last_name" required>
			</div>
			<div class="form-group">
   	 			<label for="phone">Your Mobile</label>
    			<input name="phone" type="text" class="form-control" id="phone" required>
  		</div>
			<div class="form-group">
   	 			<label for="email">Your Email</label>
    			<input name="email" type="email" class="form-control" id="email" required>
  		</div>
			<div style="margin-bottom: 50px;" class="form-group">
   	 			<label for="birthday">Your Birthday 	<button style="background-color: none; border: none;" type="button" data-toggle="tooltip" data-placement="top" title="Why? two reasons, (1) in the event we need to use your details as verification to access an account and (2) so we can wish you happy birthday, of course!"><i class="fas fa-info-circle"></i></button></label>
    			<input name="birthday" type="text" class="form-control" id="birthday" placeholder="DD/MM/YYYY" required>
  		</div>


		<div class="form-group">
		<label for="platnium">Service Level <button onclick="window.open(
  'https://itac.technology/pricing',
  '_blank'
);" style="background-color: none; border: none;" type="button" data-toggle="tooltip" data-placement="top" title="What are these? Full details of our service level and pricing tiers are available at itac.technology/pricing, click to view page"><i class="fas fa-info-circle"></i></button></label>
			<div class="custom-control custom-radio">
  				<input value="Platnium Partnership" type="radio" id="platnium" name="service_level" class="custom-control-input" required>
  				<label class="custom-control-label" for="platnium">Platnium Partnership</label>
				</div>
			<div class="custom-control custom-radio">
  			<input value="Prepaid Retainer" type="radio" id="prepaid" name="service_level" class="custom-control-input">
  			<label class="custom-control-label" for="prepaid">Prepaid Retainer</label>
			</div>
			<div class="custom-control custom-radio">
  			<input value="Casual" type="radio" id="casual" name="service_level" class="custom-control-input">
  			<label class="custom-control-label" for="casual">Casual</label>
			</div>
		</div>

		<div class="form-group">
		<label for="platnium">Fixed Price Services <button onclick="window.open(
  'https://itac.technology/pricing#fixed-prices',
  '_blank'
);" style="background-color: none; border: none;" type="button" data-toggle="tooltip" data-placement="top" title="What are these? Additional technology services at a fixed price! You’ll find full details for each service at itac.technology/pricing, click to view page"><i class="fas fa-info-circle"></i></button></label>
    <div class="custom-control custom-checkbox">
      <input value="1" type="checkbox" id="nbn" name="nbn" class="custom-control-input">
      <label class="custom-control-label" for="nbn">Assisted NBN Signup | $349 per signup</label>
    </div>
      <div class="custom-control custom-checkbox">
  				<input value="1" type="checkbox" id="website" name="website" class="custom-control-input">
  				<label class="custom-control-label" for="website">Website Maintenance | $99 per website per month</label>
				</div>
			<div class="custom-control custom-checkbox">
  			<input value="1" type="checkbox" id="hotspot" name="hotspot" class="custom-control-input">
  			<label class="custom-control-label" for="hotspot">Guest Wifi Hotspot Management | $149 per network per service</label>
			</div>
			<div class="custom-control custom-checkbox">
  			<input value="1" type="checkbox" id="computer_service" name="computer_service" class="custom-control-input">
  			<label class="custom-control-label" for="computer_service">Computer Service | $199 per computer</label>
			</div>
      <div class="custom-control custom-checkbox">
        <input value="1" type="checkbox" id="gsuite" name="gsuite" class="custom-control-input">
        <label class="custom-control-label" for="gsuite">G Suite email system setup | $24 for first user</label>
      </div>
      <div class="custom-control custom-checkbox"  style="margin-bottom: 50px;">
        <input value="1" type="checkbox" id="anti_virus" name="anti_virus" class="custom-control-input">
        <label class="custom-control-label" for="anti_virus">Anti-virus security protection | $59 per workstation per year</label>
      </div>
		</div>

	<div class="readonly-info">
		<div class="form-group">
					<label for="agreement_date">Original Agreement Commencement Date</label>
					<input class="form-control" type="text" id="agreement_date" name="agreement_date" readonly>
		</div>

			<div class="form-group">
					<label for="latest_update">Latest Agreement Update Date</label>
					<input class="form-control" type="text" id="latest_update" name="latest_update" readonly>
		</div>

		<div class="form-group">
					<label for="minimum_term">Service Level Minimum Term</label>
					<input class="form-control" type="text" id="minimum_term" name="minimum_term" readonly>
		</div>

		<div class="form-group">
					<label for="monthly_rate">Monthly Rate</label>
					<input class="form-control" type="text" id="monthly_rate" name="monthly_rate" readonly>
		</div>

		<div class="form-group">
					<label for="hourly_rate">Hourly Rate</label>
					<input class="form-control" type="text" id="hourly_rate" name="hourly_rate" readonly>
		</div>


		<div class="form-group">
					<label for="retainer_recharge">Default Retainer Recharge</label>
					<input class="form-control" type="text" id="retainer_recharge" name="retainer_recharge" readonly>
		</div>



		<div class="form-group">
					<label for="notes">Notes</label>
					<textarea class="form-control" type="text" id="notes" name="notes" readonly></textarea>
		</div>


		<div class="form-group">
					<label for="travel_rate">Travel Rate</label>
					<input class="form-control" type="text" id="travel_rate" name="travel_rate" value="50% of hourly rate (Effective beyond Byron Bay town limits)" readonly>
		</div>

			<div class="form-group">
					<label for="after_hours">After Hours Rate</label>
					<input class="form-control" type="text" id="after_hours" name="after_hours" value="2x hourly rate" readonly>
		</div>


		</div>
		<div class="form-group">
		<label for="terms_1">Terms of Service</label>
		<div style="border: 1px solid lightgrey; padding: 10px; overflow: scroll; width: 100%; height: 300px; margin-bottom: 20px; border-radius: 4px;"><?php require './components/terms-of-service.php' ?></div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" class="custom-control-input" id="terms_1" required>
  			<label class="custom-control-label" for="terms_1">Have read, understood and agree to engage itac.technology as per this document and have read and understand the <a href="https://itac.technology/pricing" target="_blank">pricing and service level information</a></label>
			</div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" class="custom-control-input" id="terms_2" required>
  			<label class="custom-control-label" for="terms_2">Agree to contact itac.technology within 7 days if changes need to be made to this agreement.</label>
			</div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" class="custom-control-input" id="terms_3" required>
  			<label class="custom-control-label" for="terms_3">Agree to setup a pre-authorised payment method if my service level requires it</label>
			</div>
		</div>

    <input required class="form-control" placeholder="Your Name" type="text" name="form_signed_by" id="form_signed_by">
		<input required class="form-control" id="date_submitted" name="date_submitted" type="date">
		<button type="submit" class="btn sign-up-submit">Submit</button>
		<input type="hidden" name="id" value="<?php echo !empty($_GET['id']) ?htmlspecialchars($_GET['id']) :''; ?>" />
		</form>
	</section>
<script src="assets/js/formFields.js"></script>
