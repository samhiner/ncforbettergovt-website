//this file executes right after the tabs are loaded in the HTML

//this hovers over all tabs at the start
//bc it jumps a bit the first time you hover
var tabs = document.getElementById('menu').children[0].children;
for (var x = 0; x < tabs.length; x++) {
	if (tabs[x].class != 'current_page_item') {
		tabs[x].children[0].style.fontWeight = '600';
		tabs[x].children[0].style.letterSpacing = '0.821px';
	}
}
setTimeout(function() { 
	for (x = 0; x < tabs.length; x++) {
		tabs[x].children[0].style.fontWeight = '';
		tabs[x].children[0].style.letterSpacing = '';
	}
}, 10);

//there is no confirmation on the server side or backup, but this isn't client facing and I don't have an alternative that could be triggered by a failed attempt
//could make sense to add later tho
function reportError(errorMsg) {
	console.error(errorMsg)
	$.ajax({
		url: 'https://script.google.com/macros/s/AKfycbxyYKoysnRWeSTF7ynbncJo0kANgnatXU_ERG65-ypQv6cJHj4/exec?error=' + errorMsg,
		dataType: 'jsonp'
	});
}

