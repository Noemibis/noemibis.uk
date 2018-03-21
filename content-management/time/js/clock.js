// This script is to define the greetings of the website.
var dateTime = new Date();
var hours = dateTime.getHours();
var greeting;
var colour;
if (hours <= 5) {
	greeting = "You should be in bed!";
	colour = "#56adff";
}else if (hours <= 11) {
	greeting = "Good morning!";
	colour = "#5ee4ec";
}else if (hours == 12) {
	greeting = "Almost lunch time!";
	colour = "#6cf1b7";
}else if (hours == 13) {
	greeting = "It's lunch time!";
	colour = "#5fd067";
}else if (hours <= 16) {
	greeting = "Good afternoon!";
	colour = "#bfd859";
}else if (hours <= 22) {
	greeting = "Good evening!";
	colour = "#ecd34b";
}else{
	greeting = "Time to get ready for bed!";
	colour = "#fba035";
}
var body = document.querySelector("body");
body.style.backgroundColor = colour;
var el = document.getElementById('greeting');
el.innerHTML = greeting;



// This script has to be run every second, so it is wrapped in a function.
function clock() {
// Create a new Date object and get hours, minutes and seconds.
var d = new Date();
var curHour = d.getHours();
var curMin = d.getMinutes();
var curSec = d.getSeconds();

// An enhancement that converts 24 hour format to 12 and adds am/pm.
// Set am or pm
var ap = "";
if (curHour < 12){
  ap = "AM";
}else{
  ap = "PM";
}
// Midnight in JavaScript is 0, so change this to 12
if (curHour == 0){
  curHour = 12;
}
// Convert from 24 hour format to 12
if (curHour > 12){
  curHour = curHour - 12;
}

// A function is used to add a leading zero to single digit minutes and seconds.
function addZero(tDigit) {
	if (tDigit < 10){    		// if the number is less than 10
	  tDigit = "0" + tDigit;    // add a string zero (converts number to string)
	}
	return tDigit;              // pass the value of tDigit back to the statement
}

// Build the time string and add it to the ID time element.
timeString = curHour + ":" + addZero(curMin) + ":" + addZero(curSec) + " " + ap;
document.getElementById("time").innerHTML = timeString;
}

// Repeat the clock function every second (1000 milliseconds).
setInterval(clock, 1000);




// Create a new Date object and assign it to a variable.
var d = new Date();

// ========== Get the name of the day of the week.
// Build array of day names.
var weekdays;
weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
var curDay = weekdays[d.getDay()];

// Add the day name to the today element.
document.getElementById("today").innerHTML = curDay;




// ========= Build a date string.
// Get the full year and date.
var curYear = d.getFullYear();
var curDate = d.getDate();
// Build an array of month names.
var months;
months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
// Get the current month name
var curMonth = months[d.getMonth()];

// Build the date string and add it to the date element.
var dateString = curDate + "/" + curMonth + "/" + curYear;
document.getElementById("date").innerHTML = dateString;





