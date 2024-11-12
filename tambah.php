<?php
include 'navbar.php';
require 'function.php';



if ( isset($_POST["submit"])) {
    // ambil data dari tiap elemen 
    //var_dump(mysqli_affected_rows($conn));
    // cek apakah data berhasil ditambah atau atau tidak

    if(tambahuser($_POST) > 0 ) {
        echo "<script>
            alert('Data berhasil ditambah!');
            document.location.href='user.php';
        </script>";
    }else{
        echo "<script>elert('data gagal ditammbah!')
        document.location.href='user.php'; </script>";
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


        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form action= "" method="post" class="row g-3">
                <div class="col-12">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name ="email" class="form-control" id="email">
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name ="password" class="form-control" id="password">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

          
              