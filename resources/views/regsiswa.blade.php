<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Add SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        .container h2 {
            align-items: center;
            text-align: center;
            justify-content: center;
            display: flex;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
    
        .button{
            align-items: center;
            text-align: center;
            justify-content: center;
            display: flex;
        }
    
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            height: 50px;
        }
    
        button {
            padding: 10px 20px;
            width: 250px;
            height: 50px;
            margin-top: 30px;
            background-color: rgb(106, 21, 175);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    
        button:hover {
            background-color: #0056b3;
        }
    
        .button a {
            text-decoration: none;
            color: white;
        }
    
        img {
            width: 100px;
            margin-right: 30px;
        }
    </style>
</head>
<body>
<form action="{{ route ('storeSiswa') }}" method="POST">
    @csrf
    <div class="container">
        <h2><img src="/assets/Murid.jpg" alt="">Tambah Data Murid</h2>
        <div class="nama">
        <input type="text" id="name" name="name" placeholder="Nama"> 
        @error('name')
        <small>{{ $message }}</small>
        @enderror
        </div>
        <div class="kelas">
        <input type="text" id="class" name="class" placeholder="Kelas"> 
        @error('class')
        <small>{{ $message }}</small>
        @enderror
        </div>
        <div class="button">
            <button type="submit">Tambahkan</button> 
        </div>
    </div>
</form>
</body>
</html>
