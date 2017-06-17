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
  }
</style>
<script type="text/javascript">
  'use strict';

  var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  /*------------------------------*\
  |* Main Canvas
  \*------------------------------*/

  var Canvas = function () {
    function Canvas() {
        _classCallCheck(this, Canvas);

        // setup a canvas
        this.canvas = document.getElementById('canvas');
        this.dpr = window.devicePixelRatio || 1;
        // this.dpr = 1;

        this.radius = 4 * this.dpr;
        this.spread = this.radius * 3 / this.dpr;

        this.ctx = this.canvas.getContext('2d');
        this.ctx.scale(this.dpr, this.dpr);

        this.mouse = {
            x: 0,
            y: 0
        };

        this.setCanvasSize = this.setCanvasSize.bind(this);
        this.handleClick = this.handleClick.bind(this);
        this.handleMouse = this.handleMouse.bind(this);
        this.render = this.render.bind(this);

        this.setCanvasSize();
        this.setupListeners();

        this.constructLines();

        this.tick = 0;
        this.render();
    }

    Canvas.prototype.constructLines = function constructLines() {
        var _this = this;

        var padding = 60 * this.dpr;
        var hs = this.radius / 4;
        var dy = (this.canvas.height - padding * 2) / hs / this.spread;
        var amount = Math.ceil(dy);
        // console.log(amount);
        this.lines = new Array(amount).fill(null).map(function (l, i) {
            var p1 = new Point(padding, padding + i * hs * _this.spread);

            var p2 = new Point(_this.canvas.width - padding, padding + i * hs * _this.spread);

            return new Line(Math.floor(_this.canvas.width / hs / dy), p1, p2);
        });
    };

    Canvas.prototype.updateVerts = function updateVerts() {
        var _this2 = this;

        this.lines.map(function (line, i) {
            var l = line.vertices.length;
            var r = 1 / l;
            line.vertices.map(function (p, i) {
                return p.moveTo(p.x, p.y + Math.cos(_this2.tick / 10 + i) * _this2.dpr * 1);
            });
        });
    };

    Canvas.prototype.setupListeners = function setupListeners() {
        window.addEventListener('resize', this.setCanvasSize);
        window.addEventListener('click', this.handleClick);
        window.addEventListener('mousemove', this.handleMouse);
    };

    Canvas.prototype.handleClick = function handleClick(event) {
        var _event$clientX = event.clientX;
        var x = _event$clientX.x;
        var y = _event$clientX.y;
    };

    Canvas.prototype.handleMouse = function handleMouse(event) {
        var x = event.clientX * this.dpr;
        var y = event.clientY * this.dpr;
        this.mouse = { x: x, y: y };
    };

    Canvas.prototype.setCanvasSize = function setCanvasSize() {
        this.canvas.width = window.innerWidth * this.dpr;
        this.canvas.height = window.innerHeight * this.dpr;
        this.canvas.style.width = window.innerWidth + 'px';
        this.canvas.style.height = window.innerHeight + 'px';

        this.constructLines();
    };

    Canvas.prototype.drawBackground = function drawBackground() {
        var gradient = this.ctx.createLinearGradient(0, 0, this.canvas.width, this.canvas.height);
        gradient.addColorStop(0, '#333');
        gradient.addColorStop(1, '#333');
        this.ctx.fillStyle = gradient;
        this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
    };

    Canvas.prototype.drawLines = function drawLines() {
        var _this3 = this;

        this.lines.forEach(function (line) {
            _this3.ctx.beginPath();
            _this3.ctx.strokeStyle = 'white';
            _this3.ctx.lineWidth = 2 * _this3.dpr;
            _this3.ctx.moveTo(line.p1.x, line.p1.y);
            _this3.ctx.lineTo(line.p2.x, line.p2.y);
            _this3.ctx.stroke();
        });
    };

    Canvas.prototype.drawCurve = function drawCurve() {
        this.ctx.lineCap = 'round';
        this.ctx.lineWidth = 3 * this.dpr;

        for (var i = 0; i < this.lines.length; i++) {
            var line = this.lines[i];

            this.ctx.strokeStyle = i % 2 === 0 ? '#444' : '#555';

            this.ctx.beginPath();
            this.ctx.moveTo(line.vertices[0].x, line.vertices[0].y);

            for (var k = 0; k < line.vertices.length - 1; k++) {

                var p1 = line.vertices[k];
                var p2 = line.vertices[k + 1];

                var cpx = (p1.x + p2.x) / 2;
                var cpy = (p1.y + p2.y) / 2;

                if (k === line.vertices.length - 2) {
                    this.ctx.quadraticCurveTo(p1.x, p1.y, p2.x, p2.y);
                } else {
                    this.ctx.quadraticCurveTo(p1.x, p1.y, cpx, cpy);
                }
            }

            this.ctx.stroke();
        }
    };

    Canvas.prototype.drawVerts = function drawVerts() {
        var _this4 = this;

        this.lines.forEach(function (line) {
            _this4.ctx.lineWidth = 2 * _this4.dpr;
            _this4.ctx.strokeStyle = '#222222';
            // this.ctx.globalCompositeOperation = 'overlay';

            line.vertices.forEach(function (p) {
                _this4.ctx.beginPath();
                _this4.ctx.arc(p.x, p.y, _this4.radius, 0, Math.PI * 2, true);
                _this4.ctx.closePath();
                _this4.ctx.stroke();
            });

            // this.ctx.globalCompositeOperation = 'source-over';
        });
    };

    Canvas.prototype.render = function render() {
        this.drawBackground();
        this.drawCurve();

        // this.drawVerts();
        this.updateVerts();

        this.tick++;
        window.requestAnimationFrame(this.render);
    };

    return Canvas;
  }();

  /*------------------------------*\
  |* Line
  \*------------------------------*/

  var Line = function Line(vertices, p1, p2) {
    _classCallCheck(this, Line);

    this.p1 = p1;
    this.p2 = p2;

    var dx = p2.x - p1.x;
    var dy = p2.y - p1.y;

    var vx = dx / (vertices - 1);
    var vy = dy / (vertices - 1);

    this.vertices = new Array(vertices).fill(null).map(function (p, i) {
        return new Point(p1.x + vx * i, p1.y + vy * i);
    });
  };

  /*------------------------------*\
  |* Point
  \*------------------------------*/

  var Point = function () {
    function Point() {
        var x = arguments.length <= 0 || arguments[0] === undefined ? 0 : arguments[0];
        var y = arguments.length <= 1 || arguments[1] === undefined ? 0 : arguments[1];

        _classCallCheck(this, Point);

        this.x = x;
        this.y = y;
    }

    Point.prototype.moveTo = function moveTo() {
        this.x = arguments.length <= 0 ? undefined : arguments[0];
        this.y = arguments.length <= 1 ? undefined : arguments[1];
    };

    _createClass(Point, [{
        key: 'position',
        get: function get() {
            return {
                x: this.x,
                y: this.y
            };
        }
    }]);

    return Point;
  }();

  new Canvas();
</script>
