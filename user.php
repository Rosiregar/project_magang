<?php
include 'navbar.php';
require 'function.php';

$user = query("SELECT * FROM user ORDER BY name ASC");
// kalau order ASC data kecil ke besar
// kalau order DESC besar kekecil

?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data user</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href ="tambah.php">Tambah user</a></h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      NO
                    </th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>LEVEL</th>
                    <th>AKSI</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                    <?php foreach($user as $row): ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td> <?=$row ["name"]?> </td>
                    <td><?=$row ["email"]?></td>
                    <td></td>
                    <td>
                    <a href="delete.php?id=<?=$row ["id"];?>"onclick="return confirm('apakah anda yakin')"><i class="bi bi-trash3"></i></a>
                    <a href="update.php?id= <?=$row ["id"];?>"><i class="bi bi-pencil-square"></i></a>
                    
                  </td>
                  </tr>
            
                  <?php $i++; ?>
                  <?php endforeach; ?>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  