<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="bentuk.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://fonts.googleapis.com/css?family=Lexend" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet" />
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

        .Objek {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Pilihan {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            margin-bottom: 30px;
            margin-left: 20px;
            justify-content: center;
            gap: 10px;
        }

        .option {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            width: 154px;
            height: 50px;
            font-family: "Lemon", sans-serif;
            font-size: 25px;
            line-height: 5px;
        }

        .option[data-color="blue"] {
            background-color: rgba(238, 231, 53, 1);
            color: black;
            width: 170px;
        }

        .option[data-color="red"] {
            background-color: rgba(53, 238, 161, 1);
            color: black;
        }

        .option[data-color="yellow"] {
            background-color: rgba(53, 183, 238, 1);
            color: black;
            position: relative;
            left: 80px;
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
        <p>Benda ini berbentuk apa?</p>
    </div>

    <div class="Objek">
        <img src="/assets/bentuk kotak.png" width="240" height="217" />
    </div>

    <div class="Pilihan">
        <button class="option" data-color="blue">lingkaran</button>
        <button class="option" data-color="red">segitiga</button>

        <div class="ButtonRow center">
            <button class="option" data-color="yellow">kotak</button>
        </div>
    </div>

    <div class="Next">
        <button id="lanjutButton">Lanjut!!!</button>
    </div>

    <script>
        const kembaliButton = document.getElementById('kembaliButton');
        const lanjutButton = document.getElementById('lanjutButton');
        const pilihanButtons = document.querySelectorAll('.option');

        kembaliButton.addEventListener('click', function() {
            history.back();
        });

        lanjutButton.addEventListener('click', function() {
            window.location.href = "{{route('selamat1')}}";
        });

        pilihanButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                console.log('Tombol ditekan');

                const selectedColor = button.getAttribute('data-color');
                if (selectedColor === 'blue') {
                    Swal.fire('Salah!', 'Benda ini bukan berbentuk lingkaran, silahkan coba lagi!', 'error');
                } else if (selectedColor === 'yellow') {
                    Swal.fire('Benar!', 'Benda ini berbentuk kotak!', 'success');
                } else if (selectedColor === 'red') {
                    Swal.fire('Salah!', 'Benda ini bukan berbentuk segitiga, silahkan coba lagi!', 'error');
                }
            });
        });
    </script>
</body>

</html>