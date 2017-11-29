$(function() {
	var imgSlider = {
		image: document.getElementById("img-slider"),
		interval: 2000,
		img: [
			'./public/img/slider/slide1.jpg',
			'./public/img/slider/slide2.jpg',
			'./public/img/slider/slide3.jpg'
		],
		index: 0
	}

	function imageSlider() {
		imgSlider.image.src = imgSlider.img[imgSlider.index++ % imgSlider.img.length];
	}

	setTimeout(function() {
		imageSlider();
		setTimeout(arguments.callee, imgSlider.interval);
	}, imgSlider.interval);
});