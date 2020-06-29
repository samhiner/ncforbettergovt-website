//this script executes after everything else in the html body (its at the bottom of the doc, not a .then() type situation)

//make textareas grow as you type
const tx = document.getElementsByClassName('autoExpand');
for (let i = 0; i < tx.length; i++) {
	tx[i].style.height = (tx[i].scrollHeight) + 'px';
	tx[i].style.overflowY = 'hidden';
	tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight) + 'px';
}