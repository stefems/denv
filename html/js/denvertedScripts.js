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

/* DONT FORGET THAT THE MONTH CREATION NEEDS TO FIT SOMEHOW! */

function loadEvents () { 
	//for each object in eventList
	for (i = 0; i < eventList.length; i++) {
		//Creating the elements
		var dateMonth = eventList[i].time;
		var dateMonth = dateMonth.charAt(6) + dateMonth.charAt(7);
		var topDiv = document.createElement("div");
		var genreDiv = document.createElement("div");
		var titleDiv = document.createElement("div");
		var dateDiv = document.createElement("div");
		var titleText = document.createTextNode(eventList[i].title);
		var dateText = document.createTextNode(dateMonth);
		
		var genreImg = document.createElement("img");
		genreImg.src = "images/genreIcons/placeholderforgenreimage.png";
		//shrink the image size down, yo
		genreImg.style.height = '2em';
		genreImg.style.width = '2em';
		//Giving the elements their classes
		topDiv.className = "eventTopDiv";
		
		//Placing the inner elements into the divs
		dateDiv.appendChild(dateText);
		titleDiv.appendChild(titleText);
		genreDiv.appendChild(genreImg);
		//placing the divs into the top div
		topDiv.appendChild(genreDiv);
		topDiv.appendChild(titleDiv);
		topDiv.appendChild(dateDiv);
		

		// add the newly created element and its content into the DOM 
		var contentDiv = document.getElementById("contentSection"); 
		contentDiv.appendChild(topDiv); 
	}
	
}