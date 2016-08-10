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
var monthDefault;
function dateCheck() {
	//get the month label elements
	var monthLabels = document.getElementsByClassName("monthLabel");
	//get the month header rect
	var monthHeader = document.getElementById("monthHeader")
	var monthHeaderRect = monthHeader.getBoundingClientRect();
	var dateReset = false;
	//for all month labels
	for (i = 0; i < monthLabels.length; i++) {
		//if the label.top is less than the header.bottom, set the header date
		if (monthLabels[i].getBoundingClientRect().top < monthHeaderRect.bottom) {
			monthHeader.innerHTML = monthLabels[i].innerHTML;
			dateReset = true;
		}
	}
	if (dateReset === false) {
		monthHeader.innerHTML = monthDefault;
	}
					 
}

function loadEvents () {
	//use the first element in the list to get the first month
	var firstMonth = getMonthName(eventList[0]);
	monthDefault = firstMonth;
	//set the date header
	document.getElementById("monthHeader").innerHTML = firstMonth;
	//we will compare the months with the MM value
	var currentMonth = eventList[0].time.charAt(6) + eventList[0].time.charAt(7);
	//get the document
	var contentDiv = document.getElementById("contentSection");

	//for each object in eventList
	for (i = 0; i < eventList.length; i++) {
		
		//get the current element month MM
		var thisMonth = eventList[i].time.charAt(6) + eventList[i].time.charAt(7);
		//if the current element month is different from the current month,
		//	create a month element for that month
		if (currentMonth !== thisMonth) {
			currentMonth = thisMonth;
			var monthDiv = document.createElement("div");
			var monthDivText = document.createTextNode(getMonthName(eventList[i]));
			monthDiv.className = "monthLabel";
			monthDiv.appendChild(monthDivText);
			contentDiv.appendChild(monthDiv);
		}
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
		
		contentDiv.appendChild(topDiv); 
	}
	
}

function getMonthName(eventObject) {
	//get the time from the first event
	var month = eventObject.time;
	//get the month number and match it to the array index
	month = Number(month.charAt(6) + month.charAt(7)) - 1;
	var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "June",
  "July", "Aug", "Sept", "Oct", "Nov", "Dec"];
	//assign month the string name value
	return monthNames[month];
}
