const items = document.querySelectorAll('#items-list label');


let dragElement = null;

items.forEach(function(el) {
	addDragEffect(el);
});

function addDragEffect(el) {
	el.addEventListener('dragstart', dragStartHandler);
	el.addEventListener('dragover', dragOverHandler);
	el.addEventListener('drop', dropHandler);
}

function dragStartHandler(e) {
	console.log('dragstart');
	//console.log(this);
	dragElement = this;
	e.dataTransfer.effectAllowed = 'move';
	e.dataTransfer.setData('text/html', this.outerHTML); // save the element in memory
}

function dragOverHandler(e) {
	this.style.background ='red';
	e.preventDefault(); // if i don't do this drop event don't fire ??
}

function dropHandler(e) {

	if(this === dragElement)
		return;

	let direction;

	// set direction 
	if(getIndex(dragElement) < getIndex(this)) {
		console.log('afterend');
		direction = 1;
	} else {
		console.log('beforebegin');
		direction = -1;
	}

	dragElement.parentNode.removeChild(dragElement);
	const data = e.dataTransfer.getData('text/html');
	let place = (direction === 1)? 'afterend' : 'beforebegin';
	this.insertAdjacentHTML(place, data);

	let sibling = (direction === 1)? this.nextElementSibling : this.previousElementSibling;
	addDragEffect(sibling);
	
	//e.preventDefault();
}

function getIndex (el) {
	const children = Array.from(el.parentNode.childNodes);
	return children.indexOf(el);
}