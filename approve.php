<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Approved' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Approved';
		$p ="INSERT into hire(client_id,status) values('$id','Approved')";
		$conn->query($p);
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
