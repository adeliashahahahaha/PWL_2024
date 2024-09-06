<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user/1/name/Adelia Adel SIB 3D') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/penjualan') }}">Sales</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Point of Sale Menu -->
    <div class="container text-center mt-5">
        <h1>Selamat Datang</h1>
        <!-- Product Categories -->
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('/category/food-beverage') }}" class="btn btn-primary btn-block">Food & Beverage</a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/category/beauty-health') }}" class="btn btn-primary btn-block">Beauty & Health</a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/category/home-care') }}" class="btn btn-primary btn-block">Home Care</a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/category/baby-kid') }}" class="btn btn-primary btn-block">Baby & Kid</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
