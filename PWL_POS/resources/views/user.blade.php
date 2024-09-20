<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>View Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama Pengguna</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama}}</td>
            <td>
                <a href="../public/user/ubah/{{ $d->user_id }}">Ubah</a> | 
                <a href="../public/user/hapus/{{ $d->user_id }}">Hapus</a>
            </td>        
        </tr>
        @endforeach
    </table>
</body>
</html>

