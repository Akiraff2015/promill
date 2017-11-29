<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Produtos que realizamos</title>
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

		<div id="modal-image">
			<div style="margin-top:40px;" class="text-center">
			</div>
		</div>
		<!-- Beginning of Nav -->
		<?php include_once("./template/navbar.php"); ?>

		<!-- Modal image viewing the image original scale. -->

		<div style="margin-top: 65px;" class="container">
			<h1>Projetos Realisados</h1>

			<div style="margin-top: 30px" class="container">
				<div class="row">
					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 01</p>
						<img src="./public/img/projects/Molde%20Cory%20-%20Pote.jpg" class="shadow-drop img-fluid transparent-img" data-image="Molde%20Cory%20-%20Pote.jpg" data-description="Projeto 01">
					</div>
					
					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 02</p>
						<img class="shadow-drop img-fluid transparent-img" src="./public/img/projects/Conjunto%20Cory%20-%20Boca%20e%20Pote.jpg" data-image="Conjunto%20Cory%20-%20Boca%20e%20Pote.jpg" data-description="Projeto 02">
					</div>
					
					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 03</p>
						<img src="./public/img/projects/Usinagem%20Molde%20Gabinete.jpg" class="shadow-drop img-fluid transparent-img" data-image="Usinagem%20Molde%20Gabinete.jpg" data-description="Projeto 03">
					</div>
				</div>

				<div style="margin-top:30px;" class="row">
					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 04</p>
						<img class="shadow-drop img-fluid transparent-img" src="./public/img/projects/IMG_1918.JPG" data-image="IMG_1918.JPG" data-description="Projeto 04">
					</div>

					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 05</p>
						<img src="./public/img/projects/IMG_1936.JPG" class="shadow-drop img-fluid transparent-img" data-image="IMG_1936.JPG" data-description="Projeto 05">
					</div>

					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 06</p>
						<img src="./public/img/projects/Conjunto%20de%20Moldes%20Albaricci.jpg" class="shadow-drop img-fluid transparent-img" data-image="Conjunto%20de%20Moldes%20Albaricci.jpg" data-description="Projeto 06">
					</div>
					
<!-- 					<div class="col col-md-4">
						<img src="./public/img/projects/Molde%20Capa%20De%20Seguranca%20Morlan.jpg" class="img-fluid">
					</div> -->
				</div>

				<div style="margin-top:30px;" class="row">
<!-- 					<div class="col col-md-4">
						<img src="./public/img/projects/Molde%20Cory%20-%20Boca.jpg" class="img-fluid">
					</div> -->


<!-- 					<div class="col col-md-4">
						<img src="./public/img/projects/Molde%20Long%20Drink%204%20Cavidades.jpg" alt="" class="img-fluid">
					</div> -->

					<div class="col col-md-4">
						<p class="font-weight-bold">Projeto 07</p>
						<img class="shadow-drop img-fluid transparent-img" src="./public/img/projects/Conj%20Moldes%20Marchesan.jpg" data-image="Conj%20Moldes%20Marchesan.jpg" data-description="Projeto 07">
					</div>

					<div class="col col-md-4">
						<p class="font-weight-bold">Project 08</p>
						<img class="shadow-drop img-fluid transparent-img" src="./public/img/projects/Molde%20CNH.jpg" data-image="Molde%20CNH.jpg" data-description="Projeto 08">
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