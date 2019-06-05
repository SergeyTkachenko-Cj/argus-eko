(function() {
	window.onload = function() {

		(function() {	// site loader screen animation
			document.querySelector('#loader').style.display = 'none';
			document.querySelector('#logo').style.animation = 'slide 1s forwards';
		})();

		(function() {	// search input autofill off
			var inpt = document.querySelectorAll('#search-searchword, #mod-search-searchword93, input[data-type="regular"], input[type="email"], input[data-type="number"]');
			inpt.forEach(function(i) { i.onfocus = i.setAttribute('autocomplete', 'off'); });
		})();
	}
})();

(function() {	// lightbox pop-up on-resize img screen fitting
		window.addEventListener('resize', reload_img);

		function reload_img() {	
			let lb = document.querySelector('#lightbox');
			let img = document.querySelector('.lb-image');

			    if (lb.style.display === 'block') {

			    	let path = img.getAttribute('src');
			    	let bambi = document.querySelector("[href='"+path+"'][data-lightbox='jh-image-popup']");

			    	bambi.click();
				}
		};
	})();