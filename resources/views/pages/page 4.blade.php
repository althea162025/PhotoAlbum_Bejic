<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>People Zone</title>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    overflow-x: hidden;
    background: linear-gradient(-45deg, #ff0000, #000000, #ff6600, #000000);
    background-size: 400% 400%;
    animation: gradientFlow 12s ease infinite;
}
@keyframes gradientFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.gallery {
    width: 90%;
    margin: auto;
    padding: 80px 0;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
}
.photo-card {
    width: 100%;
    height: 300px;
    perspective: 1000px;
    transition: transform 0.5s ease, filter 0.5s ease, opacity 0.5s ease;
}
.inner {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.7s ease;
}
.photo-card:hover .inner {
    transform: rotateY(180deg);
}
.front, .back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
    border-radius: 12px;
}
.front img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
}
.back {
    background-color: rgba(0,0,0,0.9);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    font-size: 16px;
    transform: rotateY(180deg);
}
.button-container {
    text-align: center;
    margin: 80px 0 60px 0;
}
.album-button {
    position: relative;
    padding: 12px 24px;
    margin: 8px;
    font-size: 18px;
    border-radius: 8px;
    border: 2px solid #00cfff;
    background: transparent;
    color: white;
    cursor: pointer;
    overflow: hidden;
    transition: color 0.3s ease, text-shadow 0.3s ease;
}
.album-button span {
    position: relative;
    z-index: 2;
}
.album-button::before {
    content:'';
    position:absolute;
    top:50%;
    left:50%;
    width:200%;
    height:400%;
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
.album-button:hover {
    color:white;
    text-shadow:0 0 5px #00cfff,0 0 10px #00cfff,0 0 20px #00cfff;
}
</style>
</head>
<body>

<div class="gallery">

<div class="photo-card"><div class="inner"><div class="front"><img src="https://static.wixstatic.com/media/47587f_f94740154bad44218926691db259c428~mv2.jpeg/v1/fill/w_568,h_616,al_c,lg_1,q_80,enc_avif,quality_auto/47587f_f94740154bad44218926691db259c428~mv2.jpeg"></div><div class="back"><div>Tagalog – One of the largest ethnolinguistic groups, mainly found in Luzon.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://lessandra.com.ph/assets/BlogImages/into-the-queen-city-of-the-south-what-it-means-to-be-a-cebuano/sinulog-festival-celebration-in-cebu.jpg"></div><div class="back"><div>Cebuano – The biggest Visayan group known for rich culture and traditions.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://images.puertoparrot.com/articles/original/3_1600397186_d2b5c.png"></div><div class="back"><div>Ilocano – Known for resilience, discipline, and strong family values.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg88WmqhuC3aKGyCWQUoryV89o56bRfd7NN_zZGw4dxhPTQuvEj5jZHMgYJ5DKZ5sBHRzIJ5o0HqBZ0W9P9J2x0-aaLV9y8yw-E7J2_Iy6wcpy0ACLCEIPi9uZ79gCEzDPxOJSEMKCEzM3-/w1200-h630-p-k-no-nu/121212.jpg"></div><div class="back"><div>Waray – A brave and hardworking Visayan ethnolinguistic community.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Butbut_Old_Lady_of_Buscalan.jpg"></div><div class="back"><div>Kalinga – Indigenous highland people known for traditional tattoos (batok).</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Hudhud_ni_Aliguyon.jpg"></div><div class="back"><div>Ifugao – Guardians of the iconic Banaue Rice Terraces.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.pinimg.com/474x/02/75/e7/0275e7f30940b0aae0eb07855afea260.jpg"></div><div class="back"><div>Badjao – The sea nomads known for free diving and ocean lifestyle.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://largabicol.wordpress.com/wp-content/uploads/2016/08/bicolanos.jpg?w=768"></div><div class="back"><div>Bicolano – A warm, spicy-food-loving community from the Bicol region.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://explorepampanga.wordpress.com/wp-content/uploads/2015/12/pampanga-sinukwan-festival4.jpg?w=640"></div><div class="back"><div>Kapampangan – Known for culinary mastery and cultural artistry.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://businessmirror.com.ph/wp-content/uploads/2021/08/news03-080621.jpg"></div><div class="back"><div>Maranao – Renowned for exquisite okir designs and the Sarimanok symbol.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://static.wixstatic.com/media/af732f_4e0f111d26b149b0b8813231471d00b5~mv2.jpg/v1/fill/w_260,h_414,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/af732f_4e0f111d26b149b0b8813231471d00b5~mv2.jpg"></div><div class="back"><div>Yakan – Indigenous group known for vibrant handwoven textiles.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWORfHzdT5hlkgv4nA-BQJ09gUGwFS67ZByA&s"></div><div class="back"><div>Subanen – Mountain people of Mindanao known for ritual dances and gongs.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/PhetandingKoBayanan.jpg/330px-PhetandingKoBayanan.jpg"></div><div class="back"><div>Tausug – The “people of the current,” strong warriors and seafarers.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Ivatan_Woman.png/640px-Ivatan_Woman.png"></div><div class="back"><div>Ivatan – People of Batanes known for stone houses and typhoon resilience.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://images.squarespace-cdn.com/content/v1/5ee8f29bdc42e54512023bf0/1609598766600-OFXZQX8MI88RCKD3LTZH/d465f0901d99b119d4ef15fc849bf717.jpg"></div><div class="back"><div>Aeta – Among the earliest inhabitants of the Philippines, skilled forest hunters.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://tribesinthephilippines.wordpress.com/wp-content/uploads/2018/03/6960700491_0392411483.jpg"></div><div class="back"><div>Manobo – Diverse indigenous tribes known for elaborate beadwork and weaving.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1Cat_zADfOsWjP2j5WWGRmvUHfJffxMxYTg&s"></div><div class="back"><div>Bagobo – Indigenous Mindanao tribe known for traditional warrior clothing.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://filipinochildrensbible.net/wp-content/uploads/2016/08/Hiligaynon.jpg"></div><div class="back"><div>Hiligaynon – Known for their gentle tone and rich cultural festivals.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3BOPbwehSrEVx-WlXBRDO0GL-kVGEUteF0g&s"></div><div class="back"><div>Lumad – Collective term for non-Muslim indigenous groups of Mindanao.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.scidev.net/asia-pacific/wp-content/uploads/sites/4/2019/08/00018379-scaled.jpg"></div><div class="back"><div>Traditional Filipino Farmers – Backbone of rural life, preserving rice culture.</div></div></div></div>

</div>

<div class="button-container">
  <button class="album-button" onclick="location.href='{{ route('home') }}'"><span>home zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 1') }}'"><span>Nature Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 2') }}'"><span>Animal Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 3') }}'"><span>Architecture Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 4') }}'"><span>People Zone</span></button>
  <button class="album-button" onclick="location.href='{{ route('page 5') }}'"><span>Countries Zone</span></button>
</div>

<script>
const cards = document.querySelectorAll('.photo-card');
function updateCards() {
    const centerY = window.innerHeight / 2;
    cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const cardCenter = rect.top + rect.height / 2;
        const distance = Math.abs(centerY - cardCenter);
        const maxDistance = 300;
        const scale = Math.max(0.9, 1 - distance / (maxDistance * 4));
        const blur = Math.min(0.5, distance / maxDistance * 0.5);
        const opacity = Math.max(0.75, 1 - distance / (maxDistance * 1.5));
        card.style.transform = `scale(${scale})`;
        card.style.filter = `blur(${blur}px)`;
        card.style.opacity = opacity;
    });
}
window.addEventListener('scroll', updateCards);
window.addEventListener('resize', updateCards);
updateCards();
</script>

</body>
</html>
