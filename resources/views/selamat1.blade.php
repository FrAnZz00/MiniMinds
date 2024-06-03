<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="selamat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet"> 
    <title>Pengenalan Huruf</title>

    <style>
        .Kotak {
    background: white;
    border-radius: 0px;
    height: 650px;
    margin: 1rem auto 8.1rem auto;
    width: 340px;
  }
  
  .Header {
    display: flex;
    padding: 5px; 
    gap: 10px; /* Memberikan jarak 10px antara gambar 1 & 2 dan gambar 2 & teks */
  }
  
  .Header img {
    display: block; /* Menghilangkan spasi bawah pada elemen inline seperti gambar */
  }
  
  #kembaliButton {
    cursor: pointer;
    text-decoration: none;
  }
  
  #kembaliButton img {
    width: 17.86px;
    height: 28.31px;
    margin-right: 10px; 
  }

  .box {
    margin-top: 25px;
    margin-left: 15%;
    background-color: rgba(65, 215, 236, 1);
    width: 79%;
    height: 58%;
  }

  .Objek img {
    margin-top: 25px;
    margin-left: 5%;
  }

  .Next {
    font-family: 'NamaFontGujarati', sans-serif;
    margin-top: 20px;
    text-align: center;
  }

  .Next button a {
    text-decoration: none;
    color: black;
  }
  
  .Next button {
    background-color: white; 
    color: black; 
    width: 218px;
    height: 51px;
    font-size: 25px;
    line-height: 5px; 
    border: 1px solid black;
    border-radius: 20px; /* Menambahkan border radius untuk sudut tombol */
    cursor: pointer;
    margin-bottom: 10px;
  }
    </style>
</head>
<body class="Kotak">

    <div class="Header">
        <a id="kembaliButton" href="bacaD.html">
            <img src="/assets/Vector.png" width="17.86" height="28.31" alt="Kembali ke Halaman Sebelumnya">
        </a>
        <img src="/assets/Rectangle 51.png" width="280" height="22">
    </div>    

    <div class="box">
    <div class="Objek">
            <img src="/assets/Group 18.png" width="240" height="250" alt="Huruf D">
    </div>

    <div class="Next">
        <button><a href="{{route('pilihan1')}}">Lanjutkan</a></button>
    </div>
</div>
</body>
</html>
