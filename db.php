<?php 

/**fungsi untuk conect ke database */
function conn(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_toko_buku";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
return $conn;
}

/**fungsi untuk menampilkan ke data buku */
function getbooks() {
    $conn = conn ();
    $sql = "SELECT *FROM buku";
    $result = mysql_query ($conn,$sql);
    while ($row = mysqli_fecth_array($result)){
        $rows[] =$row;
    }
        return $rows;
}

/**fungsi untuk menampilkan ke data pelanggan */
function getpelanggan() {
    $conn = conn ();
    $sql = "SELECT *FROM tb_pelanggan";
    $result = mysql_query ($conn,$sql);
    while ($row = mysqli_fecth_array($result)){
        $rows[] =$row;
    }
        return $rows;
}

/**fungsi untuk menampilkan ke data transaksi */
function gettransaksi() {
    $conn = conn ();
    $sql = "SELECT *FROM tb_transaksi";
    $result = mysql_query ($conn,$sql);
    while ($row = mysqli_fecth_array($result)){
        $rows[] =$row;
    }
        return $rows;
}

/** fungsi untuk query insert data buku */
function insertbook($nama_buku, $penulis, $harga){
    $conn = conn();
    $sql = "INSERT INTO tb_buku (nama_buku, penulis, harga) VALUES ('$nama_buku', '$pengarang', '$harga')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk menampilkan data buku berdasarkan id_buku tertentu */
function getBookbyID($id_buku){
    $conn = conn();
    $sql = "SELECT * FROM tb_buku WHERE id_buku = '$id_buku'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fecth_array(result);
    return $row;
}

/** fungsi untuk query edit data buku */
function insertbook($id_buku, $nama_buku, $penulis, $harga){
    $conn = conn();
    $sql = "UPDATE tb_buku SET nama_buku ='$nama_buku', penulis='$penulis', harga='$harga' WHERE id_buku ='$id_buku'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
?> 