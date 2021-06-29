
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
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('index.php/lowongan')?>">Lowongan Baru<span class="sr-only">(current)</span></a>
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

    <!-- Lowongan 1 -->
    <div class="container side">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lowongan Baru</li>
        </ol>
      </nav>
    </div>

    <div class="container cf">
        <div class="main">
          <div class="main3">
            <header>Lowongan PT ABC</header>
                <P>Dibutuhkan Programer Web</P>
                <P>Kualifikasi:</P>
                <ul>
                    <li>S1 Bidang Komputer</li>
                    <li>Menguasai Java, Spring Framework</li>
                    <li>MySQL, PostareSQL</li>
                </ul>
                <p>2 Des 2020, <a href="<?=base_url('index.php/lowongan/detail1')?>">Lihat Detail</a></p>
        <hr>
            <header>Lowongan PT XYZ</header>
                <P>Dibutuhkan Frontend Developer</P>
                <P>Kualifikasi:</P>
                <ul>
                    <li>S1 Bidang Komputer dari STT-NF </li>
                    <li>Menguasai Javascript, CSS3, PHP</li>
                    <li>MySQL, PostareSQL</li>
                </ul>
                <p>30 November 2020, <a href="<?=base_url('index.php/lowongan/detail2')?>">Lihat Detail</a></p>
              <div class="bottom_slide">
                  <a class="slide1 active" href="lowongan1.html">1</a>
                  <a class="slide2" href="#!">2</a>
                  <a class="slide3" href="#!">3</a>
              </div>
         </div>
         </div>
    <!-- Lowongan 1 -->
      <!-- Sidebar -->
      <div class="sidebar">
        <h3>Berita Terkini:</h3>
        <a href="<?=base_url('index.php')?>"><p class="pberita">Seminar & Workshop - Materi Microservice</p></a>
        <a href="<?=base_url('index.php')?>"><p class="pberita">660.000 Pekerjaan Diprediksi Hilang Gegara Corona</p></a>
        <a href="<?=base_url('index.php')?>"><p class="pberita">Pekerjaan yang Banyak Dibutuhkan Usai Pandemi</p></a>
        <a href="<?=base_url('index.php')?>"><p class="pberita">Siap-siap! 85 Juta Pekerjaan Bakal Digantikan Robot</p></a>
      </div>
      <!-- /Sidebar -->
    </div>
