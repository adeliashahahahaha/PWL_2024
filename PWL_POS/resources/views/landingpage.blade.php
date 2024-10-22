<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0; /* Menghilangkan margin */
            padding: 0; /* Menghilangkan padding */
        }
        .navbar {
            background: #D5006D; /* Warna sesuai dengan gambar hero */
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.2rem;
        }
        .navbar a {
            color: white;
            margin: 0 20px;
            text-decoration: none;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #ffd700; /* Warna emas saat hover */
        }
        .hero {
            background: url('ciollah.jpeg') no-repeat center center;
            background-size: cover;
            height: 100vh; /* Mengisi seluruh tinggi layar */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 3rem; /* Meningkatkan ukuran font */
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            margin: 0; /* Menghilangkan margin */
        }
        .content {
            padding: 50px;
            text-align: center;
        }
        .gallery {
            display: flex; /* Mengatur tampilan galeri dalam baris */
            justify-content: center; /* Menyelaraskan gambar ke tengah */
            flex-wrap: wrap; /* Membungkus gambar jika terlalu banyak */
        }
        .gallery img {
            width: 300px; /* Lebar tetap untuk gambar */
            height: 400px; /* Tinggi tetap untuk gambar */
            object-fit: cover; /* Memastikan gambar terjaga proporsinya */
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #2c2c2c; /* Warna footer yang lebih gelap */
            color: white;
            padding: 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .footer a {
            color: #ffd700; /* Warna emas untuk tautan footer */
            margin: 0 5px;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: #fff; /* Putih saat hover */
        }
        .social-icons {
            margin: 10px 0;
        }
        .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem; /* Ukuran ikon sosial media */
            color: #ffd700; /* Warna ikon sosial media */
        }
        .social-icons a:hover {
            color: #fff; /* Putih saat hover */
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
            <a href="{{ url('/login') }}" class="login-btn">Login Admin</a>
        </div>
    </div>

    <div class="hero">
        <h2>Penyedia Grosir Skincare Termurah di Malang Raya</h2>
    </div>

    <div class="content" id="profil">
        <h2>Jalan Mayjend Panjaitan no 9</h2>
        <p>Kami menyediakan berbagai produk berkualitas dengan harga terjangkau.</p>
    </div>

    <div class="content" id="galeri">
        <div class="gallery">
            <img src="superGlow.jpeg" alt="Sunscreen Anti Badak">
            <img src="vitalGlow.jpeg" alt="Vital Glow">
            <img src="serum.jpeg" alt="Serum">
        </div>
        <div class="gallery">
            <img src="Bodytales.jpeg" alt="Sunscreen Anti Badak">
            <img src="20.jpeg" alt="Vital Glow">
            <img src="ICE POP.jpeg" alt="Serum">
        </div>
        <div class="gallery">
            <img src="colored.jpeg" alt="Sunscreen Anti Badak">
            <img src="12.jpeg" alt="Vital Glow">
            <img src="Peeling.jpeg" alt="Serum">
        </div>

        <H1>KOLEKSI TERLENGKAP DI ETALASE</H1>
    </div>

    <div class="content" id="kontak">
        <h2>Kontak Kami</h2>
        <p>Email: info@tokoonline.com | Telepon: 08123456789</p>
    </div>

    <div class="content" id="sosmed">
        <h2>Ikuti Kami di Sosial Media</h2>
        <a href="#"><i class="fab fa-facebook" style="color: #3b5998;"></i></a>
        <a href="#"><i class="fab fa-instagram" style="color: #E1306C;"></i></a>
        <a href="#"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a>
    </div>

    <div class="footer">
        <p>&copy; 2024 Toko Online. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
    </div>
</body>
</html>
