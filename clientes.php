<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Nosso Clientes</title>
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

		<div class="container margin-65px-top">

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
			<div class="fixed-bottom footer-container text-center">
				&copy; Copyright 2017 - Promill Usinagem e Ferramentaria Ltda-Me. Todos os direitos reservados.
			</div>
		</footer>
	</body>
</html>