<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="Mbentuk.css" />
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

        .box {
            margin-top: 15px;
            margin-bottom: 15px;
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
            <img src="/assets/Vector.png" width="17.86" height="28.31" />
        </a>
        <img src="/assets/Rectangle 51.png" width="280" height="22" />
    </div>

    <div class="Text">
        <p>Manakan bentuk kotak?</p>
    </div>

    <div class="kotak">
        <img src="/assets/kotak.png" width="130px" onclick="showNotification()">

        <div class="box">
            <img src="/assets/segitiga.png" width="160px" onclick="salah()">
        </div>
    </div>

    <div class="Next">
        <button id="lanjutButton">Lanjut!!!</button>
    </div>

    <script>
        const kembaliButton = document.getElementById("kembaliButton");
        const lanjutButton = document.getElementById("lanjutButton");

        kembaliButton.addEventListener("click", function() {
            history.back();
        });

        lanjutButton.addEventListener("click", function() {
            window.location.href = "{{route('obentuk1')}}";
        });

        function showNotification() {
            Swal.fire("Selamat!", "Anda benar, ini adalah bentuk kotak!", "success");
        }

        function salah() {
            Swal.fire("Salah!", "Ini adalah bentuk segitiga, silahkan coba lagi!", "error");
        }
    </script>
</body>

</html>