let angle = 0;

function setup() {
    createCanvas(500,500);
    background(255,0,0)
    angleMode(DEGREES)
    rectMode(CENTER)

    
}

function draw() {
    
    background(255,0,0)
    fill(0,0,255);
    stroke(0,255,0);
    strokeWeight(3);

    push()
    translate(100,100)
    rotate(angle)
    rect(0,0,100,100)
    pop()
    angle = angle + 1;
    
    rect(0,0,200,200)
    
}