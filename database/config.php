<?php
//
// // PROD
// $host = 'localhost';
// $username = 'sammond_itac';
// $password = 'co79dCk9QvNjwg3dwn9sVVfj46YD4p';
// $dbname = "sammond_itac_technology";
// $dsn = "mysql:host=$host;dbname=$dbname";
// $conn = new PDO($dsn, $username, $password);
//


// DEV
$host = "127.0.0.1";
$username = "root";
$password = "password";
$dbname = "itac.technology"; // will use later
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$conn = new PDO($dsn, $username, $password, $options);


if (isset($_GET['id'])) {
	$sql = $conn->prepare("SELECT * FROM Clients WHERE id=" . $_GET['id']);
	$result = $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);
}

if ($_POST) {

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
		$website = $_POST['website'] ? $_POST['website'] : '0';
		$hotspot = $_POST['hotspot'] ? $_POST['hotspot'] : '0';
		$computer_service = $_POST['computer_service'] ? $_POST['computer_service'] : '0';

		$initials = $_POST['initials'];
		$date_submitted = $_POST['date_submitted'];

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
		date_submitted = '$date_submitted',
		initials = '$initials'
		WHERE id = '$id'");
		$update->execute();

}

?>

<script type = "text/javascript">

var client = <?php echo json_encode($result); ?>;

</script>
