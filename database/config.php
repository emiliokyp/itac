<?php



$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);



if (isset($request_uri[1])) {

	$host = "127.0.0.1";
	$username = "root";
	$password = "password";
	$dbname = "itac.technology"; // will use later
	$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
	$options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	$conn = new PDO($dsn, $username, $password, $options);

	$sql = $conn->prepare("SELECT * FROM Clients WHERE id=" . $request_uri[1]);
	$result = $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);

}

if (isset($_POST['business_name'])) {
	$update = $conn->prepare("UPDATE business_name=" . $_POST['business_name'] . 'WHERE id=1');
	$update->execute();
}


?>

<script type = "text/javascript">

var client = <?php echo json_encode($result); ?>;

</script>