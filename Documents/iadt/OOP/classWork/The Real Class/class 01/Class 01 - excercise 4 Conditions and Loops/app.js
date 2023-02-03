// This is where it all begins

//for (let i = 0; i < 100; i++) {
//   console.log(1 & 4);
//}
let numLines = 50;
let lineGap = 500 / numLines;


// odd or even

function checkNum(_Num) {
    if (_Num % 2 == 0) {
        console.log("its even")
    } else {
        console.log("its odd")
    }
    return _Num

}


function setup() {
    createCanvas(500, 500);
    background(255, 0, 0)
    angleMode(DEGREES)
        //rectMode(CENTER)


}

function draw() {

    background(0)


    //rect(0,0,50,50)
    //rect(50,0,50,50)
    //rect(100,0,50,50)
    //rect(150,0,50,50)

    //for(let x =0; x<10; x++)
    //rect(x *50 ,0,50,50)

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