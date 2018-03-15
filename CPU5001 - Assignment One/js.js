window.onload = startUp; //Window Onload function

function startUp() { //Functions to load on startup, Creating random number, starting the clock and a fix for the ranNum array to remove the first number.

    startClock();
    randomNumber();
    ranNum = randomNum.pop();
}


var names = ["", "Kellys Eye", "One Little Duck", "Cup Of Tea", "Knock at the door", "Man Alive", "Toms tricks", "Lucky ", "Garden Gate", "Doctors Orders", "Theresas den", "Legs Eleven", "One Dozen", "Unlucky For Some", "Valentines day", "Young and Keen", "Sweet sixteen", "Dancing Queen", "Coming of Age", "Goodbye Teens", "One Score", "Key of the Door", "Two Little Ducks", "Thee and me", "Two Dozen", "Duck and Dive", "Pick and Mix", "Gateway to Heaven", "Over Weight", "Rise and Shine", "Dirty Gertie", "Get up and run", "Buckle my Shoe", "Dirty Knee", "Ask for More", "Jump and Jive", "Three Dozen", "More than Eleven", "Christmas Cake", "Steps", "Naughty Forty", "Time for Fun", "Whinnie the Pooh", "Down on your knees ", "Droopy Drawers ", "Halfway There", "Up to Tricks ", "Four and Seven", "Four Dozen ", "P.C", "Half a Century", "Tweak of the Thumb", "Danny Le Rue", "Stuck in a Tree", "Clean the Floor", "Snakes alive", "Was she Worth it", "Heinz Varieties", "Make them Wait", "Brighton Line", "Five Dozen", "Bakers Bun ", "Turn on the Screw", "Tickle Me", "Red Raw", "Old Age Pension", "Clickety Click", "Made in Heaven", "Saving Grace", "Either Way Up", "Three Score Ten", "Bang on the Drum", "Six Dozen", "Queen Bee", "Candy Store", "Strive and Strive", "Trombones", "Sunset Strip", "Heavens Gate", "One more time", "Eight and Blank", "Stop and Run", "Straight on Through", "Time for Tea", "Seven Dozen", "Staying Alive", "Between the Sticks", "Torquay in Devon", "Two Fat Ladies", "Nearly There", "Top of the Shop"]; //Global array used to store bingo ball names

calledNumbers = []; //global Array and variable used to store the called Numbers, timerId and counter which are used throughout.
var timerID = 0;

var counter = 1;

function generateNumber() { //Function which generates the random Numbers

    if (counter <= 90) { // If statement used to generate 90 numbers

        var myCanvas = document.getElementById("largeBall");
        var ctx = myCanvas.getContext("2d");

        var circleX = largeBall.width / 2; // Local variables used with the canvas to draw the media on screen.
        var circleY = largeBall.height / 2; // The use of largeball.width + height takes the canvas dimensions and divides by two putting the x and y positions into the centre.
        var circleR = 154; // variable storing the radius size of the circle     
        var colour = ['yellow']; //variable array to store the colours used within the large ball. 
        drawMatrix(); //function call to generate the matrix of balls
        drawLargeBall(ctx, circleX, circleY, circleR, colour); //local variables passed to the drawLargeBall function
        calledNumbers.push(ranNum); //array method used to push numbers into an array once they have been called
        ranNum = randomNum.pop(); //array method used to remove numbers from an array. Used with the random number generation
        counter++; // simple counter used to display the number of balls which have been drawn. 

    } else {
        alert("End of Game");
        //message to end the game once the condition is met and 90 balls have been generated.
    }

}


function drawLargeBall(ctx, x, y, r, colour) { //function to draw the large bing ball with random numbers, variables have been passed from the generate number function

    ctx.beginPath;
    ctx.arc(x, y, r, 0, 2 * Math.PI); //variables caught from the generate number function used to draw the circle   
    ctx.fillStyle = colour;
    ctx.fill();
    ctx.lineWidth = 2;
    ctx.strokeStyle = 'black'; //built in methods used to draw and style the bingo ball which is show on the canvas element. 
    ctx.stroke();
    ctx.font = '90pt Helvetica';
    ctx.fillStyle = 'black';
    ctx.textAlign = "center";
    ctx.fillText(ranNum, x, y + 30); //ranNum is the random number generated, called to display within the generated ball. ranNum shown here is a global variable.

    bingoName();

    //document.getElementById("name").innerHTML = names[ranNum];
    //document.getElementById("numbersCalled").innerHTML = randomNum.toString(); //Mainly used for testing to see what numbers are being generated.
    document.getElementById("calledNum").innerHTML = "The Last Ten Called Numbers: " + calledNumbers.slice(-10).toString();
    document.getElementById("displayCalled").innerHTML = "Number of Balls Called: " + counter;

    //testing
    //document.getElementById("testa").innerHTML = randomNum.toString();
    //document.getElementById("testb").innerHTML = calledNumbers.toString();
}

function bingoName() {

    clearBn();

    var myCanvas = document.getElementById("bingoName");
    var ctx = myCanvas.getContext("2d");

    ctx.font = '28pt Helvetica';
    ctx.fillStyle = 'black';
    ctx.textAlign = "center";
    ctx.fillText(names[ranNum], 160, 70);

}

function clearBn() {

    var myCanvas = document.getElementById("bingoName");
    var ctx = myCanvas.getContext("2d");
    ctx.clearRect(0, 0, 350, 100);
}


function restart(ctx) {
    var myCanvas = document.getElementById("largeBall");
    var ctx = myCanvas.getContext("2d"); //Function to clear the canvas area
    ctx.clearRect(0, 0, largeBall.width, largeBall.height);

    var myCanvas = document.getElementById("matrixBall");
    var ctx = myCanvas.getContext("2d"); //Function to clear the canvas area
    ctx.clearRect(0, 0, matrixBall.width, matrixBall.height);

    clearBn();

    calledNumbers.length = 0; //used to restart the games by removing any array objects.
    matrixNumber.length = 0;
    randomNum.length = 0;
    ranNum = 0;
    counter = 1;
    randomNumber();
    ranNum = randomNum.pop();

}

function randomNumber() { //function to generate the random numbers used within the game

    randomNum = []; //array declaration to setup the array which will hold the random number values. 

    ranNum = 0;

    while (randomNum.length < 90) { //while condition to loop to generate 90 unique numbers. 

        ranNum = (Math.floor(Math.random() * 90 + 1)); //variable is passed a built in method which generates a random number, 
        var found = false;

        for (var i = 0; i < randomNum.length; i++) { //for loop checking against the array length this will loop until he condition is met

            if (randomNum[i] == ranNum) { // An if statement to check if the number generated in the array already exists.
                found = true;
                break
            } // a little trick to flip the value of a boolean variable if a reapeat number is generated starting the loop again. 
        }
        if (!found) randomNum[randomNum.length] = ranNum; // a final if statement checking if the number generated is unique, if so it is added to the random number array. 
    }

}

function startClock() {
    timerID = setInterval('displayTime()', 1000); //function call to start the timer using a global variable
}

function displayTime() {

    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds(); //various variables used to store built in methods which retrive the self explained method names. 

    var dateNum = now.getDate();
    var dayNum = now.getDay();
    var mthNum = now.getMonth();
    var year = now.getFullYear();

    var dayName = conversionDay(dayNum); //variables to call and store the day name and the month name to the corrosponding array number.
    var mthName = conversionMonth(mthNum);

    var timeString = hours > 12 ? hours - 12 : hours;
    timeString += minutes < 10 ? ":0" : ":";
    timeString += minutes;
    timeString += seconds < 10 ? ":0" : ":";
    timeString += seconds;
    timeString += hours > 12 ? " pm" : " am"; //Creation of a string displaying the time and date output.

    //document.getElementById("clockDisplay").innerHTML = timeString; //replaced with Jquery Clock for ease of sight. 
    document.getElementById("dateDisplay").innerHTML = dayName + " " + dateNum + " " + mthName + " " + year;

}

function conversionDay(dn) {
    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; // function to generate and hold the array for the time and date returning the day                                                                                                                                                                                                         names as a string.

    return dayNames[dn]; //used to return the string stored within the array to the dayName variable. 
}

function conversionMonth(mn) {
    var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"]; // function to generate and hold the arrays for the time and date returning the day                                                                                                                                                                                                       names as a string.

    return monthNames[mn]; //used to return the string stored within the array to the mthName variable. 
}

function drawMatrix() {

    myCanvas = document.getElementById("matrixBall");
    ctx = myCanvas.getContext("2d");

    circleX = 60; // The x coord of the centre of the first bingo ball
    circleY = 50; // The y coord of the centre of the first bingo ball
    rad = 40; // The radius of the centre of the circle in pixels
    var gapBetweenCircles = 14; // The gap between the bingo Numbers which have been drawn
    var circleOffsetX = 2 * rad + gapBetweenCircles;
    var circleOffsetY = 2 * rad + gapBetweenCircles; // The horizontal offset between circle centres this performs a calculation saving                                                                                                                                                                                                         the result to the var. which gives an equal distance between bingo balls.
    matrixNumber = [];
    matrixCounter = 1;


    for (var j = 1; j <= 9; j++) { // Nested for Loops to created the 10 x 9 bingo ball matrix
        for (var i = 1; i <= 10; i++) { // The second part of the nested for Loop which is run 10 times and then passed to                                                                                                                                                                                               the outer loop to create a new row
            ctx.beginPath();
            ctx.arc(circleX, circleY, rad, 0, 2 * Math.PI); //Built in method to draw the circle this time using global variables                                                                                                                           
            if (ranNum == matrixCounter) { //conditions to meet if the balls have been called which change the ball colour respectivly  
                ctx.beginPath();
                ctx.arc(circleX, circleY, 45, 0, 2 * Math.PI);
                ctx.fillStyle = "yellow";

            } else if (calledNumbers.includes(matrixCounter) == true) { // A built in method .includes which checks if the array contains the number which has been called. this returns a true or false boolean 
                ctx.fillStyle = "green";
            } else if (matrixCounter <= 18) {
                ctx.fillStyle = "#B4D3E8";
            } else if ((matrixCounter > 18) && (matrixCounter <= 36)) {
                ctx.fillStyle = "#F8C1BA";
            } else if ((matrixCounter > 36) && (matrixCounter <= 54)) {
                ctx.fillStyle = "#B3E4C7";
            } else if ((matrixCounter > 54) && (matrixCounter <= 72)) {
                ctx.fillStyle = "#FAEBA6";
            } else if ((matrixCounter > 72) && (matrixCounter <= 90)) {
                ctx.fillStyle = "#F9FBFA";
            }
            ctx.fill();
            ctx.strokeStyle = 'black'; //built in methods to style the bingo balls
            ctx.stroke();
            ctx.font = "28px helvetica";
            ctx.fillStyle = "black";
            ctx.textAlign = "center";
            ctx.fillText(matrixCounter, circleX, circleY + 7); //text displayed on the matrix of bing balls using global variables    
            circleX += circleOffsetX;
            matrixNumber.push(matrixCounter); //this pushes the numbers of the generated balls into the array. 
            matrixCounter++; //incrementation of a counter used with the array to generate the numbered balls 1 - 90
        }
        circleY += circleOffsetY;
        circleX = 60;
    }
}

function autoGame() {
    ranNum = randomNum.pop();
    handle = setInterval("generateNumber()", 1500);

}

function stopAuto() {

    clearInterval(handle);
    restart();
}