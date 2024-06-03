<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Schoolbell&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Roboto", sans-serif;
      overflow-x: hidden;
    }

    /*nabvar*/
    nav {
      display: flex;
      background-color: rgb(106, 21, 175);
      justify-content: space-around;
      width: 100%;
      padding: 20px 0;
      color: white;
    }

    nav.logo {
      font-family: "Schoolbell", cursive;
    }

    main a {
      text-decoration: none;
    }

    nav ul {
      display: flex;
      list-style: none;
      width: 40%;
      justify-content: space-between;
    }

    nav ul li a {
      color: rgb(195, 142, 238);
      text-decoration: none;
      font-size: 0.8em;
    }

    nav ul li a:hover {
      color: white;
    }

    /* Gaya dasar untuk card container */
    .card-container {
      display: flex;
      grid-template-columns: repeat(3, 1fr);
      /* Tiga card dalam satu baris */
      gap: 20px;
      /* Jarak antara card */
    }

    .card-image {
      display: flex;
      justify-content: center;
      margin-bottom: 15px;
    }

    .card img {
      width: 50px;
      height: 80px;
    }

    .card p {
      width: 100%;
    }


    /* Gaya untuk setiap card */
    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
      padding: 10px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      cursor: pointer;
      width: 100%;
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    .blue-text {
      color: blue;
      /* Warna huruf */
    }

    .red-text {
      color: red;
      /* Warna angka */
    }

    .yellow-text {
      color: rgb(241, 198, 7);
      /* Warna huruf */
    }

    .green-text {
      color: green;
      /* Warna angka */
    }

    .orange-text {
      color: rgb(235, 129, 9);
      /* Warna huruf */
    }

    .purple-text {
      color: purple;
      /* Warna angka */
    }

    .sky-text {
      color: skyblue;
      /* Warna angka */
    }


    /* Animasi ketika hover */
    .card:hover {
      transform: scale(1.05);
      overflow: hidden;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }

    /* HAMBURGER MENU */
    .menu-toggle {
      display: flex;
      flex-direction: column;
      height: 20px;
      justify-content: space-between;
    }

    .menu-toggle span {
      display: block;
      width: 28px;
      height: 3px;
      background-color: white;
      border-radius: 3px;
    }

    /* responsiv */
    @media screen and (max-width: 768px) {
      nav ul {
        width: 50%;
      }
    }

    @media screen and (max-width: 576px) {
      nav ul {
        display: none;
      }
    }

    @media screen and(min-width: 300px) {
      .card {
        width: max-content;
      }

      .navbar li {
        margin: 0 100px;
      }

    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <h4>MiniMinds</h4>
      </div>
      <ul class="navbar">
        <li><a href="#" id="profileBtn"><i class="fa-solid fa-user"></i></a></li>
        @if(auth()->user()->role == 'guru')
        <li><a href="{{ route('dataSiswa') }}"><i class="fa-solid fa-book-atlas"></i></a></li>
        @endif
        <li><a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i></a></li>
      </ul>
    </nav>
  </header>

  <main>
    <!-- Card untuk Fitur "Pengenalan Huruf dan Angka" -->
    <a href="{{ route('pilihan')}}" id="playSound" class="card">
      <div class="card-image">
        <img src="/assets/abc.jpg" alt="Pengenalan Huruf dan Angka" />
      </div>
      <h2>Pengenalan <span class="red-text">Huruf</span> dan <span class="blue-text">Angka</span></h2>
      <p>Belajar mengenal huruf dan angka dengan cara yang menyenangkan!</p>
    </a>
    <audio id="audioPlayer" src="assets/vine-boom.mp3" style="display: none;"></audio>

    <!-- Card untuk Fitur "Pengenalan Warna dan Bentuk" -->
    <a href="{{ route('pilihan1')}}" class="card">
      <div class="card-image">
        <img src="/assets/bentuk.jpg" alt="Pengenalan Warna dan Bentuk">
      </div>
      <h2>Pengenalan <span class="yellow-text">Warna</span> dan <span class="green-text">Bentuk</span></h2>
      <p>
        Explorasi warna-warni dan bentuk-bentuk dengan permainan interaktif.
      </p>
    </a>

    <!-- Card untuk Fitur "Menggambar dan Mewarnai" -->
    <a href="{{ route('pilihan2')}}" class="card">
      <div class="card-image">
        <img src="/assets/gambar.jpg" alt="Menggambar dan Mewarnai" />
      </div>
      <h2><span class="orange-text">Menggambar</span> dan <span class="purple-text">Mewarnai</span></h2>
      <p>
        Ekspresikan kreativitas Anda dengan menggambar dan mewarnai
        gambar-gambar seru!
      </p>
    </a>

    <!-- Tambahkan card untuk fitur-fitur lainnya di sini -->
  </main>
  <script src="script.js"></script>
</body>

</html>