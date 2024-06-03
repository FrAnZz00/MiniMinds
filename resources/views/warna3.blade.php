<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="warna3.css" />
    <title>Tebak Warna</title>
    <style>
        .Kotak {
            background: white;
            margin: 1rem auto;
            width: 340px;
        }

        .Header {
            display: flex;
            padding: 5px;
            gap: 15px;
            /* Memberikan jarak 10px antara gambar 1 & 2 dan gambar 2 & teks */
        }

        .Header img {
            display: block;
            /* Menghilangkan spasi bawah pada elemen inline seperti gambar */
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

        .Text {
            margin-left: 55px;
            font-family: "Lexend", sans-serif;
        }

        .kotak {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 50px;
        }

        .yellow-box {
            width: 80px;
            height: 70px;
            background-color: yellow;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .box {
            display: flex;
            gap: 35px;
        }

        .red-box {
            background-color: red;
            padding: 20px;
            width: 80px;
            height: 70px;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            margin-left: 25px;
        }

        .blue-box {
            background-color: blue;
            padding: 20px;
            width: 80px;
            height: 70px;
            padding: 20px;
            border-radius: 10px;
            border-radius: 10px;
        }

        .Next {
            font-family: 'NamaFontGujarati', sans-serif;
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

<body class="Kotak">
    <div class="Header">
        <a id="kembaliButton" href="javascript:void(0)">
            <img src="/assets/Vector.png" width="17.86" height="28.31" alt="Kembali ke Halaman Sebelumnya" />
        </a>
        <img src="/assets/Rectangle 51.png" width="280" height="22" />
    </div>

    <div class="Text">
        <p>Temukan warna kuning!</p>
    </div>

    <div class="kotak">
        <div class="yellow-box" onclick="showNotification()"></div>
        <div class="box">
            <div class="red-box" onclick="salah()"></div>
            <div class="blue-box" onclick="salah1()"></div>
        </div>
    </div>

    <div class="Next">
        <button id="lanjutButton">Lanjut!!!</button>
    </div>

    <script>
        function showNotification() {
            Swal.fire("Selamat!", "Anda benar, ini warna kuning!", "success");
        }

        function salah() {
            Swal.fire(
                "Salah!",
                "Ini adalah warna merah, silahkan coba lagi!",
                "error"
            );
        }

        function salah1() {
            Swal.fire(
                "Salah!",
                "Ini adalah warna biru, silahkan coba lagi!",
                "error"
            );
        }

        const kembaliButton = document.getElementById("kembaliButton");

        // Menambahkan event listener ke tombol "Kembali" untuk kembali ke halaman sebelumnya
        kembaliButton.addEventListener("click", function() {
            history.back();
        });

        const lanjutButton = document.getElementById("lanjutButton");

        // Menambahkan event listener ke tombol "Lanjut!!!" untuk mengarahkan ke halaman berikutnya
        lanjutButton.addEventListener("click", function() {
            window.location.href = "{{route('selamat1')}}";
        });
    </script>
</body>

</html>