const ty = document.getElementById('ty'); 
const menu = document.querySelector('.menu'); 

ty.addEventListener('click', function () { 
	const hamIcon = this.querySelector('.ty-icon'); 
	const crossIcon = this.querySelector('.cross-icon'); 
	if (tyIcon.style.display === "none") { 
		tyIcon.style.display = "inline-block"
		menu.style.display = "none"
		crossIcon.style.display = "none"
	} 
	else { 
		crossIcon.style.display = "inline-block"
		hamIcon.style.display = "none"
		menu.style.display = "block"
	} 
});