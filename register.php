<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
</head>
<body style="background-color: #4E342E;">
<section class="vh-100" style="background-color: #4E342E;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-12 d-flex align-items-center justify-content-center"> <!-- Added justify-content-center -->
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="proses_register.php" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Sign Up</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control form-control-lg" />
                    <label class="form-label" for="nama_pegawai">Nama</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="nik_pegawai" id="nik_pegawai" class="form-control form-control-lg" />
                    <label class="form-label" for="nik_pegawai">NIK</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <textarea name="alamat_pegawai" id="alamat_pegawai" class="form-control" rows="4"></textarea>
                    <label class="form-label" for="alamat_pegawai">Alamat</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <select name="gender_pegawai" id="gender_pegawai" class="form-control">
                      <option value="">Pilih Gender</option>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>  
                    </select>
                    <label class="form-label" for="gender_pegawai">Jenis Kelamin</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <select name="id_jabatan" id="id_jabatan" class="form-control">
                      <option value="">Pilih Jabatan</option>
                      <?php
                      include "koneksi.php";
                      $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                      while($data_jabatan = mysqli_fetch_array($qry_jabatan)){
                        echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';
                      }
                      ?>
                    </select>
                    <label class="form-label" for="id_jabatan">Jabatan</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="no_telp_pegawai" id="no_telp_pegawai" class="form-control form-control-lg" />
                    <label class="form-label" for="no_telp_pegawai">No Telp</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="username_pegawai" id="username_pegawai" class="form-control form-control-lg" />
                    <label class="form-label" for="username_pegawai">Username</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password_pegawai" id="password_pegawai" class="form-control form-control-lg" />
                    <label class="form-label" for="password_pegawai">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="login.php"
                      style="color: #393f81;">Login here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
