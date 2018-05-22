<?php

include('config.php');

if (isset($_GET['id'])) {
	$sql = $conn->prepare("SELECT * FROM Clients WHERE id=" . $_GET['id']);
	$result = $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);
}


if (isset($_POST['update-or-add'])) {
  $business_name = $_POST['business_name'];
  $business_phone = $_POST['business_phone'];
  $business_email = $_POST['business_email'];
  $business_address = $_POST['business_address'];
  $business_billing = $_POST['business_billing'];

  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];


  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $birthday = $_POST['birthday'];
  $service_level = $_POST['service_level'];
  $website = isset($_POST['website']) ? $_POST['website'] : '0';
  $hotspot = isset($_POST['hotspot']) ? $_POST['hotspot'] : '0';
  $computer_service = isset($_POST['computer_service']) ? $_POST['computer_service'] : '0';

  $agreement_date = $_POST['agreement_date'];
  $latest_update = $_POST['latest_update'];
  $minimum_term = $_POST['minimum_term'];
  $monthly_rate = $_POST['monthly_rate'];
  $hourly_rate = $_POST['hourly_rate'];
  $retainer_recharge = $_POST['retainer_recharge'];
  $notes = $_POST['notes'];
  $travel_rate = $_POST['travel_rate'];
  $after_hours = $_POST['after_hours'];
}



if (isset($_POST['update-or-add']) && isset($_POST['id'])) {
		$id = $_POST['id'];
		$update = $conn->prepare("UPDATE Clients SET
		business_name = '$business_name',
		business_phone = '$business_phone',
		business_email = '$business_email',
		business_address = '$business_address',
		business_billing = '$business_billing',
		first_name = '$first_name',
		middle_name = '$middle_name',
		last_name = '$last_name',
		phone = '$phone',
		email = '$email',
		birthday = '$birthday',
		service_level = '$service_level',
		website = '$website',
		hotspot = '$hotspot',
		computer_service = '$computer_service',
    agreement_date = '$agreement_date',
    latest_update = '$latest_update',
    minimum_term = '$minimum_term',
    monthly_rate = '$monthly_rate',
    hourly_rate = '$hourly_rate',
    retainer_recharge = '$retainer_recharge',
    notes = '$notes',
    travel_rate = '$travel_rate',
    after_hours = '$after_hours'
		WHERE id = '$id'");
		$update->execute();
}

if (isset($_POST['update-or-add']) && !isset($_POST['id'])) {
  $new_client = $conn->prepare("INSERT INTO Clients (business_name, business_phone, business_email, business_address, business_billing, first_name, middle_name, last_name,
  phone, email, birthday, service_level, website, hotspot, computer_service, agreement_date, latest_update, minimum_term, monthly_rate, hourly_rate, retainer_recharge, notes, travel_rate, after_hours)
  VALUES ('$business_name', '$business_phone', '$business_email', '$business_address', '$business_billing', '$first_name', '$middle_name',
  '$last_name', '$phone', '$email', '$birthday', '$service_level', '$website', '$hotspot', '$computer_service', '$agreement_date',
  '$latest_update', '$minimum_term', '$monthly_rate', '$hourly_rate', '$retainer_recharge', '$notes', '$travel_rate', '$after_hours')");
  $new_client->execute();
  $id = $conn->lastinsertid();
}

 ?>

<script type = "text/javascript">

var client = <?php echo json_encode($result); ?>;

</script>
