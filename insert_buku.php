<?php 
require "db.php";

$nama_buku = $_POST['nama_buku'];
$pengarang = $_POST['penulis'];
$harga = $_POST['harga'];
  
$sql = "INSERT INTO tb_buku VALUES ('', '$nama_buku', '$penulis', '$harga')";
// var_dump($sql);
$result = mysqli_query($conn, $sql );
if ($result) {
    echo "<script>
            alert('Tambah Berhasil');
            location.href = 'data_buku.php';
    </script>";
} else {
    echo "<script>
            alert('Tambah Gagal');
            location.href = 'data_buku.php';
    </script>";
}
?>                               