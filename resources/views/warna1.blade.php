<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

        .red-box {
            width: 80px;
            height: 70px;
            background-color: red;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .box {
            display: flex;
            gap: 35px;
        }

        .blue-box {
            background-color: blue;
            width: 80px;
            height: 70px;
            padding: 20px;
            border-radius: 10px;
        }

        .yellow-box {
            background-color: yellow;
            padding: 20px;
            width: 80px;
            height: 70px;
            border-radius: 10px;
            margin-bottom: 30px;
            margin-left: 25px;
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
        <p>Temukan warna biru!</p>
    </div>

    <div class="kotak">
        <div class="red-box" onclick="salah()"></div>

        <div class="box">
            <div class="yellow-box" onclick="salah1()"></div>
            <div class="blue-box" onclick="showNotification()"></div>
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
            window.location.href = "{{ route ('warna2')}}";
        });

        function showNotification() {
            Swal.fire("Selamat!", "Anda benar, ini warna biru!", "success");
        }

        function salah() {
            Swal.fire("Salah!", "Ini adalah warna merah, silahkan coba lagi!", "error");
        }

        function salah1() {
            Swal.fire("Salah!", "Ini adalah warna kuning, silahkan coba lagi!", "error");
        }
    </script>
</body>

</html>