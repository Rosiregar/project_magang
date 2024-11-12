<?php
include 'navbar.php';
require 'function.php';
if (isset($_GET['id'])) {
// ambil data dari URL
$id = $_GET ['id'];
//ambil data user berdasarkan id dari database
$user= query ("SELECT * FROM user WHERE id = $id")[0];
}else{
//jika 'id' tidak ada di URL, arahkan ke halaman lain untuk tampilkan pesan error
echo "<scirpt>alert ('ID tidak ditemukan'); document.location.href='user.php';</script";
exit; // hentikan eksekusi kode lebih lanjut

}

// Proses ketika form disubmit
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
      echo "<script>alert('data berhasil diubah');
      document.location.href='user.php';
      </script>";
    } else {
      echo "<script>alert('data gagal diubah');
      document.location.href='user.php';
      </script>";
    }
  }
  ?>
  <main id="main" class="main">
  
  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
  
    <div class="col-lg-8">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Ubah User</h5>

    <!-- Vertical Form -->
    <form action="" method="post" class="row g-3">
      <input type="hidden" name="id" value="<?= $user["id"]?>">
      <div class="col-12">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control" id="name" required value="<?= $user["name"]?>">
      </div>
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" required value="<?= $user["email"]?>">
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required value="<?= $user["password"]?>">
      </div>
      <!-- <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div> -->
      <div class="text-center">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

     
    </div>
  </div>
</section>

</main><!-- End #main -->