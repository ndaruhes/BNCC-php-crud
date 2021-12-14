<?php
// 1. Memanggil koneksi database Agar Tersambung Dengan Function2
require_once '../process/koneksi.php';

// 2. Panggil fungsi hapus buku
hapusBuku($_GET['id']);
