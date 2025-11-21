<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animal Zone</title>
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

<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.nipino.com/uploads/images/202503/image_870x_67e8e05b32dcc.jpg"></div><div class="back"><div>Philippine Eagle – The largest eagle in the Philippines, critically endangered.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://ayej.org/wp-content/uploads/2021/06/kalibasib.jpeg"></div><div class="back"><div>Tamaraw – A rare dwarf buffalo found only in Mindoro.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUMI5DVLxf_YTr9kfWB5Fs0uDb1tVDFyPmUA&s"></div><div class="back"><div>Philippine Tarsier – One of the world’s smallest primates, native to Bohol.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Binturong_in_Overloon.jpg"></div><div class="back"><div>Palawan Bearcat – A tree-dwelling mammal known for its strong fruity scent.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX4nY5dMCCqllGwXFaBqQmPCb6IlturjWrEg&s    "></div><div class="back"><div>Visayan Warty Pig – A wild pig species unique to the Visayas region.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://mlafqlkvsrtu.i.optimole.com/cb:hy5C.6711a/w:1000/h:750/q:mauto/f:best/https://islandhoppinginthephilippines.com/palawan/wp-content/uploads/2024/11/dugong2.webp"></div><div class="back"><div>Dugong – A gentle marine mammal commonly found in Palawan waters.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://alchetron.com/cdn/philippine-deer-8cfa2a92-17fd-421a-abdb-b720601990d-resize-750.jpeg"></div><div class="back"><div>Philippine Deer – Also known as the Philippine sambar, found in many islands.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://image.vigattin.com/box/optimize/86/141_7105735792077235066.jpg"></div><div class="back"><div>Butanding (Whale Shark) – The world’s biggest fish, seen in Oslob and Donsol.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFSJ1tcZN8bxdwyKCPe7dCEjMAdS3EvAz1sA&s"></div><div class="back"><div>Cloud Rat – A giant fluffy rodent living in the forests of Luzon.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.britannica.com/72/227472-050-B054D646/Malayan-colugo-Galeopterus-variegatus.jpg"></div><div class="back"><div>Flying Lemur (Colugo) – A gliding mammal found in Mindanao.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://scx2.b-cdn.net/gfx/news/hires/2013/lolongworlds.jpg"></div><div class="back"><div>Philippine Crocodile – One of the rarest crocodile species in the world.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://ferrebeekeeper.wordpress.com/wp-content/uploads/2013/12/tumblr_mdyw8sm2qv1rxyvj1o2_1280.jpg"></div><div class="back"><div>Palawan Peacock-Pheasant – A colorful bird found only in Palawan.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.rappler.com/tachyon/2022/02/bats3-1.jpg"></div><div class="back"><div>Golden-Crowned Flying Fox – One of the largest bats on Earth.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://img.etimg.com/thumb/msid-118521908,width-640,height-480,imgsize-107506,resizemode-4/king-cobra.jpg"></div><div class="back"><div>Philippine Cobra – A venomous snake known for its strong neurotoxin.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://mgahayopsapilipinas.weebly.com/uploads/3/7/1/5/37158555/philippine-mouse-deer-thumb-1_orig.jpg"></div><div class="back"><div>Mouse Deer (Pilandok) – A tiny shy creature exclusive to the Philippines.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Tragulus_nigricans.jpg"></div><div class="back"><div>Balabac Chevrotain – A mysterious forest animal from Palawan.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.oregonzoo.org/sites/default/files/styles/16x9_fallback/public/2023-08/82212PS-100.jpg?h=28decbfb&itok=K3mM_2Ge"></div><div class="back"><div>Philippine Sailfin Lizard – A large semi-aquatic lizard found in the wild.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://www.smdiversbohol.com/wp-content/uploads/giant-clam-bohol.webp"></div><div class="back"><div>Giant Clam – Massive colorful clams found in Philippine coral reefs.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://mlafqlkvsrtu.i.optimole.com/cb:hy5C.6711a/w:1200/h:630/q:mauto/f:best/https://islandhoppinginthephilippines.com/palawan/wp-content/uploads/2024/11/Manta-rays-in-Hawaii.webp"></div><div class="back"><div>Manta Ray – Graceful ocean giants seen around Tubbataha and Cebu.</div></div></div></div>
<div class="photo-card"><div class="inner"><div class="front"><img src="https://cdn.download.ams.birds.cornell.edu/api/v1/asset/616822337/1200"></div><div class="back"><div>Philippine Serpent Eagle – A sleek forest eagle found across the islands.</div></div></div></div>

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
