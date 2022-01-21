<!-- Proses Update -->
<?php
    $id_anggota = $_POST['id_anggota'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $id_kelas = $_POST['id_kelas'];
    $id_jurusan = $_POST['id_jurusan'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];

    $query_update = mysqli_query($konek,"UPDATE anggota SET nis = '$nis', 
                                                            nama = '$nama',
                                                            jk = '$jk',
                                                            tempat_lahir = '$tpt_lahir', 
                                                            tanggal_lahir = '$tgl_lahir', 
                                                            id_kelas = '$kelas', 
                                                            id_jurusan = '$jurusan', 
                                                            nomor_telepon = '$tlp', 
                                                            alamat = '$alamat'
                                                            WHERE id_anggota = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/6_PASGANJIL2021_XIIRPL1/dashboard.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>