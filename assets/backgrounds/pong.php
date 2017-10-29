<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/p5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.dom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.sound.min.js"></script>

<div id="p5-container"></div>
<style>
  #p5-container { opacity: 0.6; }
  #p5-container, #p5-container.canvas {
    width: 100vw;
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -5;
  }
</style>
<script>
function Paddle(x, y) {
  this.x = x;
  this.y = y;
  this.dir = 0;

  this.render = function() {
    fill(230);
    rect(this.x, this.y, 10, 200);
  }

  this.Moving = function() {
    this.isMoving = false;
  }

  this.move = function() {
    this.y += this.dir * 5;
  }

  this.botR = function() {
    if (this.y != ball.y && ball.xdir == 1) {
      if (this.y > ball.y) {
        this.y -= 5
      } else if (this.y < ball.y) {
        this.y += 5
      }
    }
  }

  this.botL = function() {
    if (this.y != ball.y && ball.xdir == -1) {
      if (this.y > ball.y) {
        this.y -= 5
      } else if (this.y < ball.y) {
        this.y += 5
      }
    }
  }

  this.edges = function() {
    if (this.y < 100) {
      this.y = 100;
    } else if (this.y > height - 100) {
      this.y = height-100;
    }
  }
}
</script>
<script>
function Ball(x, y, r) {
  this.x = x;
  this.y = y;
  this.xdir = -1;
  this.ydir = random(-1,1);
  this.r = r;

  this.render = function()  {
    fill(230);
    noStroke();
    rect(this.x, this.y, this.r, this.r);
  }

  this.move = function() {
    this.x += this.xdir * scl;
    this.y += this.ydir * 5;
  }

  this.score = function() {
    if (this.x < 15) {
      this.x = x;
      this.y = y
      this.ydir = random(-2,2);
      console.log('reset');
      RScore++;
      this.xdir = this.xdir * -1;
      scl = 5;
      ScoreDisplay();
    } else if (this.x > width - 15) {
      this.x = x;
      this.y = y;
      this.ydir = random(0,1);
      console.log('reset')
      LScore++;
      this.xdir = this.xdir * -1;
      scl = 5;
      ScoreDisplay();
    }
  }

  this.edges = function() {
    if (this.y < 0) {
      this.y = 1;
      this.ydir = this.ydir * -1;
    } else if (this.y > height) {
      this.y = height -1;
      this.ydir = this.ydir * -1;
    }
  }

  this.hit = function() {
    if (this.x <= 25 && this.y >= PadL.y - 110 && this.y <= PadL.y + 110) {
      this.xdir = this.xdir * -1;
      this.ydir = random(-3, 3);
      scl += 0.1;
    } else if (this.x >= width - 25 && this.y >= PadR.y - 110 && this.y <= PadR.y + 110) {
      this.xdir = this.xdir * -1;
      this.ydir = random(-3, 3);
      scl += 0.1;
    }
  }
}
</script>
<script>
var PadL;
var PadR;
var ball;
var showScore;
var isMoving;
var RScore = 0;
var LScore = 0;
var scl = 7.5
var canv;

function preload() {
	myFont = loadFont('https://cdn.rawgit.com/INeedMenta1Help/Pong/d51a9afc/FFFFORWA.TTF?raw=true');
}

function reloadCanvas() {
	canv = createCanvas(window.innerWidth - 5, window.innerHeight - 5);
	canv.parent('p5-container')
}

function setup() {
	frameRate(60);
	rectMode(CENTER);
	canv = createCanvas(window.innerWidth - 5, window.innerHeight - 5);
	canv.parent('p5-container')
	reloadCanvas();
	PadL = new Paddle(20, height/2);
	PadR = new Paddle(width - 20, height/2);
	ball = new Ball(width/2, height/2, 20);
	showScore = new ScoreDisplay();
}

function windowResized() {
 	reloadCanvas();
}
function draw() {
	background(34, 175);

	//paddles
	PadL.render();
	PadR.render();
	PadL.move();
	PadR.move();
	PadL.edges();
	PadR.edges();

	//bot
		//comment out PadL.bot if you want to play...
	PadL.botL();
		//Do not Comment Out PadR.Bot
	PadR.botR();

	//ball
	ball.render();
	ball.move();
	ball.score();
	ball.edges();
	ball.hit();

	//ScoreDisplay
	showScore.render();
}

function keyReleased() {
	if (PadL.isMoving) {
		PadL.dir = 0;
		PadL.isMoving = false;
	}
}

function keyPressed() {
	if (keyCode === UP_ARROW) {
		PadL.isMoving= true;
		PadL.dir = -1;
	} else if (keyCode === DOWN_ARROW) {
		PadL.isMoving= true;
		PadL.dir = 1;
	}
}

function ScoreDisplay() {
	console.log(LScore);
	console.log(RScore);

	this.render = function() {
		ScoreString = (str(LScore) + "-" + str(RScore));
		textAlign(CENTER);
		textFont(myFont);
		textSize(100);
		text(ScoreString, width/2, 175);
	}
}
</script>
