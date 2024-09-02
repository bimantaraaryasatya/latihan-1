<?php
    if ($_POST) {
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $nik_pegawai = $_POST['nik_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $gender_pegawai = $_POST['gender_pegawai'];
        $id_jabatan = $_POST['id_jabatan'];
        $no_telp_pegawai = $_POST['no_telp_pegawai'];
        $username_pegawai = $_POST['username_pegawai'];
        $password_pegawai = $_POST['password_pegawai'];

        if (empty($nama_pegawai)) {
            echo "  <script>
                        alert('Nama pegawai tidak boleh kosong');
                        location.href = 'read.php';
                    </script>";
        }elseif (empty($username_pegawai)) {
            echo "  <script>
                        alert('Username tidak boleh kosong');
                        location.href = 'read.php';
                    </script>";
        }else{
            include "koneksi.php";
            if (empty($password_pegawai)) {
                $update_pegawai = mysqli_query($conn, "UPDATE pegawai SET nama_pegawai = '".$nama_pegawai."', nik_pegawai = '".$nik_pegawai."', alamat_pegawai = '".$alamat_pegawai."', jenis_kelamin_pegawai = '".$gender_pegawai."', id_jabatan = '".$id_jabatan."', no_telp_pegawai = '".$no_telp_pegawai."', username_pegawai = '".$username_pegawai."', password_pegawai = '".$password_pegawai."'");
                if ($update_pegawai) {
                    echo "  <script>
                            alert('Sukses update pegawai') 
                            location.href='read.php'
                        </script>";
                }else{
                    echo "  <script>
                            alert('Gagal update pegawai') 
                            location.href='read.php'
                        </script>";
                }
            }
        }
    }
?>