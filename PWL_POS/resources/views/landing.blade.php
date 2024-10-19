<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .hero {
            background: url('https://via.placeholder.com/1200x500') no-repeat center center;
            background-size: cover;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2.5rem;
            text-align: center;
        }
        .content {
            padding: 50px;
            text-align: center;
        }
        .gallery img {
            width: 30%;
            margin: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .footer a {
            color: #fff;
            margin: 0 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="brand">
            <a href="{{ route('home') }}">Toko Online</a>
        </div>
        <div class="links">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="#profil">Profil</a>
            <a href="#galeri">Galeri</a>
            <a href="#kontak">Kontak</a>
            <a href="#sosmed">Sosmed</a>
            <a href="{{ route('login') }}">Login Admin</a>
        </div>
    </div>

    <div class="hero">
        <div>Selamat Datang di Toko Online Kami</div>
    </div>

    <div class="content" id="profil">
        <h2>Profil Toko</h2>
        <p>Kami menyediakan berbagai produk berkualitas dengan harga terjangkau.</p>
    </div>

    <div class="content" id="galeri">
        <h2>Galeri Produk</h2>
        <div class="gallery">
            <img src="https://via.placeholder.com/300" alt="Produk 1">
            <img src="https://via.placeholder.com/300" alt="Produk 2">
            <img src="https://via.placeholder.com/300" alt="Produk 3">
        </div>
    </div>

    <div class="content" id="kontak">
        <h2>Kontak Kami</h2>
        <p>Email: info@tokoonline.com | Telepon: 08123456789</p>
    </div>

    <div class="content" id="sosmed">
        <h2>Ikuti Kami di Sosial Media</h2>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>

    <div class="footer">
        <p>&copy; 2024 Toko Online. All Rights Reserved.</p>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
    </div>
</body>
</html>
