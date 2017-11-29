<?php
	session_start();
	include_once('./message/unread.php');

	if (!isset($_SESSION['is_login'])) {
		header("Location: ./login");
	}

	function generate_row($id, $contact_name, $subject, $date_created, $is_read) {
		$date = date("F j, Y g:i a", strtotime($date_created));
		
		//If the user read it
		if ($is_read == 1) {
			return "<tr>
				<td> <a href='./message/read?mid={$id}&is_read=1'>{$contact_name}</a> </td>
				<td> {$subject} </td>
				<td> {$date} </td>
				<td> <a href='./mail?mid={$id}&delete=1'><div class='btn btn-danger'><i class='fa fa-trash-o'></i></div></a> </td>
			</tr>";
		}

		//If user didn't read
		return "<tr style='font-weight: 700; background-color: rgba(128, 128, 128, 0.2);'>
			<td> <a href='./message/read?mid={$id}&is_read=1'>{$contact_name}</a> </td>
			<td> {$subject} </td>
			<td> {$date} </td>
			<td> <a href='./mail?mid={$id}&delete=1'><div class='btn btn-danger'><i class='fa fa-trash-o'></i></div></a> </td>
		</tr>";
	}
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Messages <?php echo "({$_SESSION['unread']})";?></title>

		<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="../public/lib/jquery/jquery-3.2.1.slim.min.js"></script>
		<script src="../public/lib/popper/popper.min.js"></script>
		<script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../public/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/lib/fontawesome/font-awesome.min.css">
		
		<script src="./public/js/script.js"></script>
		<link rel="stylesheet" href="./public/css/style.css">
	</head>

	<body>
		<!-- Beggining of Nav -->
		<?php include_once('./template/adminnav.php'); ?>

		<div style="margin-top: 90px;" class="container">
			<table class="table">
				<tbody>
				<?php
					$sql = "SELECT * FROM message_table WHERE is_hidden = 0 ORDER BY date_created DESC";

					// Prints all messages from the database
					foreach($conn->query($sql) as $row) {
						echo generate_row($row['id'], $row['contact_name'], $row['subject'], $row['date_created'], $row['is_read']);
					}

					// If the user clicks on rubbish bin button, will automatically hide the message. and NOT delete.
					if (isset($_REQUEST['delete'])) {
						$sql = $conn->prepare("UPDATE message_table SET is_hidden = :hidden WHERE id = :id");

						$sql->execute(array(
							':id' => $_REQUEST['mid'],
							':hidden' => $_REQUEST['delete']
						));

						exit(header("Location: ./mail"));
					}
				?>
			</table>
		</div>
	</body>
</html>	