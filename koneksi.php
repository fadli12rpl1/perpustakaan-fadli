<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "6_petugas_12rpl1";

$konek = mysqli_connect($server,$username,$password,$database);

if (!$konek) {
    die("KONEKSI GAGAL <br>".mysqli_connect_error()."<br>".mysqli_connect_errno());
}
// else{
//     echo "KONEKSI BERHASIL";
// }

?>