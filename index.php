<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Collection</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once 'views/navbar.php'; ?>

    <!-- BANNER -->
    <div class="container bg-light banner">
        <h1>Welcome to book collection 📚😎</h1>
        <p class="mb-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking</p>
        <a href="#" class="btn btn-primary">Explore Book</a>
    </div>

    <!-- BOOK CONTENT -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="col-md-12 book-content bg-light">
                    <h3 class="judul">Self Coaching Tips Easily</h3>
                    <span class="badge bg-info mb-3">Tahun Terbit 2017</span>
                    <span class="d-block">Pengarang: Muhamad Ndaru</span>
                    <span class="d-block">Jumlah Halaman: 100</span>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="col-md-12 book-content bg-light">
                    <h3 class="judul">30 Days Challenge Of Life</h3>
                    <span class="badge bg-info mb-3">Tahun Terbit 2020</span>
                    <span class="d-block">Pengarang: Agus Gunawan</span>
                    <span class="d-block">Jumlah Halaman: 94</span>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="col-md-12 book-content bg-light">
                    <h3 class="judul">Materi Gagasan Pokok</h3>
                    <span class="badge bg-info mb-3">Tahun Terbit 2019</span>
                    <span class="d-block">Pengarang: Asep Gunawan</span>
                    <span class="d-block">Jumlah Halaman: 100</span>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php require_once 'views/footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>