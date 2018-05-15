

	<section class="sign-up-container">
	<h1>Welcome to the club</h1>
		<form action="scripts/sign-up.php" method="post" id="sign-up-form">
		<div class="form-group">
   	 			<label for="business_name">Business Name</label>
    			<input type="text" class="form-control" id="business_name">
  		</div>
			<div class="form-group">
   	 			<label for="business_phone">Business Phone</label>
    			<input type="number" class="form-control" id="business_phone">
  		</div>
			<div class="form-group">
   	 			<label for="business_email">Business Email</label>
    			<input type="email" class="form-control" id="business_email" placeholder="name@example.com">
  		</div>
			<div class="form-group">
   	 			<label for="business_address">Business Street Address</label>
    			<input type="text" class="form-control" id="business_address">
  		</div>
			<div style="margin-bottom: 50px;" class="form-group">
   	 			<label for="business_billing">Business Billing Address</label>
    			<input type="number" class="form-control" id="business_billing">
  		</div>
			<div class="form-group">
   	 			<label for="name">Your Full Name</label>
    			<input type="text" class="form-control" id="name">
  		</div>
			<div class="form-group">
   	 			<label for="phone">Your Mobile</label>
    			<input type="number" class="form-control" id="phone">
  		</div>
			<div class="form-group">
   	 			<label for="email">Your Email</label>
    			<input type="email" class="form-control" id="email">
  		</div>
			<div style="margin-bottom: 50px;" class="form-group">
   	 			<label for="birthday">Your Birthday 	<button style="background-color: none; border: none;" type="button" data-toggle="tooltip" data-placement="top" title="Why? two reasons, (1) in the event we need to use your details as verification to access an account and (2) so we can wish you happy birthday, of course!"><i class="fas fa-info-circle"></i></button></label>
    			<input type="text" class="form-control" id="birthday" placeholder="DD/MM/YYYY">
  		</div>


		<div class="form-group">
		<label for="platnium">Service Level <button onclick="window.open(
  'https://itac.technology/pricing',
  '_blank'
);" style="background-color: none; border: none;" type="button" data-toggle="tooltip" data-placement="top" title="What are these? Full details of our service level and pricing tiers are available at itac.technology/pricing, click to view page"><i class="fas fa-info-circle"></i></button></label>
			<div class="custom-control custom-radio">
  				<input type="radio" id="platnium" name="service_level" class="custom-control-input" required>
  				<label class="custom-control-label" for="platnium">Platnium Partnership $130 per hour</label>
				</div>
			<div class="custom-control custom-radio">
  			<input type="radio" id="prepaid" name="service_level" class="custom-control-input">
  			<label class="custom-control-label" for="prepaid">Prepaid Retainer</label>
			</div>
			<div class="custom-control custom-radio">
  			<input type="radio" id="casual" name="service_level" class="custom-control-input">
  			<label class="custom-control-label" for="casual">Casual</label>
			</div>
		</div>

		<div class="form-group">
		<label for="platnium">Fixed Price Services</label>
			<div class="custom-control custom-checkbox">
  				<input type="checkbox" id="website" name="website" class="custom-control-input">
  				<label class="custom-control-label" for="website">Website Maintenance | $99 per website per Month</label>
				</div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" id="hotspot" name="hotspot" class="custom-control-input">
  			<label class="custom-control-label" for="hotspot">Guest Wifi Hotspot Management | $149 per network per service</label>
			</div>
			<div class="custom-control custom-checkbox" style="margin-bottom: 50px;">
  			<input type="checkbox" id="computer_service" name="computer_service" class="custom-control-input">
  			<label class="custom-control-label" for="computer_service">Computer Service | $199 per computer</label>
			</div>
		</div>		

		<div class="form-group">
		<label for="terms_1">Terms and Conditions</label>
		<div style="border: 1px solid lightgrey; padding: 10px; overflow: scroll; width: 100%; height: 300px; margin-bottom: 20px; border-radius: 4px;"><?php require './components/terms-of-service.php' ?></div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" class="custom-control-input" id="terms_1" required>
  			<label class="custom-control-label" for="terms_1">Have read, understood and agree to engage itac.technology as per this document and have read and understand the pricing and service level information</label>
			</div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" class="custom-control-input" id="terms_2" required>
  			<label class="custom-control-label" for="terms_2">Agree to review my business’ service agreement once it is supplied to me via email and contact itac.technology within 7 days if changes need to be made, else my agreement is implied and confirmed</label>
			</div>
			<div class="custom-control custom-checkbox">
  			<input type="checkbox" class="custom-control-input" id="terms_3" required>
  			<label class="custom-control-label" for="terms_3">Agree to setup a pre-authorised payment method if my service level compulsorily requires it</label>
			</div>
		</div>
		<button type="submit" class="btn">Submit</button>
		</form>
	</section>
<script src="assets/js/formFields.js"></script>
