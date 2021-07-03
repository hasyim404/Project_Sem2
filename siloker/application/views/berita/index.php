
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
          <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('index.php/berita')?>">Berita<span class="sr-only">(current)</span></a>
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
    <!-- Berita -->
    <div class="container side">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bread justify-content-end bg-white">
          <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Berita</li>
          </ol>
      </nav>
    </div>

    <div class="container cf">
        <div class="main">
            <h3>Berita Terkini</h3>
            <div class="row">
                <div class="col-md berita">
                    <img src="https://i.postimg.cc/76Vg1LVr/image1.png" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita1')?>">Seminar & Workshop - Penerapan Materi Microservice</a></h3>
                    <p>11 Januari 2021</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md berita">
                    <img src="https://i.postimg.cc/R0pTvmn2/image2.png" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita2')?>">660.000 Pekerjaan Diprediksi Hilang Gegara Corona</a></h3>
                    <p>18 Januari 2021</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md berita">
                    <img src="https://i.postimg.cc/mksj5w9r/image3.png" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita3')?>">Pekerjaan yang Banyak Dibutuhkan Usai Pandemi</a></h3>
                    <p>15 Desember 2020</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md berita">
                    <img src="https://i.postimg.cc/1R74Mt1k/image4.png" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita4')?>">Siap-siap! 85 Juta Pekerjaan Bakal Digantikan Robot</a></h3>
                    <p>15 Januari 2021</p>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
        <h3>Lowongan Baru:</h3>
        <a href="#!"><p class="pberita">Lowongan1</p></a>
        <a href="#!"><p class="pberita">Lowongan2</p></a>
        <a href="#!"><p class="pberita">Lowongan3</p></a>
        <a href="#!"><p class="pberita">Lowongan4</p></a>
        </div>
        <!-- /Sidebar -->
    </div>
