<?php
	session_start();
	include_once("../database/db.php");


	if (isset($_POST["submit"])) {
		$statement = $conn->prepare("SELECT username, password, is_active FROM user_table WHERE username = :user");
		$statement->execute(array(':user' => $_POST['username']));

		// fetches row from the database (ONLY 1 must return in order to be true.)
		$row = $statement->fetch();
		$check_password = password_verify($_POST["password"], $row["password"]);

		if ($check_password == 1 && $row["username"] == $_POST["username"] && $row["is_active"] == 1) {
			header("Location: ./mail");
			$_SESSION["is_login"] = TRUE;
			$_SESSION["is_user"] = $row["username"];

			if (isset($_SESSION["not_login"])) {
				unset($_SESSION["not_login"]);
			}
		}

		else {
			$_SESSION["not_login"] = "Invalid Password / Inactive User";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="../public/lib/jquery/jquery-3.2.1.slim.min.js"></script>
		<script src="../public/lib/popper/popper.min.js"></script>
		<script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../public/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/lib/fontawesome/font-awesome.min.css">
		
		<script src="../public/js/script.js"></script>
		<link rel="stylesheet" href="../public/css/style.css">
	</head>

	<body>
		<!-- Beggining of Nav -->
		<nav style="background-color: #a0ceff!important;" class="navbar navbar-expand-sm navbar-light bg-primary">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
  
			<a class="navbar-brand" href="../">Promill</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../">Home</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="../empresa">Empresa</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="../produtos">Produtos</a>
					</li>

					<li class="nav-item">
						<a href="../clientes" class="nav-link">Clientes</a>
					</li>

					<li class="nav-item active">
						<a href="../contato" class="nav-link">Contato</a>
					</li>
				</ul>

				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a class="navbar-text"><i class="fa fa-phone"></i> (16) 3043-8060</a>
					</li>

					<form class="form-inline my-2 my-lg-0" id="map-align-left">
      					<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
  							<i class="fa fa-map-marker"></i> Mapa
						</div>
    				</form>
				</ul>
			</div>
		</nav>
		<!-- end of nav-->

		<div class="container">
			<form class="contact-form" method="POST" action="./login.php">
				<div class="form-group row justify-content-start">
					<h2 class="col-md-4 col-form-label margin-left-form-label">Login</h2>
				</div>

				<div class="form-group row justify-content-center">
					<label class="col-md-2 col-form-label" for="username">Username: </label>
					<div class="col-md-7">
						<input class="form-control" type="text" name="username" placeholder="username">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="password" class="col-md-2 col-form-label">Password: </label>
					<div class="col-md-7">
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
				</div>

				<div class="div form-group row justify-content-center">
					<div class="col-md-3">
						<button class="form-control btn btn-primary" type="submit" name="submit">
							<i class="fa fa-paper-plane"></i> Login
						</button>
					</div>
				</div>
			</form>

			<?php 
				if (isset($_SESSION["not_login"])) {
					echo $_SESSION["not_login"];
				} 
			?>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Mapa</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<div id="map"></div>
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAIQ9-apQ6m9CjK2ie_wIQSS3vFJD4Kaw&callback=initMap"></script>
					</div>

					<div class="modal-footer">
						<p><b>Endereço:</b> Rua Angelo Miessa, 313 - Parque Industrial Tanquinho - Ribeirão Preto - SP - CEP 14075-710</p>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="footer-container text-center">
				&copy; Copyright 2017 - Promill Usinagem e Ferramentaria Ltda-Me. Todos os direitos reservados.
			</div>
		</footer>
	</body>
</html>