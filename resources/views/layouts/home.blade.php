<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Bejic's ZONE</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
  font-family: Arial, sans-serif;
  overflow: auto;
  background: black;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  min-height: 100vh;
  padding: 50px 20px;
  position: relative;
  color: white;
}
#particleCanvas {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}
h1 {
  margin-bottom: 30px;
  font-size: 2.5rem;
  text-align: center;
  color: #00cfff;
  animation: slideTitle 6s linear infinite, neonPulse 2s ease-in-out infinite;
  text-shadow: 0 0 5px gold, 0 0 10px gold, 0 0 20px gold, 0 0 40px gold;
  z-index: 2;
}
@keyframes neonPulse {
  0%,100% { text-shadow:0 0 5px gold,0 0 10px gold,0 0 20px gold,0 0 40px gold;}
  50% { text-shadow:0 0 10px gold,0 0 20px gold,0 0 30px gold,0 0 60px gold;}
}
@keyframes slideTitle {
  0% { transform: translateX(-100%); opacity: 0; }
  30% { transform: translateX(0); opacity: 1; }
  80% { transform: translateX(0); opacity: 1; }
  100% { transform: translateX(100%); opacity: 0; }
}
.carousel-container {
  width: 900px;
  overflow: hidden;
  margin-bottom: 20px;
  z-index: 2;
}
.carousel-track {
  display: flex;
  gap: 20px;
  animation: scrollCarousel 12s linear infinite;
}
.carousel-image {
  flex: 0 0 auto;
  width: 300px;
  height: 250px;
  object-fit: cover;
  border-radius: 10px;
  filter: blur(0);
  opacity: 1;
  transition: transform 0.3s;
}
.carousel-image:hover {
  transform: scale(1.05);
}
@keyframes scrollCarousel {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.description {
  margin-top: 20px;
  text-align: center;
  font-size: 1.1rem;
  max-width: 600px;
  transition: text-shadow 0.3s ease;
  z-index: 2;
}
.description:hover { text-shadow: 0 0 5px #00cfff,0 0 10px #00cfff,0 0 20px #00cfff; }
.button-container {
  margin-top: 30px;
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  z-index: 2;
}
.album-button {
  position: relative;
  padding: 10px 25px;
  border: 2px solid #00cfff;
  background: transparent;
  color: white;
  font-size: 1rem;
  text-transform: uppercase;
  cursor: pointer;
  overflow: hidden;
  border-radius: 10px;
}
.album-button span { position: relative; z-index: 2; }
.album-button::before {
  content:'';
  position:absolute;
  top:50%;
  left:50%;
  width:200%; height:400%;
  background:#00cfff;
  border-radius:40%;
  transform: translate(-50%,-50%) scale(0);
  transition: transform 0.3s ease;
  pointer-events:none;
  z-index:1;
}
.album-button:hover::before {
  transform: translate(-50%,-50%) scale(1.2);
}
</style>
</head>
<body>
<canvas id="particleCanvas"></canvas>
<h1>Welcome to Bejic's ZONE</h1>
<div class="carousel-container">
  <div class="carousel-track">
    <img src="https://picsum.photos/id/1011/400/250" class="carousel-image">
    <img src="https://picsum.photos/id/1012/400/250" class="carousel-image">
    <img src="https://picsum.photos/id/1013/400/250" class="carousel-image">
    <img src="https://picsum.photos/id/1014/400/250" class="carousel-image">
    <img src="https://picsum.photos/id/1015/400/250" class="carousel-image">
    <img src="https://picsum.photos/id/1011/400/250" class="carousel-image">
    <img src="https://picsum.photos/id/1012/400/250" class="carousel-image">
  </div>
</div>


<div class="description">
  Explore our amazing zones filled with nature, animals, architecture, people, and countries from around the world.
</div>
<div class="button-container">
  <button class="album-button" onclick="location.href='{{ route('page 1') }}'"><span>Nature Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 2') }}'"><span>Animal Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 3') }}'"><span>Architecture Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 4') }}'"><span>People Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 5') }}'"><span>Countries Zone</span></button>
</div>

<footer>
    &copy; 2025 Bejic My Photo Album





    <br><br><br><br><br><br>Galarps
  </footer>
  
<script>
const canvas=document.getElementById('particleCanvas');
const ctx=canvas.getContext('2d');
canvas.width=window.innerWidth;
canvas.height=window.innerHeight;
let mouse={x:null,y:null,radius:120};
window.addEventListener('mousemove', e=>{ mouse.x=e.x; mouse.y=e.y; });
window.addEventListener('resize', ()=>{ canvas.width=window.innerWidth; canvas.height=window.innerHeight; });
class Particle {
  constructor(x,y,size,strand,phase){
    this.baseX=x; this.baseY=y; this.size=size; this.strand=strand; this.phase=phase;
    this.angle=Math.random()*Math.PI*2; this.x=x; this.y=y;
  }
  draw(){
    ctx.fillStyle='rgba(180,180,180,0.9)';
    ctx.shadowColor='white'; ctx.shadowBlur=8;
    ctx.beginPath(); ctx.arc(this.x,this.y,this.size,0,Math.PI*2); ctx.fill();
  }
  update(){
    this.angle+=0.03;
    this.x=this.baseX + Math.sin(this.angle + this.strand*2)*40;
    this.y=this.baseY + Math.sin(this.angle*3 + this.phase)*50;
    let dx=mouse.x-this.x; let dy=mouse.y-this.y; let dist=Math.sqrt(dx*dx+dy*dy);
    if(dist<mouse.radius){ this.x-=dx/dist*3; this.y-=dy/dist*3; }
    this.draw();
  }
}
let particles=[];
for(let s=0;s<3;s++){
  for(let i=0;i<50;i++){
    let x=i*25 + 50; let y=Math.random()*canvas.height;
    let size=Math.random()*3+1; let phase=Math.random()*Math.PI*2;
    particles.push(new Particle(x,y,size,s,phase));
  }
}
function animate(){ctx.clearRect(0,0,canvas.width,canvas.height);particles.forEach(p=>p.update());requestAnimationFrame(animate);}
animate();
</script>
</body>
</html>
