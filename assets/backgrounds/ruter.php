<canvas id="canvas"></canvas>
<style media="screen">
  body {
    padding: 0;
    margin: 0;
  }
  #canvas {
    width: 100%;
    height: 100%;
    z-index: -1;
    position: absolute;
    top: 0;
    bottom: 0;
    background: #222;
  }
</style>
<script type="text/javascript">
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  var cw = canvas.width = window.innerWidth, cx = cw / 2;
  var ch = canvas.height = window.innerHeight, cy = ch / 2;

  var requestId = null;

  var dist = 100;
  var sway = dist * 0.75;
  var cols = 1 + cw / dist;
  var rows = 1 + ch / dist;

  var spring = 0.005;
  var friction = 0.98;

  var points = [];
  var m = {
  x: cx,
  y: cy
  };

  function Particle(x, y, i) {
  this.i = i;
  this.X = x;
  this.Y = y;
  this.x = x;
  this.y = y;
  this._x = x;
  this._y = y;
  this.vx = 0;
  this.vy = 0;
  this.draw = function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, 1, 0, 2 * Math.PI);
    ctx.stroke();
  };
  }
  Particle.prototype.update = function() {
  var dX = this._x - this.x;
  var dY = this._y - this.y;
  var accX = dX * spring;
  var accY = dY * spring;
  this.vx += accX;
  this.vy += accY;
  this.vx *= friction;
  this.vy *= friction;
  this.x += this.vx;
  this.y += this.vy;
  };

  function drawGrid() {
  for (var i = 0; i < points.length; i++) {
    for (var j = 0; j < points[i].length; j++) {
      ctx.beginPath();
      ctx.moveTo(points[i][j].x, points[i][j].y);
      if (points[i + 1]) {
        ctx.lineTo(points[i + 1][j].x, points[i + 1][j].y);
        if (points[i + 1][j + 1]) {
          ctx.lineTo(points[i + 1][j + 1].x, points[i + 1][j + 1].y);
        }
      }
      if (points[i][j + 1]) {
        ctx.lineTo(points[i][j + 1].x, points[i][j + 1].y);
      }
      ctx.closePath();
      ctx.strokeStyle = "#888";
      ctx.fillStyle = "hsl(0,0%," + (20 - points[i][j].vx * 5) + "%)";
      ctx.fill();
      ctx.stroke();
    }
  }
  }

  var i = 0;
  var points = [];
  for (var y = 0; y < rows; y++) {
  var row = [];
  for (var x = 0; x < cols; x++) {
    var particle = new Particle(x * dist, y * dist, i);
    row.push(particle);
    i++;
  }
  points.push(row);
  }



  function Draw() {
  requestId = window.requestAnimationFrame(Draw);
  ctx.clearRect(0, 0, cw, ch);
  for (var i = 0; i < points.length; i++) {
    for (var j = 0; j < points[i].length; j++) {
      particle = points[i][j];
      particle.update();
    }
  }
  drawGrid();
  }


  canvas.addEventListener(
  "mousemove",
  function(evt) {
    m = oMousePos(canvas, evt);
    ctx.clearRect(0, 0, cw, ch);

    for (var i = 0; i < points.length; i++) {
      for (var j = 0; j < points[i].length; j++) {
        var p = points[i][j];

        var dx = p.X - m.x;
        var dy = p.Y - m.y;
        var r = Math.sqrt(dx * dx + dy * dy);
        var a = Math.atan2(dy, dx);
        if (r < sway) {
          p._x = m.x + sway * Math.cos(a);
          p._y = m.y + sway * Math.sin(a);
        } else {
          p._x = p.X;
          p._y = p.Y;
        }
      }
    }
  },
  false
  );

  canvas.addEventListener(
  "mouseleave",
  function() {
    m = {
      x: -150,
      y: -150
    };
    for (var i = 0; i < points.length; i++) {
      for (var j = 0; j < points[i].length; j++) {
        var p = points[i][j];
        p._x = p.x = p.X;
        p._y = p.y = p.Y;
      }
    }
  },
  false
  );

  function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return {
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  };
  }

  function Init() {
  if (requestId) {
    window.cancelAnimationFrame(requestId);
    requestId = null;
  }
  cw = canvas.width = window.innerWidth, cx = cw / 2;
  ch = canvas.height = window.innerHeight, cy = ch / 2;
  cols = 1 + cw / dist;
  rows = 1 + ch / dist;

  points.length = 0;

  for (var y = 0; y < rows; y++) {
    var row = [];
    for (var x = 0; x < cols; x++) {
      var particle = new Particle(x * dist, y * dist, i);
      row.push(particle);
      i++;
    }
    points.push(row);
  }

  //drawGrid();

  Draw();
  }

  window.setTimeout(function() {
    Init();
    window.addEventListener('resize', Init, false);
  }, 15);

</script>
