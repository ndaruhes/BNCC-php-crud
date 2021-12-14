<?php
// 1. Memanggil Koneksi Database
require_once '../process/koneksi.php';

// 2. Mendapatkan Id Buku Dari URL
$id_buku = $_GET['id'];

// 3. Proses Hapus Buku
if (isset($id_buku)) {
    $statement = $connect->prepare("DELETE FROM books WHERE id = '$id_buku'");
    $statement->execute();

    echo '
    <script>
        alert("Buku berhasil dihapus")
        window.location.href = "manage-book.php";
    </script>';
}
