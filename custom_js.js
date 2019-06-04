window.onload = function() {

	(function resize_popup() {	// lightbox pop-up on-resize img screen fitting
		window.addEventListener('resize', bambi);

		function bambi() {		 
			let lb = document.querySelector('#lightbox');
			let img = document.querySelector('.lb-image');

			    if (lb.style.display === 'block') {

			    	let path = img.getAttribute('src');
			    	let bambi = document.querySelector("[href='"+path+"'][data-lightbox='jh-image-popup']");

			    	bambi.click();
				}
		};
	})();

	(function site_loader() {	// site loader screen animation
		document.querySelector('#loader').style.display = 'none';
		document.querySelector('#logo').style.animation = 'slide 1s forwards';
	})();

	(function autofill_off() {	// search input autofill off
		var inpt = document.querySelectorAll('#search-searchword, #mod-search-searchword93');
		inpt.forEach(function(i) { i.onfocus = i.setAttribute('autocomplete', 'off'); });
	})();
}