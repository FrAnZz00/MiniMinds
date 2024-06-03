<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        /* Reset gaya bawaan halaman */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        /* Menjadikan halaman penuh tinggi */
        html,
        body,
        form {
            height: 100%;
        }
    
        /* Latar belakang halaman */
        body,
        form {
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    
        .guru {
            margin-top: 25px;
            background-color: #f0f0f0;
            color: black;
        }
    
        .guru a {
            text-decoration: underline;
        }
    
        /* Input teks */
        .result-class {
            width: 150%;
            max-width: 300px;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
        }
    
        body a {
            width: 80%;
            max-width: 300px;
            /* Lebar maksimum untuk tombol */
            height: 40px;
            background-color: rgb(106, 21, 175);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
        }
    
        .custom-button {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            width: 150%;
        }
    
        img {
            max-width: 100%;
            height: 40%;
            margin-bottom: 20px;
        }
    
        button:hover {
            background-color: rgb(160, 105, 205);
            /* Ubah warna latar belakang saat dihover */
            color: #fff;
            /* Ubah warna teks saat dihover */
            text-decoration: underline;
            /* Tambah garis bawah saat dihover */
            cursor: pointer;
            /* Ganti cursor saat dihover menjadi tangan */
        }
    
        button {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
            width: 85%;
            height: 130%;
            background-color: rgb(160, 105, 205);
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
        }
    
        .kelas {
            width: 150%;
            max-width: 300px;
            height: 40px;
            background-color: white;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
        }
    
        #role {
            width: 150%;
            max-width: 300px;
            height: 40px;
            background-color: white;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <form action="{{ route('login-proses') }}" method="post">
        @method('post')
        @csrf

        <audio id="background-audio" autoplay>
            <source src="assets/tanya.mp3" type="audio/mpeg">
        </audio>


        <img src="assets/bertanya.png" />
        <div class="nama"></div>
        <input type="text" id="username" name="username" placeholder="Nama" class="result-class">
        @error('username')
            <small>{{ $message }}</small>
        @enderror
        </div>

        {{-- <div class="kelas"></div> --}}
        <input type="password" id="password" name="password" class="kelas" placeholder="Password">
        @error('password')
            <small>{{ $message }}</small>
        @enderror
        </div>

        <select id="role" name="role" placeholder="role" required>
            <option value="" disabled selected>Masuk Sebagai:</option>
            <option value="guru">Guru</option>
            <option value="murid">Murid</option>
            @error('role')
                <small>{{ $message }}</small>
            @enderror
        </select>

        <div class="custom-button">
            <button type="submit">Ayo Mulai</button>
        </div>

        <div class="guru">
            <a class="guru" href="{{ route('create') }}">Belum punya akun?</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif

</body>

</html>
