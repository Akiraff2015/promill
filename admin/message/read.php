<?php
	include_once('../../database/db.php');
	session_start();

	function generate_column($col1, $col2) {
		return "<tr>
			<td style='font-weight: 600;'>{$col1}</td>
			<td>{$col2}</td>
		</tr>";
	}

	if (!isset($_SESSION['is_login'])) {
		header("Location: ../login");
	}
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Messages</title>

		<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="../../public/lib/jquery/jquery-3.2.1.slim.min.js"></script>
		<script src="../../public/lib/popper/popper.min.js"></script>
		<script src="../../public/lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../../public/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../public/lib/fontawesome/font-awesome.min.css">
	</head>

	<body>
		<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-primary">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="#">Admin Promill</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../mail">Mail <span class="badge badge-pill badge-danger"><?php echo $_SESSION["unread"];?></span></a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="../createuser">Criar Usuario</a>
					</li>
				</ul>

				<ul class="nav navbar-nav ml-auto">
					<li style="margin-right: 15px;" class="nav-item">
						<a class="navbar-text"><i class="fa fa-user"></i> <?php echo ucwords($_SESSION['is_user']); ?></a>
					</li>

					<form class="form-inline my-2 my-lg-0" id="map-align-left">
							<div class="btn btn-danger clear-button-style">
								<a style="color: white; text-decoration: none;" href="../logout"> <i class="fa fa-sign-out"></i> Logout</a>
						</div>
					</form>
				</ul>
			</div>
		</nav>

		<div style="margin-top: 65px; margin-bottom: 40px;" class="container">
			<?php
				// If query result is not empty selects specific messages from the database
				if (isset($_REQUEST['mid'])){
					$sql = $conn->prepare("SELECT * FROM message_table WHERE id = :id");
					$sql->execute(array(':id' => htmlspecialchars($_REQUEST['mid'])));
					$row = $sql->fetch(PDO::FETCH_ASSOC);

					$sql = $conn->prepare("UPDATE message_table SET is_read = :is_read WHERE id = :id");
					
					$sql->execute(array(
						':is_read' => htmlspecialchars($_REQUEST['is_read']),
						':id' => htmlspecialchars($_REQUEST['mid'])
					));

					echo "<h1>{$row['subject']}</h1>";
					echo "<i class='fa fa-clock-o'></i> {$row['date_created']} - {$row['contact_name']}";

					echo "<table style='margin-top: 30px;' class='table table-bordered'>";

					// Company name column
					echo generate_column('Nome da empresa: ', $row['company_name']);

					// Name column
					echo generate_column("Nome: ", $row['contact_name']);

					//Phone numbe
					echo generate_column("Número de telefone: ", $row['telephone']);

					// Email column
					echo generate_column("E-mail: ", $row['email']);
					
					// Address column
					echo generate_column("Endereço: ", $row['address']);

					echo generate_column("CEP: ", $row['cep']);

					echo "</table>";


					echo "<p>{$row['message']}</p>";
				}
			?>

			<p class="text-center"><a href="../mail">&lt;&lt; Voltar</a></p>
		</div>
	</body>
</html>