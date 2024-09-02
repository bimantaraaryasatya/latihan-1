<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Read Data</title>
</head>
<body>
    <h3 style="text-align: center;">Tampil Siswa</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th><th>NIK</th><th>Nama Pegawai</th><th>Alamat</th><th>Jenis Kelamin</th><th>No Telp</th><th>Jabatan</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                include "koneksi.php";
                $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai JOIN jabatan ON jabatan.id_jabatan=pegawai.id_jabatan");
                $no = 0;
                while($data_pegawai = mysqli_fetch_array($qry_pegawai)){
                    $no++; ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_pegawai['nik_pegawai']?></td>
                    <td><?=$data_pegawai['nama_pegawai']?></td>
                    <td><?=$data_pegawai['alamat_pegawai']?></td>
                    <td><?=$data_pegawai['jenis_kelamin_pegawai']?></td>
                    <td><?=$data_pegawai['no_telp_pegawai']?></td>
                    <td><?=$data_pegawai['nama_jabatan']?></td>
                    <td><a href="update.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>" class="btn btn-success">Ubah</a> | <a href="delete.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>