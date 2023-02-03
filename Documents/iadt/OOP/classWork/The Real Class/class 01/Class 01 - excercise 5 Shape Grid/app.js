// This is where it all begins


let numLines = 50;
let lineGap = 500 / numLines;
let numShapes = 20;
let shapeGap = 500 / numShapes;


function setup() {
    createCanvas(500, 500);
    background(255, 0, 0)
    angleMode(DEGREES)
        //rectMode(CENTER)  
}

function draw() {
    background(20)
    fill(255)
    rect(0, 0, 100, 100)
        //translate(shapeGap / 2, shapeGap / 2)


    for (let y = 0; y < numShapes; y++) {
        for (let x = 0; x < numShapes; x++) {
            fill(255)
            rect(x * shapeGap, y * shapeGap, shapeGap, shapeGap)
            console.log(shapeGap)


        }
    }
}

function drawGrid() {

    for (let x = 0; x < numLines; x++)
        if (x % 5 == 0) {
            noFill()
            stroke(0, 255, 0)
            line(x * lineGap, 0, x * lineGap, 500)
            line(0, x * lineGap, 500, x * lineGap)

        } else {
            noFill()
            stroke(0, 255, 0, 100)
            line(x * lineGap, 0, x * lineGap, 500)
            line(0, x * lineGap, 500, x * lineGap)
        }
}