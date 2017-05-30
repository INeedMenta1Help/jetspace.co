<canvas id="capybaras" class="hellu"></canvas>
<style media="screen">
  body, html {
    margin: 0px;
    padding: 0px;
  }
  canvas {
    width: 100%;
    height: 100%;
    z-index: -1;
    position: absolute;
    top: 0;
    bottom: 0;
    background: #222;
    filter: grayscale(100%);
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/84/three.min.js" charset="utf-8"></script>
<script type="text/javascript">
container = document.getElementById('header');
//document.body.appendChild(container);

  var scene, camera, renderer, capys;
  var t = 0;
  window.onload = function(){
  render();
  }

  window.onresize = function(){
  camera.aspect = window.innerWidth/window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
  }

  function init() {
  holdObj = new THREE.Group();
  renderer = new THREE.WebGLRenderer({canvas: capybaras, antialias: true});
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(20, window.innerWidth/window.innerHeight, 0.1, 1000);

  renderer.setSize(window.innerWidth, window.innerHeight);
  container.appendChild(renderer.domElement);
  camera.position.z = 20;
  scene.background = new THREE.Color(0x222222);

  var light = new THREE.AmbientLight(0xaaaaff);
  scene.add(light);

  light = new THREE.DirectionalLight(0xffffaa, 1);
  light.position.set(3, 3, 3);
  scene.add(light);

  var gridSize = 10;
  var capySize = 3;
  capys = [];
  for(var i = 0; i <= gridSize; i++){
    for(var j = 0; j <= gridSize; j++){
      capys.push(new capy(i * capySize - (gridSize * capySize)/2, j * capySize  - (gridSize * capySize)/2, 0));
    }
  }
  }

  init();

  var render = function () {
  requestAnimationFrame(render);
  t += .05;
  for(var i = 0; i < capys.length; i++){
    capys[i].update();
  }

  renderer.render(scene, camera);
  }



  window.addEventListener('mousemove',
  function(e){
    var m = new THREE.Vector3(
    (e.clientX/window.innerWidth) * 2 - 1,
    - (e.clientY/window.innerHeight) * 2 + 1,
    0.5 );

    for(var i = 0; i < capys.length; i++){
      capys[i].head.lookAt(m);
    }

  }
  )




  function capy(x, y, z){
  this.obj = new THREE.Group();
  this.obj.position.set(x, y, z);

  this.timeOffset = Math.random() * 10;

  this.eyes = [];
  this.ears = [];

  this.head;
  this.buildModel = function(){
    var furMaterial = new THREE.MeshLambertMaterial({color: 0x555555});
    var eyeMaterial = new THREE.MeshLambertMaterial({color: 0x221133});

    var geo = new THREE.BoxGeometry(1, 1, 1.5);
    geo.vertices[0].x -= .2;
    geo.vertices[2].x -= .2;
    geo.vertices[5].x += .2;
    geo.vertices[7].x += .2;

    geo.vertices[0].y -= .2;
    geo.vertices[2].y += .2;
    geo.vertices[5].y -= .2;
    geo.vertices[7].y += .2;
    this.head = new THREE.Mesh(geo, furMaterial);
    this.obj.add(this.head);

    geo = new THREE.SphereGeometry(.1, 5, 5);
    var eye = new THREE.Mesh(geo, eyeMaterial);
    eye.position.set(-.45, 0, -.4);
    this.head.add(eye);
    this.eyes.push(eye);
    eye = eye.clone();
    eye.position.set(.45, 0, -.4);
    this.head.add(eye);
    this.eyes.push(eye);

    geo = new THREE.BoxGeometry(.2, .4, .2);
    var ear = new THREE.Mesh(geo, furMaterial);
    ear.position.set(-.3, .5, -.5);
    ear.rotation.set(-Math.PI/6, 0, 0);
    this.ears.push(ear);
    this.head.add(ear);
    ear = ear.clone();
    ear.position.set(.3, .5, -.5);
    this.ears.push(ear);
    this.head.add(ear);

    scene.add(this.obj);
  }

  this.init = function(){
    this.buildModel();
  }
  this.init();

  this.earFlick = 0;
  this.ear = 0;

  this.blink = 0;
  this.blinkTime = Math.floor(Math.random() * 20) + 10;
  console.log(this.blinkTime);
  this.update = function(){
    if(this.earFlick === 0){
      this.ears[this.ear].rotation.set(-Math.PI/6, this.ears[this.ear].rotation.y, this.ears[this.ear].rotation.z);
      if(Math.random() < .005){
        this.earFlick = 5;
        this.ear = Math.floor(Math.random() * 2);
      }
    }else{
      this.ears[this.ear].rotation.set(-Math.PI/6 - Math.tan(Math.sin(t))/5, this.ears[this.ear].rotation.y, this.ears[this.ear].rotation.z);
      this.earFlick -= 1;
    }

    if(this.blink === 0){
      this.eyes[0].scale.y = 1;
      if(Math.random() < .005){
        this.blink = this.blinkTime;
      }
    }else{
      if(this.blink <= this.blinkTime/2){
        this.eyes[0].scale.y += 1/this.blinkTime;
      }else{
        this.eyes[0].scale.y -= 1/this.blinkTime;
      }
      this.blink -= 1;
    }
    this.eyes[1].scale.y = this.eyes[0].scale.y;
  }
  }
</script>
