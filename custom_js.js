(function() {
	window.onload = function() {

		// (function() {	// site loader screen animation
		// 	document.querySelector('#loader').style.display = 'none';
		// 	document.querySelector('#logo').style.animation = 'slide 1s forwards';
		// })();

		(function() {	// search input autofill off
			var inpt = document.querySelectorAll('#search-searchword, #mod-search-searchword93, input[data-type="regular"], input[type="email"], input[data-type="number"]');
			inpt.forEach(function(i) { i.onfocus = i.setAttribute('autocomplete', 'off'); });
		})();

		(function() {	// mouse tooltip on table hover when table scrolable
			var tble = document.querySelectorAll('.scroll_table');
			var toolTip = document.querySelector('#toolTipCursor');
			var x;
			var y;

				window.onmousemove = function(e) {
		    			x = e.clientX;
		        		y = e.clientY;
		        		toolTip.style.top = (y + 20) + 'px';
		    			toolTip.style.left = (x + 20) + 'px';
					};

				tble.forEach(function(i) {
					i.onmouseover = function() {
						var scrollWidth = i.getAttribute('data-scroll-width');
							if (window.innerWidth <= scrollWidth) {
			    				toolTip.style.display = 'block';
			    			}
					};

					i.onmouseout = function() {
		    			toolTip.style.display = 'none';
					};
				});

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