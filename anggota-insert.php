<?php
//Proses insert data
if (isset($_POST['save'])) {
$nis        = $_POST['nis'];
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$id_kelas      = $_POST['id_kelas'];
$id_jurusan    = $_POST['id_jurusan'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat     = $_POST['alamat'];
$query_insert = mysqli_query($konek,"INSERT INTO anggota 
VALUES('','$nis','$nama','$jk','$tpt_lahir','$tgl_lahir','$kelas','$jurusan','$tlp','$alamat')");
    if($query_insert)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        header('refresh:3; URL=http://localhost/6_PASGANJIL2021_XIIRPL1/dashboard.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!!!!!!!
            </div>
        <?php
    }
}
//// End of proses insert /////////////////////////////////////////////////////////
?>