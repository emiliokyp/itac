<?php

include('config.php');
include('firewall.php');
$Firewall = new Firewall();

if (isset($_GET['id'])) {
  $id = $Firewall->getClean($_GET['id']);
  $sql = $conn->prepare("SELECT * FROM Clients WHERE id='$id'");
	$result = $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);
}


if (isset($_POST['update-or-add'])) {
  $business_name = $Firewall->getClean($_POST['business_name']);
  $business_phone = $Firewall->getClean($_POST['business_phone']);
  $business_email = $Firewall->getClean($_POST['business_email']);
  $business_address = $Firewall->getClean($_POST['business_address']);
  $business_billing = $Firewall->getclean($_POST['business_billing']);

  $first_name = $Firewall->getClean($_POST['first_name']);
  $middle_name = $Firewall->getClean($_POST['middle_name']);
  $last_name = $Firewall->getClean($_POST['last_name']);


  $phone = $Firewall->getClean($_POST['phone']);
  $email = $Firewall->getClean($_POST['email']);
  $birthday = $Firewall->getClean($_POST['birthday']);
  $service_level = $Firewall->getClean($_POST['service_level']);
  $website = isset($_POST['website']) ? $Firewall->getClean($_POST['website']) : '0';
  $hotspot = isset($_POST['hotspot']) ? $Firewall->getClean($_POST['hotspot']) : '0';
  $computer_service = isset($_POST['computer_service']) ? $Firewall->getClean($_POST['computer_service']) : '0';

  $agreement_date = $Firewall->getClean($_POST['agreement_date']);
  $latest_update = $Firewall->getClean($_POST['latest_update']);
  $minimum_term = $Firewall->getClean($_POST['minimum_term']);
  $monthly_rate = $Firewall->getClean($_POST['monthly_rate']);
  $hourly_rate = $Firewall->getClean($_POST['hourly_rate']);
  $retainer_recharge = $Firewall->getClean($_POST['retainer_recharge']);
  $notes = $_POST['notes'];
  $travel_rate = $Firewall->getClean($_POST['travel_rate']);
  $after_hours = $Firewall->getClean($_POST['after_hours']);
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
  function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
  $id = gen_uuid();
  $new_client = $conn->prepare("INSERT INTO Clients (id, business_name, business_phone, business_email, business_address, business_billing, first_name, middle_name, last_name,
  phone, email, birthday, service_level, website, hotspot, computer_service, agreement_date, latest_update, minimum_term, monthly_rate, hourly_rate, retainer_recharge, notes, travel_rate, after_hours)
  VALUES ('$id','$business_name', '$business_phone', '$business_email', '$business_address', '$business_billing', '$first_name', '$middle_name',
  '$last_name', '$phone', '$email', '$birthday', '$service_level', '$website', '$hotspot', '$computer_service', '$agreement_date',
  '$latest_update', '$minimum_term', '$monthly_rate', '$hourly_rate', '$retainer_recharge', '$notes', '$travel_rate', '$after_hours')");
  $new_client->execute();
  // $id = $conn->lastinsertid();
}

 ?>

<script type = "text/javascript">

var client = <?php echo json_encode($result); ?>;

</script>
