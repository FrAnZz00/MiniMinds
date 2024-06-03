<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rekamWarna.css">
    <script src="https://kit.fontawesome.com/564566b361.js" crossorigin="anonymous"></script>
    <title>Mengenal Warna</title>

    <style>
        body {
            background: white;
        }

        .container {
            /* top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute; */
            background: white;
            border-radius: 0px;
            height: 650px;
            margin: 1rem auto 8.1rem auto;
            width: 340px;
        }

        .Header {
            display: flex;
            padding: 5px;
            gap: 10px;
            /* Memberikan jarak 10px antara gambar 1 & 2 dan gambar 2 & teks */
        }

        .Header img {
            display: block;
            /* Menghilangkan spasi bawah pada elemen inline seperti gambar */
        }


        .Text {
            margin-left: 15%;
            font-family: 'Lexend', sans-serif;
        }

        .Objek {
            display: flex;
            margin-top: 28px;
            margin-left: 15%;
            margin-bottom: 15px;
        }

        .search-box {
            width: 305px;
            border-radius: 50px;
            background: white;
            border: 2px solid rgb(61, 136, 233);
            margin-left: 25px;
        }

        form {
            margin: 0;
        }

        input {
            border: none;
            margin: 10px 5px 10px 0px;
            font-size: 20px;
            outline: none;
            color: rgb(61, 136, 233);
        }

        i {
            font-size: 20px;
            margin: 0px 10px;
            color: rgb(61, 136, 233);
        }

        i:hover {
            color: rgb(19, 72, 143);
        }

        button {
            background: none;
            border: none;
        }

        .Next {
            font-family: 'NamaFontGujarati', sans-serif;
            margin-top: 20px;
            text-align: center;
            align-items: center;
        }

        .Next button {
            background-color: rgb(61, 136, 233);
            color: white;
            width: 305px;
            height: 51px;
            font-size: 25px;
            line-height: 5px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-left: 20px;
        }

        .Next button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="Header">
            <a id="kembaliButton" href="rekamWarna2.html">
                <img src="/assets/Vector.png" width="17.86" height="28.31" style="position: relative; bottom: 3px;" alt="Kembali ke Halaman Sebelumnya">
            </a>
            <img src="/assets/Rectangle 51.png" width="280" height="22">
        </div>

        <div class="Text">
            <p>Mengenal Warna</p>
        </div>

        <div class="Objek">
            <button class="card" data-letter="A" onclick="playAudio('/assets/a.mp3')">
                <img src="/assets/Rectangle 21(2).png" width="240" height="245" alt="Huruf A">
            </button>
        </div>

        <div class="Next">
            <button><a href="{{ route('selamat1')}}">Lanjut!!!</a></button>
        </div>
    </div>
</body>

</html>