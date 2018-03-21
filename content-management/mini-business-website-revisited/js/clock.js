// This script is to define the greetings of the website.

var dayOfWeek = (new Date).getDay();
var hours = ["Today open: 9 AM - 4 PM",    // Sunday
             "Today open: 9 AM to 5 PM",    // Monday
             "Today open: 9 AM to 7 PM",    // Tuesday
             "Sorry, today we are closed!",    // Wednesday
             "Today open: 9 AM to 6 PM",    // Thursday
             "Today open: 9 AM to 7 PM",    // Friday
             "Today open: 9 AM to 6 PM"];  // Saturday
var todaysHours = hours[dayOfWeek];
document.getElementById("greeting").innerHTML = todaysHours;







