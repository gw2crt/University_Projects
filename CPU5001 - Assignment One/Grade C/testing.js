window.onload = startUp;

function startUp(){
    randomNumber();
    generateNumber();
}

var names = ["", "Kellys Eye", "One Little Duck", "Cup Of Tea", "Knock at the door", "Man Alive", "Toms tricks", "Lucky ", "Garden Gate", "Doctors Orders", "Theresas den", "Legs Eleven", "One Dozen", "Unlucky For Some", "Valentines day", "Young and Keen", "Sweet sixteen", "Dancing Queen", "Coming of Age", "Goodbye Teens", "One Score", "Key of the Door", "Two Little Ducks", "Thee and me", "Two Dozen", "Duck and Dive", "Pick and Mix", "Gateway to Heaven", "Over Weight", "Rise and Shine", "Dirty Gertie", "Get up and run", "Buckle my Shoe", "Dirty Knee", "Ask for More", "Jump and Jive", "Three Dozen", "More than Eleven", "Christmas Cake", "Steps", "Naughty Forty", "Time for Fun", "Whinnie the Pooh", "Down on your knees ", "Droopy Drawers ", "Halfway There", "Up to Tricks ", "Four and Seven", "Four Dozen ", "P.C", "Half a Century", "Tweak of the Thumb", "Danny Le Rue", "Stuck in a Tree", "Clean the Floor", "Snakes alive", "Was she Worth it", "Heinz Varieties", "Make them Wait", "Brighton Line", "Five Dozen", "Bakers Bun ", "Turn on the Screw", "Tickle Me", "Red Raw", "Old Age Pension", "Clickety Click", "Made in Heaven", "Saving Grace", "Either Way Up", "Three Score Ten", "Bang on the Drum", "Six Dozen", "Queen Bee", "Candy Store", "Strive and Strive", "Trombones", "Sunset Strip", "Heavens Gate", "One more time", "Eight and Blank", "Stop and Run", "Straight on Through", "Time for Tea", "Seven Dozen", "Staying Alive", "Between the Sticks", "Torquay in Devon", "Two Fat Ladies", "Nearly There", "Top of the Shop"];


function generateNumber(){

    var myCanvas  = document.getElementById("largeBall");
    var ctx = myCanvas.getContext("2d");

    var circleX = largeBall.width /2;
    var circleY = largeBall.height /2;
    var circleR = 140;
    var colour = ['red'];
    
    randomNumber();
    drawLargeBall(ctx, circleX, circleY, circleR, colour);

}

function drawLargeBall(ctx,x,y,r,colour) {
    ctx.beginPath();
    ctx.arc(x,y,r,0,2*Math.PI);
    ctx.fillStyle = colour;
    ctx.fill();
    ctx.lineWidth = 2;
    ctx.strokeStyle = 'black';
    ctx.stroke();
    ctx.font = '90pt Helvetica';
    ctx.fillStyle = 'black';
    ctx.textAlign = "center";
    ctx.fillText(ranNum, x, y +30);

    document.getElementById("name").innerHTML = names[ranNum];
    
    document.getElementById("numbersCalled").innerHTML = randomNum.toString();
    
    

}

function restart(ctx){
    var myCanvas = document.getElementById("largeBall");
    var ctx = myCanvas.getContext("2d");
    ctx.clearRect(0, 0, largeBall.width, largeBall.height);
}

function listOfNumbers(){    


}
function randomNumber(){

    randomNum = [];
    ranNum = 0;
    
        if (_.contains(randomNum, ranNum, [0])){
            
            ranNum = (Math.floor(Math.random() * 90 +1));
                    
            }else { 
            randomNum.push(ranNum);            
        }
}