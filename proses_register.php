<?php
    if ($_POST) {
        $nama_pegawai = $_POST['nama_pegawai'];
        $nik_pegawai = $_POST['nik_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $gender_pegawai = $_POST['gender_pegawai'];
        $id_jabatan = $_POST['id_jabatan'];
        $no_telp_pegawai = $_POST['no_telp_pegawai'];
        $username_pegawai = $_POST['username_pegawai'];
        $password_pegawai = $_POST['password_pegawai'];

        if (empty($nama_pegawai) || empty($nik_pegawai) || empty($alamat_pegawai) || empty($gender_pegawai) || empty($id_jabatan) || empty($no_telp_pegawai) || empty($username_pegawai) || empty($password_pegawai)){
            echo "  <script>
                        alert('Form tidak boleh ada yang kosong')
                        location.href = 'register.php'
                    </script>";
        }else{
            include "koneksi.php";
            $hashed_password = password_hash($password_pegawai, PASSWORD_DEFAULT);
            $insert_pegawai = mysqli_query($conn, "INSERT INTO pegawai (nik_pegawai, nama_pegawai, alamat_pegawai, jenis_kelamin_pegawai, no_telp_pegawai, id_jabatan, username_pegawai, password_pegawai) VALUES ('".$nik_pegawai."', '".$nama_pegawai."', '".$alamat_pegawai."', '".$gender_pegawai."', '".$no_telp_pegawai."', '".$id_jabatan."', '".$username_pegawai."', '".$hashed_password."')");
            if ($insert_pegawai) {
                echo "  <script>
                            alert('Sukses menambahkan pegawai') 
                            location.href='login.php'
                        </script>";
            }else{
                echo "  <script>
                            alert('Gagal menambahkan pegawai') 
                            location.href='register.php'
                        </script>";
            }
        }
    }
?>