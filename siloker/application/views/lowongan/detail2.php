
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
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/lowongan')?>">Lowongan Baru</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lihat Detail</li>
        </ol>
      </nav>
    </div>  

    <div class="container cf">
        <div class="main">
          <div class="main3">
            <header>Lowongan PT XYZ</header><br>
                <P>PT ABC bergerak di bidang Property yang sedang berkembang, membutuhkan profesional IT yang dapat bekerja 
                   secar tim, inisiatif tinggi, fast learner dan berkepribadian baik.
                </P>
                <P>Kualifikasi yang kamu butuhkan.</P>
                <ul>
                    <li>Sarjana Ilmu Komputer</li>
                    <li>Menguasai bahasa pemrograman Java, CSS3, PHP</li>
                    <li>Menguasai Database MySQL, PostgreSQL</li>
                </ul>
            <div>Berminat silakan email kami di: hrd@devxbata.com</div><br>
                <p>10 Des 2020</p>
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