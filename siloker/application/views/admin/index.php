
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
  <!-- isi -->
    <!-- container -->
    <div class="container bg-white padd">
        <div class="jumbotron jumbotron-fluid bg-info text-center admin">
            <div class="container">
            <h1 style="font-family: 'Varela Round', sans-serif;" class="display-4"><i class="fa fa-user" aria-hidden="true"></i>
                Selamat Datang, Admin</h1>
            <p class="lead">Silahkan pilih menu-menu dibawah ini untuk memulai mengelola data.</p>
            </div>
        </div>
    <!-- /container -->
    <!-- menu -->
    <div class="row">
        <div class="col-md-12 mt-2 ml-2 mr-2">
            <div class="row justify-content-center text-center">
                <div class="col-md-2 d-flex flex-column menu btn-light">
                    <a href="<?=base_url('index.php/admin/kelola_loker')?>" role="button" aria-pressed="true">
                        <i class="fa fa-briefcase fa-5x text-info" aria-hidden="true"></i></br>
                        <p>Kelola Lowongan Kerja</p>
                    </a>
                </div>
                <div class="col-md-2 d-flex flex-column menu btn-light">
                    <a href="<?=base_url('index.php/admin/kelola_mitra')?>" role="button" aria-pressed="true">
                        <i class="fa fa-user-plus fa-5x text-info" aria-hidden="true"></i></br>
                        <p>Kelola Mitra</p>
                    </a>
                </div>
                <div class="col-md-2 d-flex flex-column menu btn-light">
                    <a href="<?=base_url('index.php/admin/isi_berita')?>" role="button" aria-pressed="true">
                        <i class="fas fa-folder-plus fa-5x text-info" aria-hidden="true"></i></br>
                        <p>Isi Berita</p>
                    </a>
                </div>
                <div class="col-md-2 d-flex flex-column menu btn-light">
                    <a href="<?=base_url('index.php/admin/daftar_berita')?>" role="button" aria-pressed="true">
                        <i class="fas fa-newspaper fa-5x text-info" aria-hidden="true"></i></br>
                        <p>Daftar Berita</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /menu -->

