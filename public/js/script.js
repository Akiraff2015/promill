$(function() {
	// Google map modal popup
	$('#myModal').on('shown.bs.modal', function () {
		initMap();
	});

	// Depending which image user clicks, it will display div box modal, and enlarge the image original size.
	$('img.transparent-img').click(function() {
		var imgValue = $(this).data().image;
		var descriptionValue = $(this).data().description;

		$('#modal-image > div').prepend('<h4 style="color: white; margin-top: 15px;" class="text-center">' + descriptionValue + '</h4>');
		$('#modal-image > div').prepend('<img style="width: 45%;" id="modal-image-pop" class="img-fluid" src=./public/img/projects/' + imgValue + '>');

		$('#modal-image').css({'display': 'block'});


	});

	// If the user clicks on the grey area box, it will automatically close the modal.
	$('#modal-image').click(function(){
		$('#modal-image').css({'display': 'none'});
		$('#modal-image-pop').remove();
		$('#modal-image > div > h4').remove();
	});

	// If the user press down the key 'ESC', it will automatically close the modal.
	$(document).on('keydown',  function(e) {
		if (e.keyCode == 27) {
			$('#modal-image').css({'display': 'none'});
			$('#modal-image-pop').remove();
			$('#modal-image > div > h4').remove();
		}
	});
});

function initMap() {
	var coord = {lat: -21.136477, lng: -47.799729};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 18,
		center: coord
	});

	var marker = new google.maps.Marker({
		position: coord,
		map: map
	});
}

