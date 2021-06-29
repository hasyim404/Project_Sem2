<script>
function onDelete(pesan){
    if (confirm(pesan)){
        return true;
    }else{
        return false;
    }
}
</script>

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
          <button class="btn btn-outline-info tombol" type="button"><a href="<?=base_url('index.php/login')?>">Login</a></button>
        </form>
      </div>
  </nav>
  <!-- Navbar -->

  <!-- isi -->
  <div class="container">
      <nav aria-label="breadcrumb" style="padding-top: 30px;">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin')?>">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Lowongan Kerja</li>
        </ol>
    </nav>
  </div>
  <?= form_open('admin/edit')?>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center bg-white">
        <thead>
            <tr>
              <th>NO</th><th>Deskripsi Pekerjaan</th><th>Tanggal Akhir</th><th>Mitra</th><th>Email</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $nomor=1;
            foreach ($data_loker as $loker): ?>
              <tr><td><?= $nomor++ ?></td>
              <td><?= $loker->deskripsi_pekerjaan ?></td>
              <td><?= $loker->tanggal_akhir ?></td>
              <td><?= $loker->mitra_id ?></td>
              <td><?= $loker->email ?></td>
              <td><a href="<?= base_url('index.php/admin/edit/'.$loker->id)?>" class="btn btn-info btn-lg" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
              <a href="<?= base_url('index.php/admin/delete/'.$loker->id)?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"
              onclick="return onDelete(\'Anda yakin untuk menghapus ? '\)"><i class="fas fa-trash-alt"></i></a></td></tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>