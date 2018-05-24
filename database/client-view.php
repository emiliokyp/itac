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

if (isset($_POST['id'])) {

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
    $nbn = isset($_POST['nbn']) ? $Firewall->getClean($_POST['nbn']) : '0';
    $website = isset($_POST['website']) ? $Firewall->getClean($_POST['website']) : '0';
    $hotspot = isset($_POST['hotspot']) ? $Firewall->getClean($_POST['hotspot']) : '0';
    $computer_service = isset($_POST['computer_service']) ? $Firewall->getClean($_POST['computer_service']) : '0';
    $gsuite = isset($_POST['gsuite']) ? $Firewall->getClean($_POST['gsuite']) : '0';
    $anti_virus = isset($_POST['anti_virus']) ? $Firewall->getClean($_POST['anti_virus']) : '0';

    $form_signed_by = $Firewall->getClean($_POST['form_signed_by']);
		$date_submitted = $Firewall->getClean($_POST['date_submitted']);

		$id = $Firewall->getClean($_POST['id']);

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
    nbn = '$nbn',
		website = '$website',
		hotspot = '$hotspot',
    gsuite = '$gsuite',
    anti_virus = '$anti_virus',
		computer_service = '$computer_service',
    form_signed_by = '$form_signed_by',
		date_submitted = '$date_submitted'
		WHERE id = '$id'");
		$update->execute();

}

?>

<script type = "text/javascript">

var client = <?php echo json_encode($result); ?>;

</script>
