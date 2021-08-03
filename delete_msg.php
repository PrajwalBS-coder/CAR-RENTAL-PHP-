<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM message WHERE msg_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Replied to Client Successfully \");
					window.location = (\"index.php\")
				</script>";
	}
?>
