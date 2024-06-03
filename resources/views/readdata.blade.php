<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd
        }
        th {
            background-color: rgb(106, 21, 175);
            
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<div class="container">
        <table>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Progress</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->fullname }}</td>
                <td>{{ $d->kelas }}</td>
                <td>{{ $d->progress}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
