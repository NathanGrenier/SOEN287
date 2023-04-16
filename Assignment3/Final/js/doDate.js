function doDate() {
    let date = "";
    let time = "";

    let days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    let months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    let now = new Date();

    date = "Today is: " + days[now.getDay()] + ", " + now.getDate() + " " + months[now.getMonth()] + ", " + now.getFullYear();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    
    if (now.getHours() < 10) {hours = "0" + hours};
    if (now.getMinutes() < 10) {minutes = "0" + minutes};
    if (now.getSeconds() < 10) {seconds = "0" + seconds};
    
    time = "Time: " + hours + ":" + minutes + ":" + seconds;


    document.getElementById("currentDate").innerHTML = date;
    document.getElementById("currentTime").innerHTML = time;
}

// Generate date when page is loaded
window.onload = function() {
    doDate();
}

// Interval is in milliseconds
setInterval(doDate, 1000);