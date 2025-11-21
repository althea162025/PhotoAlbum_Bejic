<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Architecture Zone</title>
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

<div class="photo-card"><div class="inner"><div class="front"><img src="https://gttp.images.tshiftcdn.com/198642/x/0/san-agustin-church-in-intramuros-manila.jpg"></div><div class="back"><div>San Agustin Church – The oldest stone church in the Philippines, Manila.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://img.atlasobscura.com/IZu4-FGR6W5ExiAZtEluF61cGNEHCAQTsSCoDTDIvi8/rt:fit/w:1200/q:80/sm:1/scp:1/ar:1/aHR0cHM6Ly9hdGxh/cy1kZXYuczMuYW1h/em9uYXdzLmNvbS91/cGxvYWRzL3BsYWNl/X2ltYWdlcy85YmQ1/NWQ5YS0wOWI4LTQ1/Y2UtOWJmOC0yYWNm/ZmE3OGI1YjkwMjJl/MTgyYjE2OWMyN2Zi/MDdfQXRsYXMgT2Jz/Y3VyYV9zYW4gc2Vi/YXN0aWFuLmpwZw.jpg"></div><div class="back"><div>San Sebastian Church – The only all-steel Gothic church in Asia.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgX00N11HqWiTHeXr229N7t_mRQpsB9P2fkqYfcK24t0g7P9s7qN2c-JPi0D106mbOGqm8e9umCRO5S0NfYElYrZ8knNqUQWvwNxjTqO_X7Kq76kcDl5MnmS7-ygSuoxFzLCr-kvKAkbRaTVuDx3c90AH7_qLbVz7fkBhNxRM11BjZlk5FI-GQH/w1200-h630-p-k-no-nu/A_HA_ViganPoblacion_1.width-3000.jpg"></div><div class="back"><div>Vigan Heritage Houses – Spanish colonial bahay-na-bato architecture.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://images.saymedia-content.com/.image/t_share/MTc5NjM1MTgzOTQxNjU3NzM3/manila-cathedral-romanesque-architecture.jpg"></div><div class="back"><div>Manila Cathedral – Romanesque Revival style church in Intramuros.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://images.squarespace-cdn.com/content/v1/615020a166823d0e2ded9b98/1661216389910-EWUAP3VWHCCD8RK7KTVH/Bahay+Kubo.jpg"></div><div class="back"><div>Bahay Kubo – Traditional Filipino stilt house made of bamboo & nipa.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/8/8a/The_Ruins_in_Talisay%2C_Negros_Occidental.jpg"></div><div class="back"><div>The Ruins – Italianate mansion known as the Taj Mahal of Negros.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Bahay_na_bato_houses_of_philippines.jpg/330px-Bahay_na_bato_houses_of_philippines.jpg"></div><div class="back"><div>Bahay na Bato – Stone-and-wood colonial Filipino ancestral homes.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://gttp.images.tshiftcdn.com/198603/x/0/calle-crisologo-street-in-vigan-city-ilocos-sur-province.jpg?crop=1.91%3A1&fit=crop&width=1200"></div><div class="back"><div>Calle Crisologo – Preserved Spanish colonial architecture in Vigan.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.wheninmanila.com/wp-content/uploads/2011/07/image_620_1.jpg"></div><div class="back"><div>CCP Complex – Modernist Filipino architecture by Leandro Locsin.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://filipinaarchitect.com/wp-content/uploads/2023/06/400_Year_old_Beauty-scaled.jpg"></div><div class="back"><div>UST Main Building – First earthquake-resistant building in Asia.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://vhinzsdc.wordpress.com/wp-content/uploads/2011/11/malacanang-palace21.png?w=584"></div><div class="back"><div>Malacañang Palace – Official residence of the Philippine president.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://gttp.images.tshiftcdn.com/478024/x/0/temple-of-leah-in-cebu.jpg"></div><div class="back"><div>Temple of Leah – Roman-inspired temple in Cebu dedicated to love.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.nationalmuseum.gov.ph/wp-content/themes/yootheme/cache/8e/National-Museum-of-Fine-Arts-Facade-Photo-Banner-scaled-8ef8e831.jpeg"></div><div class="back"><div>National Museum – Neo-Classical architecture in Manila.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Paoay_Church_and_Bell_Tower.jpg"></div><div class="back"><div>Paoay Church – UNESCO site with Earthquake Baroque design.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://w5x6j5c9.delivery.rocketcdn.me/wp-content/uploads/2024/01/taoist-temple-1024x683.jpg"></div><div class="back"><div>Cebu Taoist Temple – Multi-tiered Chinese temple in Cebu City.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://scarletscribs.wordpress.com/wp-content/uploads/2025/05/250514-balay-negrense-museum-victor-fernandez-gaston-ancestral-house-silay-city-negros-occidental-western-visayas-philippines.jpg"></div><div class="back"><div>Silay Ancestral Houses – Known as the Paris of Negros.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://media.assettype.com/sunstar%2F2023-12%2F60470adb-3a2c-4285-a8f8-c1585cf0adc2%2FQuiapo_Church.jpg?rect=0%2C68%2C1000%2C563"></div><div class="back"><div>Quiapo Church – Baroque-style famous Black Nazarene church.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Baguio_Cathedral_2.JPG/1200px-Baguio_Cathedral_2.JPG"></div><div class="back"><div>Baguio Cathedral – Twin-tower rose-colored church in Baguio City.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.manilastandard.net/wp-content/uploads/2023/12/MSU.png"></div><div class="back"><div>MSU Marawi – Maranao-inspired Islamic architecture.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://images.squarespace-cdn.com/content/v1/508da03be4b0d28844ddf21c/1532542617139-6WH2OFWQ94N4BEI6EM3A/Intramuros-02.jpg"></div><div class="back"><div>Intramuros Walls – 16th-century Spanish fortress city architecture.</div></div></div></div>

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
        const blur = Math.min(1, distance / maxDistance * 1);
        const opacity = Math.max(0.7, 1 - distance / (maxDistance * 1.5));
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
