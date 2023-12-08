function createTime() {

    // Set the variable

    var time = new Date();
    var hour = time.getHours();
    var minute = time.getMinutes();
    var second = time.getSeconds();

    // Include the created variables to the updateTime() function

    hour = updateTime(hour);
    minute = updateTime(minute);
    second = updateTime(second)

    // Display the clock and set the timeout

    document.getElementById("clock").innerText = hour + ":" + minute + ":" + second;
    var timeout = setTimeout(function() {
        createTime()
    }, 1000); 
}

function updateTime(timeSet) {
    if (timeSet < 10) {
        return "0" + timeSet;
    } else {
        return timeSet;
    }
}

createTime();