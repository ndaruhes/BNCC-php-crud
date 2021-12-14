<?php
// MEMANGGIL KONEKSI DATABASE
require_once 'koneksi.php';


// PROSES MENAMPILKAN SEMUA BUKU
function tampilSemuaBuku()
{
    global $connect;
    $statement = $connect->prepare("SELECT * FROM books");
    $statement->execute();
    $dataBuku = $statement->fetchAll();

    return $dataBuku;
}

// PROSES TAMBAH BUKU
function tambahBuku($judul, $penulis, $tahunTerbit, $jumlahHalaman)
{
    global $connect;

    // 1. Tanpa Validasi
    $statement = $connect->prepare("INSERT INTO books (judul, penulis, tahun_terbit, jumlah_halaman) VALUES ('$judul', '$penulis', '$tahunTerbit', '$jumlahHalaman')");
    $statement->execute();

    echo '
    <script>
        alert("Buku berhasil ditambah")
        window.location.href = "../managements/manage-book.php";
    </script>';

    // 2. Pakai Validasi
    //     if (empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahunTerbit)) || empty(trim($jumlahHalaman))) {
    //         echo '<script>alert("Harap isi form dengan benar, tidak boleh ada yang kosong dan isi hanya spasi!")</script>';
    //     } else {
    //         $statement = $connect->prepare("INSERT INTO books (judul, penulis, tahun_terbit, jumlah_halaman) VALUES ('$judul', '$penulis', '$tahunTerbit', '$jumlahHalaman')");
    //         $statement->execute();

    //         echo '
    //         <script>
    //             alert("Buku berhasil ditambah")
    //             window.location.href = "manage-book.php";
    //         </script>';
    //     }
}

// PROSES MENAMPILKAN SATU BUKU
function tampilBuku($id)
{
    global $connect;

    // 1. Mendapatkan Id Buku
    $id_buku = $id;

    // 2. Pilih buku berdasarkan Id Buku yang kita dapat dari url
    $tampilBuku = $connect->prepare("SELECT * FROM books WHERE id='$id_buku'");
    $tampilBuku->execute();
    $dataBuku = $tampilBuku->fetch(PDO::FETCH_OBJ);

    // 3. Mengembalikan nilai yang kita dapatkan di $dataBuku agar bisa dipakai
    return $dataBuku;
}


// PROSES EDIT BUKU
function editBuku($id_buku, $judul, $penulis, $tahunTerbit, $jumlahHalaman)
{
    global $connect;

    // 1. Tanpa Validasi
    $statement = $connect->prepare("UPDATE books SET judul='$judul', penulis='$penulis', tahun_terbit='$tahunTerbit', jumlah_halaman='$jumlahHalaman' WHERE id='$id_buku'");
    $statement->execute();

    echo '
        <script>
            alert("Buku berhasil diedit")
            window.location.href = "manage-book.php";
        </script>';

    // 2. Pakai Validasi
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

// PROSES HAPUS BUKU
function hapusBuku($id_buku)
{
    global $connect;

    if (isset($id_buku)) {
        $statement = $connect->prepare("DELETE FROM books WHERE id = '$id_buku'");
        $statement->execute();

        echo '
        <script>
            alert("Buku berhasil dihapus")
            window.location.href = "manage-book.php";
        </script>';
    }
}
