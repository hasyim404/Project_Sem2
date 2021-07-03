
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
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('index.php/daftar_mitra')?>">Daftar Mitra<span class="sr-only">(current)</span></a>
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
  <div class="container side">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bread justify-content-end bg-white">
      <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Mitra</li>
      </ol>
    </nav>
  </div>  
  
    <!-- Lowongan 1 -->
    <div class="container cf">
        <div class="main">
          <div class="main3">
              <br><a class="pojok_kiri" href="<?=base_url('index.php/daftar_mitra/form_mitra')?>">Daftar Menjadi Mitra</a>
            <div class="Judul">Mitra Perusahaan Kami</div>
            <div class="isi">
            <header class="heead">PT ABC</header>
                <P>bergerak di bidang Property yang sedang berkembang, membutuhkan profesional IT yang dapat bekerja 
                   secar tim, inisiatif tinggi, fast learner dan berkepribadian baik.
                </P>
            <header class="heead">PT XYZ</header>
                <P>bergerak di bidang Property yang sedang berkembang, membutuhkan profesional IT yang dapat bekerja 
                   secar tim, inisiatif tinggi, fast learner dan berkepribadian baik.
                </P>
            <header class="heead">PT EFO</header>
                <P>bergerak di bidang Property yang sedang berkembang, membutuhkan profesional IT yang dapat bekerja 
                    secar tim, inisiatif tinggi, fast learner dan berkepribadian baik.
                </P>
            </div><br>
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