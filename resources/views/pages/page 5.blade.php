<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Countries Zone</title>
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

<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.natgeofe.com/n/04505c35-858b-4e95-a1a7-d72e5418b7fc/steep-karst-cliffs-of-el-nido-in-palawan_16x9.jpg"></div><div class="back"><div>Philippines – A tropical archipelago known for its islands, culture, and hospitality.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2024/03/20/12/36/tokyo-skytree-8645455_1280.jpg"></div><div class="back"><div>Japan – A blend of ancient traditions and futuristic innovation.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2020/06/11/11/52/korean-folk-village-5286449_1280.jpg"></div><div class="back"><div>South Korea – Known for K-pop, technology, and vibrant city life.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2020/08/12/19/28/great-wall-of-china-5483516_1280.jpg"></div><div class="back"><div>China – One of the world’s oldest civilizations with rich culture.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2014/11/21/17/23/new-york-540807_1280.jpg"></div><div class="back"><div>USA – A diverse country known for innovation and global influence.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2022/10/23/13/43/canoe-7541311_1280.jpg"></div><div class="back"><div>Canada – Famous for natural landscapes, forests, and friendly people.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2024/09/15/10/05/building-9048827_1280.jpg"></div><div class="back"><div>France – The world’s fashion capital with iconic architecture.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2023/01/10/00/17/italy-7708551_1280.jpg"></div><div class="back"><div>Italy – Known for art, pasta, and ancient structures like the Colosseum.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2022/04/17/11/38/city-7137958_1280.jpg"></div><div class="back"><div>Spain – A colorful country famous for flamenco, festivals, and beaches.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2018/01/12/11/55/london-3078109_1280.jpg"></div><div class="back"><div>United Kingdom – Home of royalty, castles, and historic culture.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2021/12/28/11/36/castle-6899041_1280.jpg"></div><div class="back"><div>Germany – Known for engineering, castles, and medieval towns.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2016/05/03/01/35/buildings-1368337_1280.jpg"></div><div class="back"><div>Australia – A vast country known for wildlife and the Outback.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2017/01/08/19/30/rio-de-janeiro-1963744_1280.jpg"></div><div class="back"><div>Brazil – The land of samba, rainforests, and vibrant culture.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.natgeofe.com/n/6c02ad5a-977b-4f12-b9c0-02ffb0736e07/metropolitan-cathedral-zocalo-mexico-city.JPG"></div><div class="back"><div>Mexico – Known for ancient ruins, colorful festivals, and cuisine.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.natgeofe.com/k/42e832f5-fd48-43ff-b338-091bdf4048ca/india-tajmahal.jpg?wp=1&w=1084.125&h=609"></div><div class="back"><div>India – A diverse nation with deep traditions and vibrant festivals.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.forevervacation.com/uploads/blog/thailand-visitor-guide-things-to-do-4406.jpg"></div><div class="back"><div>Thailand – Famous for food, temples, and tropical beaches.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.eyeonasia.gov.sg/images/asean-countries/Indonesia%20snapshot%20cover%20iso.jpg"></div><div class="back"><div>Indonesia – A huge archipelago with rich culture and volcanoes.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.natgeofe.com/k/95d61645-a0c7-470f-b198-74a399dd5dfb/singapore-city_3x2.jpg"></div><div class="back"><div>Singapore – A modern city-state known for cleanliness and innovation.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.natgeofe.com/k/109a4e08-5ebc-48a5-99ab-3fbfc1bbd611/Giza_Egypt_KIDS_0123_16x9.jpg"></div><div class="back"><div>Egypt – The land of pyramids, pharaohs, and ancient wonders.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://i.natgeofe.com/k/415419c5-3768-4c8f-8697-f90de7a6075b/russia-st-basils_16x9.jpg?w=1200"></div><div class="back"><div>Russia – The world’s largest country, rich in history and culture.</div></div></div></div>

</div>

<div class="button-container">
  <button class="album-button" onclick="location.href='{{ route('home') }}'"><span>Home Zone</span></button>
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
