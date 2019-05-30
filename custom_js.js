window.onload = function() {
	document.querySelector('#loader').style.display = 'none';
	document.querySelector('#logo').style.animation = 'slide 1s forwards';
}

window.addEventListener('resize', bambi);

function bambi() {
	let lb = document.querySelector('#lightbox');
	let nxt = document.querySelector('.lb-next');
	let prv = document.querySelector('.lb-prev');

	let img = document.querySelector('.lb-image');

	    if (lb && lb.style.display === 'block' && img) {

	    	let path = img.getAttribute('src');

	    	// let bath = '[href=' +'"'+ path +'"' +']';

	    	let bambi = document.querySelector("[href='path']");

			// let lnk = document.querySelector("a[href=" +"'"+ path +"'"+ "]");

			// let nwe = document.createElement('a');
			// nwe.href=path;
			// nwe.setAttribute('data-lightbox', 'jh-image-popup');
			// nwe.click();

	    	// nxt.style.display === 'none' ? prv_nxt() : nxt_prv();
	    	// lb.style.setProperty('top', '50%', 'important');
	    	// lb.style.transform = 'translateY(-50%)';

	    	console.log(bambi);
	    	// console.log(nwe.getAttribute('href') +' '+ nwe.getAttribute('data-lightbox'));

	    	// path.click();
	    }

	// function nxt_prv() { 
	// 	nxt.click();
	//     prv.click();
	// }

	// function prv_nxt() { 
	//     prv.click();
	//     nxt.click();
	// }
};