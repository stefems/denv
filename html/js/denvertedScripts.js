function animateFilter() {
	//get the filter <i> and reset the class
	document.getElementById("filterIcon").className = "fa fa-sliders fa-5x fa-flip-horizontal";
}
function unanimateFilter() {
	//get the filter <i> and reset the class
	document.getElementById("filterIcon").className = "fa fa-sliders fa-5x";
}
function animateHome() {
	//get the filter <i> and reset the class
	document.getElementById("homeIcon").className = "fa fa-arrow-down fa-5x fa-rotate-180";
}
function unanimateHome() {
	//get the filter <i> and reset the class
	document.getElementById("homeIcon").className = "fa fa-arrow-down fa-5x";
}

document.body.onload = loadEvents;

function loadEvents () { 

	//for each object in eventList
	for (i = 0; i < eventList.length; i++) {
		// create a new div element 
		// and give it some content 
		var newDiv = document.createElement("div"); 
		var newContent = document.createTextNode(eventList[i].title); 
		newDiv.appendChild(newContent); //add the text node to the newly created div. 

		// add the newly created element and its content into the DOM 
		var contentDiv = document.getElementById("contentSection"); 
		contentDiv.appendChild(newDiv); 
	}
	
}