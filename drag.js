const items = document.querySelectorAll('label');
console.log(items);

items.forEach(function(el) {

	el.addEventListener('dragstart', function(e) {
		console.log(e);
	}, false);	

	// drop
	el.addEventListener('drop', function(e) {
		console.log(e);
	}, false);

	/*
	element.addEventListener(event, function, useCapture)
	useCapture:
		true => The event handler is executed in the capturing phase
		false => Default. The event handler is executed in the bubbling phase
	*/
})