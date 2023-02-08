<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "portofolio_embong";

$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
      //jika koneksi gagal, hentikan semua proses
      die("Tidak dapat membuat koneksi dengan server database!");
} else{
      // echo("Koneksi Berhasil");
}

// koneksi dan memilih database di server
function db_disconnect($con){
      //Menutup koneksi
      mysqli_close($con);
}
?>