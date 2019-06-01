window.onload = function() {	// site loading screen
	document.querySelector('#loader').style.display = 'none';
	document.querySelector('#logo').style.animation = 'slide 1s forwards';
}

window.addEventListener('resize', bambi);

function bambi() {		// lightbox pop-up on-resize img screen fitting 
	let lb = document.querySelector('#lightbox');
	let img = document.querySelector('.lb-image');

	    if (lb.style.display === 'block') {

	    	let path = img.getAttribute('src');
	    	let bambi = document.querySelector("[href='"+path+"'][data-lightbox='jh-image-popup']");

	    	bambi.click();
	    }
};