<?php
//Proses insert data
if (isset($_POST['save'])) {
$nis                  = $_POST['nis'];
$nama                 = $_POST['nama'];
$jk                   = $_POST['jk'];
$tempat_lahir         = $_POST['tpt_lahir'];
$tanggal_lahir        = $_POST['tgl_lahir'];
$kelas                = $_POST['kelas'];
$jurusan              = $_POST['jurusan'];
$nomor_telepon        = $_POST['tlp'];
$alamat               = $_POST['alamat'];
$query_insert = mysqli_query($konek,"INSERT INTO anggota 
VALUES('','$nis','$nama','$jk','$tempat_lahir','$tanggal_lahir','$kelas','$jurusan','$nomor_telepon','$alamat')");
    if($query_insert)
    {
        ?>
        <script>
            alert('Data Berhasil Ditambah')
            window.location.href='dashboard.php?page=anggota';
        </script>
        <?php;
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