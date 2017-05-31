<style media="screen">
  body {
  background: #222;
  padding: 0;
  margin: 0;
  }

  .main {
  width: 100%;
  height: 100%;
  z-index: -1;
  position: absolute;
  top: 0;
  bottom: 0;
  background: #222;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -webkit-box-align: center;
  align-items: center;
  }

  .scene {
  position: absolute;
  top: calc(50vh - (280px / 2));
  -webkit-tap-highlight-color: transparent;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 280px;
  height: 280px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-animation: spin 10s infinite linear;
          animation: spin 10s infinite linear;
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
  }
  .scene.is-rotating {
  -webkit-animation-play-state: running;
          animation-play-state: running;
  }
  .scene.is-pausing-scale .cubes {
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
  }
  .scene.is-reversed-scale-animation .cubes {
  -webkit-animation-direction: reverse;
          animation-direction: reverse;
  }

  .rotate {
  -webkit-transform: translateZ(0) rotateX(55deg) rotateY(0deg) rotateZ(45deg);
          transform: translateZ(0) rotateX(55deg) rotateY(0deg) rotateZ(45deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: absolute;
  top: 0;
  left: 0;
  width: inherit;
  height: inherit;
  -webkit-transition: none !important;
  transition: none !important;
  }

  .shape {
  cursor: inherit;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 280px;
  height: 280px;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  }
  .shape--1 .cubes {
  -webkit-animation: anim-1 2.4s cubic-bezier(0.4, 0, 0.2, 1) infinite forwards;
          animation: anim-1 2.4s cubic-bezier(0.4, 0, 0.2, 1) infinite forwards;
  }
  .shape--2 .cubes {
  -webkit-animation: anim-2 2.4s linear infinite forwards;
          animation: anim-2 2.4s linear infinite forwards;
  }
  .shape--3 .cubes {
  -webkit-animation: anim-3 2.4s cubic-bezier(0.4, 0, 0.2, 1) infinite forwards;
          animation: anim-3 2.4s cubic-bezier(0.4, 0, 0.2, 1) infinite forwards;
  }
  .shape--shadow {
  display: none;
  font-size: 0;
  -webkit-transform: translateY(200px);
          transform: translateY(200px);
  }
  .shape--shadow .shadow {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #c9d6d6;
  border-radius: 2px;
  opacity: .5;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
  }
  .shape--shadow .shadow:before, .shape--shadow .shadow:after {
  z-index: -1;
  display: block;
  position: absolute;
  border-radius: 1rem;
  box-shadow: 0 0 2rem #c9d6d6;
  }
  .shape--shadow .shadow:before {
  bottom: -1rem;
  bottom: 0;
  right: 0;
  width: 90%;
  height: 2rem;
  }
  .shape--shadow .shadow:after {
  bottom: -1rem;
  bottom: 0;
  right: 0;
  width: 2rem;
  height: 90%;
  }
  .shape.size-1 .cubes {
  width: 40px;
  height: 40px;
  }
  .shape.size-2 .cubes {
  width: 120px;
  height: 120px;
  }
  .shape.size-3 .cubes {
  width: 200px;
  height: 200px;
  }
  .shape.size-4 .cubes {
  width: 280px;
  height: 280px;
  }

  .cubes {
  cursor: inherit;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: inherit;
  height: inherit;
  position: relative;
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  }

  .cube {
  position: absolute;
  width: 40px;
  height: 40px;
  max-width: 100%;
  max-height: 100%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  }
  .cube > .side {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  color: white;
  font-size: 0;
  position: absolute;
  width: 40px;
  height: 40px;
  max-width: 100%;
  max-height: 100%;
  bottom: 0;
  left: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  }
  .cube > .back {
  background: #4D4D4A;
  -webkit-transform: translateZ(-20px) rotateY(180deg);
          transform: translateZ(-20px) rotateY(180deg);
  }
  .cube > .right {
  background: #151617;
  -webkit-transform: rotateY(-270deg) translateX(20px);
          transform: rotateY(-270deg) translateX(20px);
  -webkit-transform-origin: top right;
          transform-origin: top right;
  }
  .cube > .left {
  background: #151617;
  -webkit-transform: rotateY(270deg) translateX(-20px);
          transform: rotateY(270deg) translateX(-20px);
  -webkit-transform-origin: center left;
          transform-origin: center left;
  }
  .cube > .top {
  background: #191A1A;
  -webkit-transform: rotateX(90deg) translateY(-20px);
          transform: rotateX(90deg) translateY(-20px);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  }
  .cube > .down,
  .cube > .bottom {
  background: #191A1A;
  -webkit-transform: rotateX(-90deg) translateY(20px);
          transform: rotateX(-90deg) translateY(20px);
  -webkit-transform-origin: bottom center;
          transform-origin: bottom center;
  }
  .cube > .front {
  background: #4D4D4A;
  -webkit-transform: translateZ(20px);
          transform: translateZ(20px);
  }
  .cube--1 {
  top: 0;
  left: 0;
  width: 280px;
  }
  .cube--1 > .front,
  .cube--1 > .down,
  .cube--1 > .top,
  .cube--1 > .back {
  width: 280px;
  }
  .cube--2 {
  bottom: 0;
  left: 0;
  height: 280px;
  }
  .cube--2 > .front,
  .cube--2 > .right,
  .cube--2 > .left,
  .cube--2 > .back {
  height: 280px;
  }
  .cube--3 {
  top: 0;
  right: 0;
  height: 280px;
  }
  .cube--3 > .front,
  .cube--3 > .right,
  .cube--3 > .left,
  .cube--3 > .back {
  height: 280px;
  }
  .cube--4 {
  bottom: 0;
  right: 0;
  width: 280px;
  }
  .cube--4 > .front,
  .cube--4 > .down,
  .cube--4 > .top,
  .cube--4 > .back {
  width: 280px;
  }

  .main-footer {
  position: absolute;
  bottom: 0;
  right: 0;
  height: 2rem;
  width: 100%;
  background: rgba(153, 153, 153, 0.1);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 1rem;
  }
  .main-footer > a {
  font-size: .75rem;
  color: #333;
  }

  @-webkit-keyframes spin {
  to {
    -webkit-transform: rotateY(1turn) rotateX(0turn);
            transform: rotateY(1turn) rotateX(0turn);
  }
  }

  @keyframes spin {
  to {
    -webkit-transform: rotateY(1turn) rotateX(0turn);
            transform: rotateY(1turn) rotateX(0turn);
  }
  }
  @-webkit-keyframes anim-1 {
  /* To make the animations more similar to the video I could use linear easing and a lot of frames.

  The css keyframes approach has limitations. Each easing starts and stops per each frame definition. I would like an easing to last for the whole keyframe definition.

  I experimented with JS anim, but the width and height changes work best with css-transition. DOM value changes multiple times per second is laggish for width and height animation */
  0%,
  100% {
    width: 200px;
    height: 200px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  25% {
    width: 180px;
    height: 180px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  40% {
    width: 40px;
    height: 40px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  70% {
    width: 48px;
    height: 48px;
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
  89% {
    width: 120px;
    height: 120px;
    -webkit-transform: translateY(40px);
            transform: translateY(40px);
  }
  }
  @keyframes anim-1 {
  /* To make the animations more similar to the video I could use linear easing and a lot of frames.

  The css keyframes approach has limitations. Each easing starts and stops per each frame definition. I would like an easing to last for the whole keyframe definition.

  I experimented with JS anim, but the width and height changes work best with css-transition. DOM value changes multiple times per second is laggish for width and height animation */
  0%,
  100% {
    width: 200px;
    height: 200px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  25% {
    width: 180px;
    height: 180px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  40% {
    width: 40px;
    height: 40px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  70% {
    width: 48px;
    height: 48px;
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
  89% {
    width: 120px;
    height: 120px;
    -webkit-transform: translateY(40px);
            transform: translateY(40px);
  }
  }
  @-webkit-keyframes anim-2 {
  0%,
  100% {
    width: 120px;
    height: 120px;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  25% {
    width: 120px;
    height: 120px;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  60% {
    width: 132px;
    height: 132px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  88% {
    width: 200px;
    height: 200px;
    -webkit-transform: translateY(120px);
            transform: translateY(120px);
  }
  }
  @keyframes anim-2 {
  0%,
  100% {
    width: 120px;
    height: 120px;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  25% {
    width: 120px;
    height: 120px;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  60% {
    width: 132px;
    height: 132px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  88% {
    width: 200px;
    height: 200px;
    -webkit-transform: translateY(120px);
            transform: translateY(120px);
  }
  }
  @-webkit-keyframes anim-3 {
  0%,
  100% {
    width: 40px;
    height: 40px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  25% {
    width: 48px;
    height: 48px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  35% {
    width: 280px;
    height: 280px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  78% {
    width: 224px;
    height: 224px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  }
  @keyframes anim-3 {
  0%,
  100% {
    width: 40px;
    height: 40px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  25% {
    width: 48px;
    height: 48px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  35% {
    width: 280px;
    height: 280px;
    -webkit-transform: translateY(80px);
            transform: translateY(80px);
  }
  78% {
    width: 224px;
    height: 224px;
    -webkit-transform: translateY(-80px);
            transform: translateY(-80px);
  }
  }
</style>
<main class="main">
  <div class="scene">

    <div class="shape shape--1">
      <div class="cubes">
        <div class="rotate">
          <div class="cube cube--1">
            <div class="front side">1f</div>
            <div class="back side">1b</div>
            <div class="top side">1t</div>
            <div class="down side">1d</div>
            <div class="left side">1l</div>
            <div class="right side">1r</div>
          </div>

          <div class="cube cube--2">
            <div class="front side">2f</div>
            <div class="back side">2b</div>
            <div class="top side">2t</div>
            <div class="down side">2d</div>
            <div class="left side">2l</div>
            <div class="right side">2r</div>
          </div>

          <div class="cube cube--3">
            <div class="front side">3f</div>
            <div class="back side">3b</div>
            <div class="top side">3t</div>
            <div class="down side">3d</div>
            <div class="left side">3l</div>
            <div class="right side">3r</div>
          </div>

          <div class="cube cube--4">
            <div class="front side">4f</div>
            <div class="back side">4b</div>
            <div class="top side">4t</div>
            <div class="down side">4d</div>
            <div class="left side">4l</div>
            <div class="right side">4r</div>
          </div>
        </div>
      </div>
    </div>

    <div class="shape shape--2">
      <div class="cubes">
        <div class="rotate">
          <div class="cube cube--1">
            <div class="front side">1f</div>
            <div class="back side">1b</div>
            <div class="top side">1t</div>
            <div class="down side">1d</div>
            <div class="left side">1l</div>
            <div class="right side">1r</div>
          </div>

          <div class="cube cube--2">
            <div class="front side">2f</div>
            <div class="back side">2b</div>
            <div class="top side">2t</div>
            <div class="down side">2d</div>
            <div class="left side">2l</div>
            <div class="right side">2r</div>
          </div>

          <div class="cube cube--3">
            <div class="front side">3f</div>
            <div class="back side">3b</div>
            <div class="top side">3t</div>
            <div class="down side">3d</div>
            <div class="left side">3l</div>
            <div class="right side">3r</div>
          </div>

          <div class="cube cube--4">
            <div class="front side">4f</div>
            <div class="back side">4b</div>
            <div class="top side">4t</div>
            <div class="down side">4d</div>
            <div class="left side">4l</div>
            <div class="right side">4r</div>
          </div>


        </div>
      </div>
    </div>

    <div class="shape shape--3">
      <div class="cubes">
        <div class="rotate">
          <div class="cube cube--1">
            <div class="front side">1f</div>
            <div class="back side">1b</div>
            <div class="top side">1t</div>
            <div class="down side">1d</div>
            <div class="left side">1l</div>
            <div class="right side">1r</div>
          </div>

          <div class="cube cube--2">
            <div class="front side">2f</div>
            <div class="back side">2b</div>
            <div class="top side">2t</div>
            <div class="down side">2d</div>
            <div class="left side">2l</div>
            <div class="right side">2r</div>
          </div>

          <div class="cube cube--3">
            <div class="front side">3f</div>
            <div class="back side">3b</div>
            <div class="top side">3t</div>
            <div class="down side">3d</div>
            <div class="left side">3l</div>
            <div class="right side">3r</div>
          </div>

          <div class="cube cube--4">
            <div class="front side">4f</div>
            <div class="back side">4b</div>
            <div class="top side">4t</div>
            <div class="down side">4d</div>
            <div class="left side">4l</div>
            <div class="right side">4r</div>
          </div>
        </div>
      </div>
    </div>

    <div class="shape shape--shadow">
      <div class="rotate">
      <div class="shadow">shadow</div>
      </div>
    </div>
  </div>
</main>
