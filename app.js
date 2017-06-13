const form  =  document.getElementById('items-list');
const inputs = form.querySelectorAll('input');
const afaire = form.querySelector('.block-afaire');
const archive = form.querySelector('.block-archive');

inputs.forEach(function(input, index, arr) {

	input.addEventListener('change', function(e) {
		let inputBlock = this.parentNode;
		let index = this.getAttribute('name');
		if(this.checked) {
			inputBlock.classList.add('done');
			archive.appendChild(inputBlock);
			
			//register 
			const req = new XMLHttpRequest();
			req.open('POST', 'index.php');
			req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
			req.send('action=enregistrer&'+index+'=0');
			


		} else {
			inputBlock.classList.remove('done');
			afaire.appendChild(inputBlock);

			//register 
			const req = new XMLHttpRequest();
			req.open('POST', 'index.php');
			req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
			req.send('action=enregistrer&'+index+'=1');
		}
	});
});

