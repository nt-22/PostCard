// const config = {
//     'lineSize': 5,
//     'color': '#333'
// }

// window.onload = () => {
//     const canvas = document.getElementById('canvas');
//     const ctx = canvas.getContext('2d');
//     const indicator = document.getElementById('indicator');

//     ctx.lineWidth = config.lineSize;
//     ctx.lineJoin = 'round';
//     ctx.lineCap = 'round';
//     ctx.strokeStyle = config.color;
//     ctx.fillStyle = config.color;

//     var isRec = false,
//         newDraw = false,
//         posX = [],
//         posY = []

//     canvas.addEventListener("mousedown", (e) => {
//         if (isRec) return;
//         clearCanvas();
//         canvas.onmousedown = (e) => recordMousePos(e);
//     })

//     function clearCanvas() {
//         if (newDraw) {
//             ctx.clearRect(0, 0, canvas)
//         }        
//     }
// }

function _(selector){
    return document.querySelector(selector);
}
function setup(){
    let canvas = createCanvas(564, 400);
    canvas.parent("canvas-wrapper");
    background(255);
}
function mouseDragged(){
    let type = _("#pen-pencil").checked?"pencil":"brush";
    let size = parseInt(_("#pen-size").value);
    let color = _("#pen-color").value;
    fill(color);
    stroke(color);
    if (type == "pencil"){
        line(pmouseX, pmouseY, mouseX, mouseY);
    }
    else {
        ellipse(mouseX, mouseY, size, size);
    }
}
_("#save-canvas").addEventListener("click", function(){
    saveCanvas($canvas, "PostCard", "png");
});
