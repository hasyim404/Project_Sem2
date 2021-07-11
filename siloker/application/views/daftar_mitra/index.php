
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('index.php')?>"><i class="fa fa-home" aria-hidden="true"></i>
              Home<span class="sr-only">(current)</span></a>
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
        <?php
          if($this->session->has_userdata('username')){
            $username = $this->session->username;
          }else{
            $username = 'Login';
          }
        ?>
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-lg fa-user-circle"></i> <?=$username?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!">My Account</a>
                        <div class="dropdown-divider"></div>
                        <?php 
                          if($this->session->has_userdata('username')){ ?>
                        <?php 
                          } else{ ?>
                          <div class="container">
                            <a class="btn btn-primary dropdown-item active" href="<?=base_url('index.php/user/login')?>">Login</a>
                          </div>
                        <?php
                          }
                        ?>
                        <?php 
                          if($this->session->has_userdata('username')){ ?>
                          <div class="container">
                            <a class="btn btn-danger dropdown-item active" href="<?=base_url('index.php/user/logout')?>">Logout</a>
                          </div>
                        <?php 
                          } 
                        ?>
                    </div>
                </li>
            </ul>
        </div>
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
        <a href="<?=base_url('index.php/berita/berita1')?>"><p class="pberita">Seminar & Workshop - Materi Microservice</p></a>
        <a href="<?=base_url('index.php/berita/berita2')?>"><p class="pberita">660.000 Pekerjaan Diprediksi Hilang Gegara Corona</p></a>
        <a href="<?=base_url('index.php/berita/berita3')?>"><p class="pberita">Pekerjaan yang Banyak Dibutuhkan Usai Pandemi</p></a>
        <a href="<?=base_url('index.php/berita/berita4')?>"><p class="pberita">Siap-siap! 85 Juta Pekerjaan Bakal Digantikan Robot</p></a>
      </div>
      <!-- /Sidebar -->
    </div>