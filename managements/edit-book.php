<?php require_once '../process/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- MENDAPATKAN DATA DARI DATABASE -->
    <?php
    // 1. Mendapatkan Id Buku
    $id_buku = $_GET['id'];

    // 2. Pilih buku berdasarkan Id Buku yang kita dapat dari url
    $tampilBuku = $connect->prepare("SELECT * FROM books WHERE id='$id_buku'");
    $tampilBuku->execute();
    $dataBuku = $tampilBuku->fetch(PDO::FETCH_OBJ);
    ?>

    <!-- TABLE -->
    <div class="container">
        <div class="col-md-8 bg-light table-wrapper">
            <h3>Edit Book</h3>
            <hr>

            <form action="" method="post">
                <form>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" value="<?= $dataBuku->judul ?>">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" name="penulis" placeholder="Penulis buku" value="<?= $dataBuku->penulis ?>">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?= $dataBuku->tahun_terbit ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Halaman</label>
                        <input type="number" class="form-control" name="jumlah_halaman" placeholder="Masukkan jumlah halaman" value="<?= $dataBuku->jumlah_halaman ?>">
                    </div>
                    <button type="submit" name="editBuku" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </form>
        </div>
    </div>

    <?php
    // PROSES EDIT BUKU
    if (isset($_POST['editBuku'])) {
        // 1. Tanpa Validasi
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahunTerbit = $_POST['tahun_terbit'];
        $jumlahHalaman = $_POST['jumlah_halaman'];

        $statement = $connect->prepare("UPDATE books SET judul='$judul', penulis='$penulis', tahun_terbit='$tahunTerbit', jumlah_halaman='$jumlahHalaman' WHERE id='$id_buku'");
        $statement->execute();

        echo '
        <script>
            alert("Buku berhasil diedit")
            window.location.href = "manage-book.php";
        </script>';




        // 2. Pakai Validasi
        // $judul = $_POST['judul'];
        // $penulis = $_POST['penulis'];
        // $tahunTerbit = $_POST['tahun_terbit'];
        // $jumlahHalaman = $_POST['jumlah_halaman'];

        // if (empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahunTerbit)) || empty(trim($jumlahHalaman))) {
        //     echo '<script>alert("Harap isi form dengan benar, tidak boleh ada yang kosong dan isi hanya spasi!")</script>';
        // } else {
        //     $statement = $connect->prepare("UPDATE books SET judul='$judul', penulis='$penulis', tahun_terbit='$tahunTerbit', jumlah_halaman='$jumlahHalaman' WHERE id='$id_buku'");
        //     $statement->execute();

        //     echo '
        //     <script>
        //         alert("Buku berhasil diedit")
        //         window.location.href = "manage-book.php";
        //     </script>';
        // }
    }
    ?>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>