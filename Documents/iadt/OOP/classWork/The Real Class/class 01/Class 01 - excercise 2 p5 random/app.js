// This is where it all begins

// This returns a float between 0 and 1
// We are using JS  Math FUNCTIONS
let randomNumber = Math.random();

//console.log(randomNumber)

// Between 0 & 100
let randomNumber2 = Math.random() * 100;
//console.log(randomNumber2)

// between 30 & 80
let randomNumber3 = Math.random() * 50 +30;
//console.log(randomNumber3)

let randomNumber4;

let randomLocX;
let randomlocy;



function setup() {
    createCanvas(500,500);
    background(255,0,0)

    let randomNumber4 = random(30, 80)
    console.log(randomNumber4)

     randomLocX = random(0, 500);
     randomlocy = random(0, 500);

}

function draw() {
    fill(0,0,255);
    stroke(0,255,0);
    strokeWeight(3);

    rect(randomLocX, randomLocy, 100, 100);
}