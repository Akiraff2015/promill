<?php
/*
+-----------------------------------------------+
| File name: createuser.php                     |
| Author: Akira F. Fukushima                    |
| Date: 26 Nov 2017                             |
| Purpose: Creates a new user manually.         |
+-----------------------------------------------+
*/
	include_once('../database/db.php');
	session_start();

	if (!isset($_SESSION['is_login'])) {
		header("Location: ./login");
	}

	// Modal button user account confirmation
	if (isset($_POST['confirm_account']) && $_POST['password'] == $_POST['password_confirmation']) {
		$sql = $conn->prepare("INSERT INTO user_table (username, password, date_registered) VALUES (:username, :password, NOW())");

		$sql->execute(array(
			":username" => htmlspecialchars($_POST['username']),
			":password" => password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT)
		));

		unset($_POST['confirm_account']);
		header("Location: ./createuser");
	}
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Criar um novo usuario</title>
		<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="../public/lib/jquery/jquery-3.2.1.slim.min.js"></script>
		<script src="../public/lib/popper/popper.min.js"></script>
		<script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../public/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/lib/fontawesome/font-awesome.min.css">
	</head>

	<body>
		<?php include_once("./template/adminnav.php"); ?>

		<div style="margin-top:65px;" class="container">
			<h3>Lista de usuarios <span data-toggle="modal" data-target="#exampleModalLong" class="btn btn-success "><i class="fa fa-plus"></i> Criar nova conta</span></h3>
			<table class="table">
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Data criado</th>
						<th>Ativar / Desativar</th>
					</tr>
				</thead>
			<?php
				include_once("../database/db.php");

				// Query the database
				$sql = $conn->prepare("SELECT username, date_registered, is_active, id FROM user_table");
				$sql->execute();
				$row = $sql->fetchAll();

				// Displays all users in the table
				foreach($row as $r) {
					echo "<tr>";
					echo "<td> {$r['username']} </td>";
					echo "<td> {$r['date_registered']} </td>";
					$temp = $r['is_active'] ? "<a href='./createuser?uid={$r['id']}&is_active=0'>Deativar</a>" : "<a href='./createuser?uid={$r['id']}&is_active=1'>Ativar</a>";
					echo "<td> {$temp} </td>";
					echo "</tr>";
				}

				// When user clicks Activate/Deactivate link
				if (isset($_REQUEST['is_active'])) {
					$sql = $conn->prepare("UPDATE user_table SET is_active = :active WHERE id = :id");
					$sql->execute(array(
						':active' => htmlspecialchars($_REQUEST['is_active']),
						':id' => htmlspecialchars($_REQUEST['uid'])
					));

					header("Location: ./createuser");
					unset($_REQUEST['is_active']);
				}
			?>
			</table>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Criar Nova Conta</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
		      
					<form method="POST" action="./createuser.php">
						<div class="modal-body">
								<div class="form-group row justify-content-center">
									<label for="username" class="col-md-2 col-form-label">Usuario: </label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="username" placeholder="username">
									</div>
								</div>

								<div class="form-group row justify-content-center">
									<label for="password" class="col-md-2 col-form-label">Senha: </label>
									<div class="col-md-7">
										<input type="password" class="form-control" name="password" placeholder="senha">
									</div>
								</div>

								<div class="form-group row justify-content-center">
									<label for="username" class="col-md-2 col-form-label">Senha: </label>
									<div class="col-md-7">
										<input type="password" class="form-control" name="password_confirmation" placeholder="Digite a mesma senha anterior.">
									</div>
								</div>
						</div>
			      
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button name="confirm_account" type="submit" class="btn btn-primary">Criar usuario</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>