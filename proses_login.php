<?php
    if ($_POST) {
        $username_pegawai = $_POST['username_pegawai'];
        $password_pegawai = $_POST['password_pegawai'];
        if (empty($username_pegawai)) {
            echo "  <script>
                        alert('Username tidak boleh kosong')
                        location.href = 'login.php'
                    </script>";
        }elseif(empty($password_pegawai)){
            echo "  <script>
                        alert('Password tidak boleh kosong')
                        location.href = 'login.php'
                    </script>";
        }else{
            include "koneksi.php";
            $qry_login = mysqli_query($conn, "SELECT * FROM pegawai WHERE username_pegawai = '".$username_pegawai."' AND password_pegawai = '".$password_pegawai."'");
            if (mysqli_num_rows($qry_login) > 0) {
                echo "  <script>
                            alert('Selamat Login berhasil!')
                            location.href = 'read.php'
                        </script>";
                $dt_login = mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_pegawai'] = $dt_login['id_pegawai'];
                $_SESSION['nama_pegawai'] = $dt_login['nama_pegawai'];
                $_SESSION['status_login'] = true;
            }else{
                echo "  <script>
                            alert('Username dan Password tidak benar')
                            location.href = 'login.php'
                        </script>";
            }
        }
    }
?>