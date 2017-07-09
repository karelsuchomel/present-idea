// handle radial-progress bars

var transform_styles = ['-webkit-transform', '-ms-transform', 'transform'];
function setRadialProgress ( circleEl, percentage ) {

	console.log(circleEl);

	var rotation = Math.floor( percentage * 1.8 );
	var fill_rotation = rotation;
	var fix_rotation = rotation * 2;

	//for(i in transform_styles) {
		console.log(circleEl.firstElementChild);
		let maskElement = circleEl.firstElementChild;
		maskElement.style.transform = 'rotate(' + fill_rotation + 'deg)';
		let fillElement = maskElement.firstElementChild;
		fillElement.style.transform = 'rotate(' + fill_rotation + 'deg)';
		let secMaskElement = circleEl.lastElementChild;
		let secFillNodes = secMaskElement.children;
		secFillNodes[0].style.transform = 'rotate(' + fill_rotation + 'deg)';
		secFillNodes[1].style.transform = 'rotate(' + fix_rotation + 'deg)';


		// $('.circle .fill, .circle .mask.full').css(transform_styles[i], 'rotate(' + fill_rotation + 'deg)');
		// $('.circle .fill.fix').css(transform_styles[i], 'rotate(' + fix_rotation + 'deg)');
	//}
}

let circleElement = document.getElementById('rad-item-1').firstElementChild;

setTimeout( setRadialProgress( circleElement, 100 ), 200);