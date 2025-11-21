<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nature Zone</title>
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
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2014/07/29/03/57/bohol-404255_1280.jpg"></div><div class="back"><div>The famous Chocolate Hills of Bohol.</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://www.travel-palawan.com/wp-content/uploads/2018/02/Limeston-rocks-Bacuit-bay-El-Nidou-jpg-768x512.jpg"></div><div class="back"><div>Towering limestone cliffs in Palawan.<br>The El Nido Limestone Cliffs, Palawan</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/1/13/Mayon_Volcano_and_the_Sleeping_Lion.jpg"></div><div class="back"><div>Perfect cone-shaped volcano in Albay.Mayon Volcano</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.pixabay.com/photo/2018/11/10/16/42/philippines-3806959_1280.jpg"></div><div class="back"><div>2,000-year-old terraces carved by Ifugao people.  Banaue Rice Terraces,</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://gttp.images.tshiftcdn.com/498900/x/0/kawasan-falls-man.jpg"></div><div class="back"><div>Cool turquoise waterfalls in Cebu .Kawasan Falls,</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://www.shutterstock.com/image-photo/aerial-view-boracay-island-western-600nw-641355409.jpg"></div><div class="back"><div>Powdery white sand of Boracay.Boracay White Beach, Aklan</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/78/fe/58/caption.jpg?w=1200&h=-1&s=1"></div><div class="back"><div>World-famous surfing waves in Siargao.Cloud 9, Siargao</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Hinatuan_enchanted_river.jpg"></div><div class="back"><div>Deep blue river in Surigao del Sur.Enchanted River</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://www.bria.com.ph/wp-content/uploads/2022/04/Facts-about-taal-Volcano-scaled.jpg"></div><div class="back"><div>Volcano within a lake in Batangas.Taal Volcano</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://i0.wp.com/www.tanawexplorer.com/wp-content/uploads/2024/07/0009_Sea-of-clouds.jpg?fit=1280%2C1080&ssl=1"></div><div class="back"><div>Sea of clouds in Benguet.Mt. Pulag Sea of Clouds</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/12/71/df/the-beauty-of-tinuy-an.jpg?w=900&h=500&s=1"></div><div class="back"><div>Known as the Niagara Falls of the Philippines.Tinuy-an Falls</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://mindanews.com/wp-content/uploads/2019/03/holonkule-e1552024812492.jpg"></div><div class="back"><div>Crater lake in South Cotabato.Lake Holon</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://gttp.images.tshiftcdn.com/220778/x/0/puerto-princesa-underground-river.jpg?crop=1.91%3A1&fit=crop&width=1200"></div><div class="back"><div>Famous Puerto Princesa cave river.Puerto Princesa Underground River, Palawan</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.britannica.com/17/166817-050-1BDC8905/Mount-Apo-island-Mindanao-Philippines.jpg"></div><div class="back"><div>Tallest mountain in the Philippines.Mount Apo</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://gttp.images.tshiftcdn.com/356978/x/0/aerial-view-of-kayangan-lake.jpg"></div><div class="back"><div>Known as the cleanest lake in Asia.Kayangan Lake, Coron</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://lh3.googleusercontent.com/proxy/OVh2MT8snmxSx9by0RZ9ct9J0bh_vmuvRf24K-jWYkfQUN-RDIjlVPi5ZOFLPa07IsGnFdaMI9K42hZHgGG32Z5XS8hMyVNP4vOvAwIgBC-KdGPA3pyK_ElWwPu5kOB_4_hKJhY93IiMeaBlI0d7hyuEDzZYkN8biA"></div><div class="back"><div>Famous monolith in Cavite.Mt. Pico de Loro</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Kalanggaman_Island.jpg"></div><div class="back"><div>Long white sandbar paradise of leyte.Kalanggaman Island</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://img.atlasobscura.com/_Q-lysIhGrlah2auXWQcfw17ui9PmKZXkICt01x_XuI/rt:fit/h:400/q:81/sm:1/scp:1/ar:1/aHR0cHM6Ly9hdGxh/cy1kZXYuczMuYW1h/em9uYXdzLmNvbS91/cGxvYWRzL3BsYWNl/X2ltYWdlcy9hNTIy/MjhhNDVjY2IxNzJl/ZDdfc3Vua2VuLWNl/bWV0ZXJ5LmpwZw.jpg"></div><div class="back"><div>Historic landmark in Camiguin.Sunken Cemetery</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://i0.wp.com/iwentanyways.com/wp-content/uploads/2017/04/P_20160207_112503_HDR-01.jpeg?fit=4096%2C2304&ssl=1"></div><div class="back"><div>Popular ridge hike in Benguet.Mt. Ulap</div></div></div></div>
    <div class="photo-card"><div class="inner"><div class="front"><img src="https://www.weseektravel.com/wp-content/uploads/2021/11/CAMBUGAHAY-FALLS-SIQUIJOR-main-1.jpg"></div><div class="back"><div>Clear blue waterfalls in Siquijor.Cambugahay Falls,</div></div></div></div>
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
