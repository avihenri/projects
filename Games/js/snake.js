/*
    This was made with help from a tutorial - https://www.freecodecamp.org/news/think-like-a-programmer-how-to-build-snake-using-only-javascript-html-and-css-7b1479c3339e/
*/

const canvasBackgroundColor = '#fff';      
let dx = 10;
let dy = 0;
let canvasBoard = document.getElementById("gameCanvas");
let snake = [  
    {x: 150, y: 150},  {x: 140, y: 150},  {x: 130, y: 150},  {x: 120, y: 150},  {x: 110, y: 150}
];
let foodX;
let foodY; 
let score = 0; 
document.getElementById('score').innerHTML = score;
// $('#startModal').modal({backdrop: 'static', keyboard: false});  
let ctx = canvasBoard.getContext("2d");
clearCanvas();

function drawSnakePart(snakePart) { 
     ctx.fillStyle = 'lightgreen';  
     ctx.strokestyle = 'darkgreen';
     ctx.fillRect(snakePart.x, snakePart.y, 10, 10);  
     ctx.strokeRect(snakePart.x, snakePart.y, 10, 10);
}

function drawSnake() {  
    snake.forEach(drawSnakePart);
}
drawSnake();

function advanceSnake() {  
  const head = {x: snake[0].x + dx, y: snake[0].y + dy};
  snake.unshift(head);
  const didEatFood = snake[0].x === foodX && snake[0].y === foodY;  
  if (didEatFood) {    
    score += 10;    
    document.getElementById('score').innerHTML = score;
      createFood();  
    } else {    
        snake.pop();  
    }
}

// let playBtn = document.getElementById("playBtn");
// playBtn.addEventListener('click', startGame);

function startGame() {
    $('#startModal').modal('hide');   
    setTimeout(() => {
        createFood();
        main();
    }, 1000);
}

startGame();

function main() {
    if (didGameEnd()) return;
    setTimeout(function onTick() {    
        clearCanvas();   
        drawFood(); 
        advanceSnake();    
        drawSnake();   
        main();  
    }, 100)
}

function clearCanvas() {  
    ctx.fillStyle = canvasBackgroundColor;
    ctx.fillRect(0, 0, canvasBoard.width, canvasBoard.height);
}


function changeDirection(event) {  
    const LEFT_KEY = 37;  
    const RIGHT_KEY = 39;  
    const UP_KEY = 38;  
    const DOWN_KEY = 40;
    const goingUp = dy === -10;
    const goingDown = dy === 10;  
    const goingRight = dx === 10;  
    const goingLeft = dx === -10; 
    const keyPressed = event.keyCode;      
    if (keyPressed === LEFT_KEY && !goingRight) {    dx = -10;    dy = 0;  }
    if (keyPressed === UP_KEY && !goingDown) {    dx = 0;    dy = -10;  }
    if (keyPressed === RIGHT_KEY && !goingLeft) {    dx = 10;    dy = 0;  }
    if (keyPressed === DOWN_KEY && !goingUp) {    dx = 0;    dy = 10;  }
}

function up() {
    const goingDown = dy === 10;  
    if (!goingDown) {    dx = 0;    dy = -10;  }
}

function down() {
    const goingUp = dy === -10;
    if (!goingUp) {    dx = 0;    dy = 10;  }
}

function left() {
    const goingRight = dx === 10;
    if (!goingRight) {    dx = -10;    dy = 0;  }
}

function right() {
    const goingLeft = dx === -10; 
    if (!goingLeft) {    dx = 10;    dy = 0;  }
}

document.addEventListener("keydown", changeDirection);

function randomTen(min, max) {  
    return Math.round((Math.random() * (max-min) + min) / 10) * 10;
}

function createFood() {  
    foodX = randomTen(0, gameCanvas.width - 10);  
    foodY = randomTen(0, gameCanvas.height - 10);
    snake.forEach(function isFoodOnSnake(part) {    
        const foodIsOnSnake = part.x == foodX && part.y == foodY;    
        if (foodIsOnSnake) createFood();  
    });
}

function drawFood() { 
    ctx.fillStyle = 'red'; 
    ctx.strokestyle = 'darkred'; 
    ctx.fillRect(foodX, foodY, 10, 10); 
    ctx.strokeRect(foodX, foodY, 10, 10);
}

function didGameEnd() {  
    for (let i = 4; i < snake.length; i++) {    
        const didCollide = snake[i].x === snake[0].x && snake[i].y === snake[0].y
        if (didCollide) {
            showEndModel();
            return true;
        } 
    }
    const hitLeftWall = snake[0].x < 0;  
    const hitRightWall = snake[0].x > gameCanvas.width - 10;  
    const hitToptWall = snake[0].y < 0;  
    const hitBottomWall = snake[0].y > gameCanvas.height - 10;
    if (hitLeftWall || hitRightWall || hitToptWall || hitBottomWall) {
        showEndModel();
        return true;
    };
}

let playBtnAgain = document.getElementById("playBtnAgain");
playBtnAgain.addEventListener('click', resetPageGame);

function resetPageGame() {    
    // clearCanvas();
    // snake = [  
    //     {x: 150, y: 150},  {x: 140, y: 150},  {x: 130, y: 150},  {x: 120, y: 150},  {x: 110, y: 150}
    // ];       
    // drawSnake();
    // console.log(snake);
    // $('#endGameModal').modal('hide'); 
    // startGame();
    location.reload();
}

function showEndModel() {
    $('#endGameModal').modal({backdrop: 'static', keyboard: false});
}