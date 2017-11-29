<?php
	session_start();
	include_once("./process/validate.php");

	// Generate a session token for form submission
	function gen_numb() {
		$a = "";
		for ($i = 0; $i < 4; $i++) {
			$a = mt_rand(0,9) . $a;
		}
		$_SESSION["no-robot"] = $a;
		return $a;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="./public/lib/jquery/jquery-3.2.1.slim.min.js"></script>
		<script src="./public/lib/popper/popper.min.js"></script>
		<script src="./public/lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./public/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./public/lib/fontawesome/font-awesome.min.css">
		
		<script src="./public/js/script.js"></script>
		<link rel="stylesheet" href="./public/css/style.css">
	</head>

	<body>
		<!-- Beggining of Nav -->
		<?php include_once("./template/navbar.php"); ?>

		<div style="margin-top: 65px;" class="container">
			<form class="contact-form" action="./process/message.php" method="POST">
				<div class="form-group row justify-content-start">
					<h2 class="col-md-4 col-form-label margin-left-form-label">Fale Conosco</h2>
				</div>

				<div class="form-group row justify-content-center">
					<label class="col-md-2 col-form-label" for="companyName">Nome da empresa: </label>
					<div class="col-md-7">
						<input class="form-control" name="company_name" type="text" placeholder="Nome da empresa">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label class="col-md-2 col-form-label" for="personName">Nome: </label>
					<div class="col-md-7">
						<input type="text" class="form-control" name="contact_name" placeholder="Nome">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="email" class="col-md-2 col-form-label">E-mail: </label>
					<div class="col-md-7">
						<input type="email" class="form-control" name="email" placeholder="E-mail">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="cep" class="col-md-2 col-form-label">CEP: </label>
					<div class="col-md-7">
						<input type="text" class="form-control" name="cep" placeholder="CEP">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="telephone" class="col-md-2 col-form-label">Telefone: </label>
					<div class="col-md-7">
						<input type="text" class="form-control" name="telephone" placeholder="(11) 2222 3333">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="address" class="col-md-2 col-form-label">Endereço: </label>
					<div class="col-md-7">
						<input type="text" class="form-control" name="address" placeholder="Endereço">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="subject" class="col-md-2 col-form-label">Assunto: </label>
					<div class="col-md-7">
						<input type="text" class="form-control" name="subject" placeholder="Assunto">
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="message" class="col-md-2 col-form-label">Mensagem: </label>
					<div class="col-md-7">
						<textarea class="form-control" name="message" placeholder="Sua Mensagem aqui"></textarea>
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="no-robot" class="col-md-2 col-form-label">Digite o número: <?php echo "<span style='font-weight: 700;'>" . gen_numb() . "</span> no formulário."; ?></label>
					<div class="col-md-7">
						<input type="text" name="no-robot" class="form-control">
					</div>
				</div>

				<input type="hidden" name="_token" value="<?php echo generate_token(); ?>">

				<div class="div form-group row justify-content-center">
					<div class="col-md-3">
						<button class="form-control btn btn-primary" name="submit_message" type="submit">
							<i class="fa fa-paper-plane"></i> Enviar
						</button>
					</div>

					<?php
						if (isset($_SESSION["fail-message"])) {
							echo "Invalid form submission";
						}
					?>
				</div>

			</form>
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