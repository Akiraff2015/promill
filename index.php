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
		<script src="./public/js/slider.js"></script>
		<link rel="stylesheet" href="./public/css/style.css">
	</head>

	<body>
		<!-- Beggining of Nav -->
		<?php include_once("./template/navbar.php"); ?>

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="display-6">Facilisis Dolor</h1>
						<p class="lead">Cras ullamcorper enim sed aliquam porttitor. Donec consectetur sodales augue ut venenatis. Suspendisse rhoncus eu leo non commodo. Vestibulum at facilisis dolor. Phasellus volutpat mauris a lacinia egestas.</p>
					</div>

					<div class="col-md-6 text-center">
						<img class="shadow-drop img-fluid" src="./public/img/piece.png" alt="piece">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 index-card">
					<div class="card" style="width: 20rem;">
						<img style="width: 317px; height: 180px;" class="card-img-top" id="img-slider" src="./public/img/slider/slide3.jpg">
						<div class="card-block">
							<h4 class="card-title">Nosso produtos</h4>
							<p class="card-text">Vestibulum at facilisis dolor. Phasellus volutpat mauris a lacinia egestas.</p>
							<a href="./produtos.php" class="btn btn-primary"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Ver mais produtos</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 index-card">
					<div class="card" style="width: 20rem;">
						<img src="./public/img/team.png" alt="Nossa equipe" style="width: 318px; height: 180px;" class="card-img-top">
					
						<div class="card-block">
							<h4 class="card-title">Nossa Equipe</h4>
							<p class="card-text">Vestibulum at facilisis dolor. Phasellus volutpat mauris a lacinia egestas.</p>
							<a href="./empresa.php" class="btn btn-primary"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Sobre a compahia e cultura</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 index-card">
					<div class="card" style="width: 20rem;">
						<img src="./public/img/form.png" alt="Nossa equipe" style="width: 318px; height: 180px;" class="card-img-top">
					
						<div class="card-block">
							<h4 class="card-title">Fale conosco!</h4>
							<p class="card-text">Vestibulum at facilisis dolor. Phasellus volutpat mauris a lacinia egestas.</p>
							<a href="./contato.php" class="btn btn-primary"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Entre contanto com nós</a>
						</div>
					</div>					
				</div>
			</div>
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