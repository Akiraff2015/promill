<nav style="background-color: #a0ceff!important;" class="navbar fixed-top navbar-expand-sm navbar-light bg-primary">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<a class="navbar-brand" href="#">Admin Promill</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="./mail">Mail <span class="badge badge-pill badge-danger"><?php echo $_SESSION["unread"];?></span></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="./createuser">Criar Usuario</a>
			</li>
		</ul>

		<ul class="nav navbar-nav ml-auto">
			<li style="margin-right: 15px;" class="nav-item">
				<a class="navbar-text"><i class="fa fa-user"></i> <?php echo ucwords($_SESSION['is_user']); ?></a>
			</li>

			<form class="form-inline my-2 my-lg-0" id="map-align-left">
					<div class="btn btn-danger clear-button-style">
						<a style="color: white; text-decoration: none;" href="./logout"> <i class="fa fa-sign-out"></i> Sair</a>
				</div>
			</form>
		</ul>
	</div>
</nav>