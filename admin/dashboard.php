<?php
	session_start();
	include_once("./message/unread.php");

	if (!isset($_SESSION['is_login'])) {
		header("Location: ./login.php");
	}
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Dashboard</title>
		<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="../public/lib/jquery/jquery-3.2.1.slim.min.js"></script>
		<script src="../public/lib/popper/popper.min.js"></script>
		<script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../public/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/lib/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" href="../public/css/style.css">
	</head>

	<body>
		<?php include_once("./template/adminnav.php"); ?>
	</body>
</html>