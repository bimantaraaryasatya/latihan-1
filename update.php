<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pegawai</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai = '".$_GET['id_pegawai']."'");
    $dt_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>

    <h3>Ubah Pegawai</h3>
    <form action="proses_update_data.php" method="post">
        <input type="hidden" name="id_pegawai" value="<?=$dt_pegawai['id_pegawai']?>">
        Nama Pegawai :
        <input type="text" name="nama_pegawai" value="<?=$dt_pegawai['nama_pegawai']?>" class="form-control">
        NIK : 
        <input type="text" name="nik_pegawai" value="<?=$dt_pegawai['nik_pegawai']?>" class="form-control">
        Alamat : 
        <textarea name="alamat_pegawai" class="form-control" rows="4"><?=$dt_pegawai['alamat_pegawai']?></textarea>
        Jenis Kelamin :
        <?php
        $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
        ?>
        <select name="gender_pegawai" class="form-control">
            <option value=""></option>
            <?php 
            foreach ($arr_gender as $key_gender => $val_gender):
                if ($key_gender==$dt_pegawai['jenis_kelamin_pegawai']){
                    $selek = "selected";
                }else{
                    $selek = "";
                }
            ?>
            <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php
            endforeach
            ?>
        </select>
        Jabatan:
        <select name="id_jabatan" class="form-control">
            <option value=""></option>
            <?php 
            include "koneksi.php";
            $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                if ($data_jabatan['id_jabatan'] == $dt_pegawai['id_jabatan']) {
                    $selek = "selected";
                }else{
                    $selek = "";
                }
                echo '<option value="'.$data_jabatan['id_jabatan'].'" '.$selek.'> '.$data_jabatan['nama_jabatan'].' </option>';
            }
            ?>
        </select>
        No Telpon :
        <input type="text" name="no_telp_pegawai" value="<?=$dt_pegawai['no_telp_pegawai']?>" class="form-control">
        Username :
        <input type="text" name="username_pegawai" class="form-control" value="<?=$dt_pegawai['username_pegawai']?>">
        Password :
        <input type="password" name="password_pegawai" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary" style="margin-top: 20px; width: 100%;"x>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>