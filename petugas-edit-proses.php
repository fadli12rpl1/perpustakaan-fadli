<?php
include('koneksi.php');
if (isset($_GET['save'])) {
    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];
    $nomer_telepon        = $_POST['nomer_telepon'];
    $alamat     = $_POST['alamat'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $query_update = mysqli_query($konek,"UPDATE petugas 
    SET nis         = '$nis',
        nama        = '$nama',     
        jabatan     = '$jabatan',    
        nomer_telepon        = '$nomer_telepon',  
        alamat      = '$alamat',
        username    = '$username',       
        password    = '$password'  
    WHERE id_petugas = '$id'");

    if ($query_update) {
        ?>
        <script>
            alert('Data Berhasil Diupdate')
            window.location.href='dashboard.php?page=petugas';
        </script>
        <?php
    }
}
?>