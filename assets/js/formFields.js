// // Create URL from url string
// var url = new URL(window.location.href);

var businessName = client.business_name;
var businessPhone = client.business_phone;
var businessEmail = client.business_email;
var businessAddress = client.business_address;
var businessBilling = client.business_billing;

var firstName = client.first_name;
var middleName = client.middle_name;
var lastName = client.last_name;
var phone = client.phone;
var email = client.email;
var birthday = client.birthday;

var serviceLevel = client.service_level;

var nbn = client.nbn;
var website = client.website;
var hotspot = client.hotspot;
var computerService = client.computer_service;
var gsuite = client.gsuite;
var antiVirus = client.anti_virus;

var agreementDate = client.agreement_date;
var latestUpdate = client.latest_update;
var minimumTerm = client.minimum_term;
var monthlyRate = client.monthly_rate;
var hourlyRate = client.hourly_rate;
var retainerRecharge = client.retainer_recharge;
var notes = client.notes;
var travelRate = client.travel_rate;
var afterHours = client.after_hours;

// // Seperate into variables

// // Bussiness variables
// var businessName = url.searchParams.get('business_name');
// var businessPhone = url.searchParams.get('business_phone');
// var businessEmail = url.searchParams.get('business_email');
// var businessAddress = url.searchParams.get('business_address');
// var businessBilling = url.searchParams.get('business_billing');

// // Personal variables
// var firstName = url.searchParams.get('first_name');
// var lastName = url.searchParams.get('last_name');
// var phone = url.searchParams.get('phone');
// var email = url.searchParams.get('email');
// var birthday = url.searchParams.get('birthday');

// // Service level
// var serviceLevel = url.searchParams.get('service');

// // Fixed price services
// var website = url.searchParams.get('website');
// var hotspot = url.searchParams.get('hotspot');
// var computerService = url.searchParams.get('computer_service');

// //Variables from readonly section
// var agreementDate = url.searchParams.get('agreement_date');
// var latestUpdate = url.searchParams.get('latest_update');
// var minimumTerm = url.searchParams.get('minimum_term');
// var monthlyRate = url.searchParams.get('monthly_rate');
// var hourlyRate = url.searchParams.get('hourly_rate');
// var retainerRecharge = url.searchParams.get('retainer_recharge');
// var notes = url.searchParams.get('notes');
// var travelRate = url.searchParams.get('travel_rate');
// var afterHours = url.searchParams.get('afterHours');

// Apply values to form inputs

// Business form inputs
businessName
  ? (document.querySelector('#business_name').value = businessName)
  : false;
businessPhone
  ? (document.querySelector('#business_phone').value = businessPhone)
  : false;
businessEmail
  ? (document.querySelector('#business_email').value = businessEmail)
  : false;
businessAddress
  ? (document.querySelector('#business_address').value = businessAddress)
  : false;
businessBilling
  ? (document.querySelector('#business_billing').value = businessBilling)
  : false;

// Personal form inputs
// Full name, only taken from URL if both variables are present
firstName ? (document.querySelector('#first_name').value = firstName) : false;
middleName
  ? (document.querySelector('#middle_name').value = middleName)
  : false;
lastName ? (document.querySelector('#last_name').value = lastName) : false;
phone ? (document.querySelector('#phone').value = phone) : false;
email ? (document.querySelector('#email').value = email) : false;
birthday ? (document.querySelector('#birthday').value = birthday) : false;

// Service level radio buttons
if (window.location.pathname.toLowerCase() === '/service-agreement') {
  switch (serviceLevel.toLowerCase()) {
    case 'platnium partnership':
      document.querySelector('#platnium').checked = true;
      $('input[name=service_level]:not(:checked)').attr('disabled', true);
      break;
    case 'prepaid retainer':
      document.querySelector('#prepaid').checked = true;
      $('input[name=service_level]:not(:checked)').attr('disabled', true);
      break;
    case 'casual':
      document.querySelector('#casual').checked = true;
      $('input[name=service_level]:not(:checked)').attr('disabled', true);
      break;
    default:
      break;
  }
} else {
  switch (serviceLevel.toLowerCase()) {
    case 'platnium partnership':
      document.querySelector('#platnium').checked = true;
      break;
    case 'prepaid retainer':
      document.querySelector('#prepaid').checked = true;
      break;
    case 'casual':
      document.querySelector('#casual').checked = true;
      break;
    default:
      break;
  }
}
// Fixed price services
nbn == '1' ? (document.querySelector('#nbn').checked = true) : false;
website == '1' ? (document.querySelector('#website').checked = true) : false;
hotspot == '1' ? (document.querySelector('#hotspot').checked = true) : false;
computerService == '1'
  ? (document.querySelector('#computer_service').checked = true)
  : false;
gsuite == '1' ? (document.querySelector('#gsuite').checked = true) : false;
antiVirus == '1'
  ? (document.querySelector('#anti_virus').checked = true)
  : false;

// Read only section

agreementDate
  ? (document.querySelector('#agreement_date').value = agreementDate)
  : false;
latestUpdate
  ? (document.querySelector('#latest_update').value = latestUpdate)
  : false;
minimumTerm
  ? (document.querySelector('#minimum_term').value = minimumTerm)
  : false;
monthlyRate
  ? (document.querySelector('#monthly_rate').value = monthlyRate)
  : false;
hourlyRate
  ? (document.querySelector('#hourly_rate').value = hourlyRate)
  : false;

// default retainer recharge
retainerRecharge
  ? (document.querySelector('#retainer_recharge').value = retainerRecharge)
  : false;

// notes
notes ? (document.querySelector('#notes').value = notes) : false;

// travel rate
travelRate
  ? (document.querySelector('#travel_rate').value = travelRate)
  : false;

// after hours rate
afterHours
  ? (document.querySelector('#after_hours').value = afterHours)
  : false;

// tool tips init
$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});
