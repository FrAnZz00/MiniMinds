<!DOCTYPE html>
<html>
<head>
<style>
    body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
  }
  
  .page-title {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
  }
  
  .center {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }
  
  .card {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 200px;
    border: 1px solid #ccc;
    margin: 10px;
    text-align: center;
    text-decoration: none;
    color: #333;
    transition: transform 0.3s;
  }
  
  .card:hover {
    transform: scale(1.05);
  }
  
  .card img {
    padding: 4px;
    max-width: 100%;
    max-height: 80%;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  
  .card-text {
    padding: 10px;
    font-size: 18px;
    font-weight: bold;
  }
  

  
  @media (max-width: 768px) {
    .center {
      flex-direction: column;
    }
  }
  </style>
</head>

<body>
  <audio id="background-audio" autoplay>
    <source src="assets/silahkan.mp3" type="audio/mpeg">
    
</audio>

    <h1 class="page-title">Silahkan Dipilih, ya!</h1>
    <div class="center">
  <a href="{{ route ('huruf') }}" class="card">
    <img src="assets/Huruf.jpg" alt="Membaca">
    <div class="card-text membaca">Mengenal Huruf</div>
  </a>

  <a href="{{ route ('angka') }}" class="card">
    <img src="assets/Angka.jpg" alt="Menulis">
    <div class="card-text menulis">Mengenal Angka</div>
  </a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const backgroundAudio = document.getElementById("background-audio");

    // Fungsi untuk memainkan audio
    function playBackgroundAudio() {
        backgroundAudio.currentTime = 0; // Mengatur waktu audio ke awal
        backgroundAudio.play(); // Memulai ulang audio
    }

    // Memanggil fungsi untuk memainkan audio saat halaman dimuat
    playBackgroundAudio();

    // Memanggil fungsi untuk memainkan audio lagi saat halaman direfresh
    window.addEventListener("beforeunload", playBackgroundAudio);
});
</script>
</body>
</html>
