<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori Barang</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
            <th>ID Toko</th>
        </tr>
        @foreach ($data as $d)
        <tr> 
            <td>{{ $d->kategori_id }}</td> 
            <td>{{ $d->kategori_nama }}</td> 
        </tr> 
        @endforeach
    </table> 
</body> 
</html>
