<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000;
        }

        th {
            background-color: #f0f0f0;
        }

        td {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Profil Pengguna</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $name }}</td>
        </tr>
    </table>
</body>
</html>
