
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('index.php')?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('index.php/lowongan')?>">Lowongan Baru</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/isi_loker')?>">Isi Loker</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/daftar_mitra')?>">Daftar Mitra</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/berita')?>">Berita</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/about')?>">About</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <a href="<?=base_url('index.php/login')?>" class="btn btn-outline-info tombol btn-md" role="button" aria-pressed="true">Login</a>
        </form>
      </div>
  </nav>
  <!-- Navbar -->

  <div class="container">
      <nav aria-label="breadcrumb" style="padding-top: 30px;">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin')?>">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Mitra</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center bg-white">
        <thead>
            <tr>
              <th>NO</th><th>Nama</th><th>Alamat</th><th>Kontak</th><th>No. Telpon</th><th>Email</th>
              <th>Alamat Web</th><th>Bidang Usaha</th><th>Sektor Usaha</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $nomor=1;
            foreach ($data_mitra as $mitra): ?>
              <tr><td><?= $nomor++ ?></td>
              <td><?= $mitra->nama ?></td>
              <td><?= $mitra->alamat ?></td>
              <td><?= $mitra->kontak ?></td>
              <td><?= $mitra->telpon ?></td>
              <td><?= $mitra->email ?></td>
              <td><?= $mitra->web ?></td>
              <td><?= $mitra->bidang_usaha_id ?></td>
              <td><?= $mitra->sektor_usaha_id ?></td>
              <td><a href="<?= base_url('index.php/admin/edit_mitra/'.$mitra->id)?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
              <a href="<?= base_url('index.php/admin/delete_mitra/'.$mitra->id)?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"
              onclick="return onDelete(\'Anda yakin untuk menghapus ? '\)"><i class="fas fa-trash-alt"></i></a></td></tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

