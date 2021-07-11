
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

  <!-- isi -->
    <div class="container side">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item active" aria-current="page">/ Home</li>
        </ol>
      </nav>
    </div>  

    <!-- Tentang -->
    <div class="container cf">
      <div class="main">
        <h1 class="f">Tentang SILOKERNF</h1>
        <p class="ptentang">SILOKERNF adalah singkatan dari Sistem Lowongan Kerja Nurul Fikri yang merupakan sebuah website untuk mencari lowongan pekerjaan di Nurul Fikri. 
          Website ini dibuat pada tahun 2021 tepatnya pada bulan Januari yang dibuat oleh empat orang, yang memiliki tujuan untuk menginformasikan beberapa informasi tentang posisi pekerjaan
          yang sedang dicari untuk diarahkan ke Nurul Fikri. Jenis lowongan pekerjaan pada umumnya bervariasi di bidang Teknologi Informasi tentunya, seperti Programmer, Desainer, Network enginners, dan masih banyak lagi.
        </p>
          <div class="row gambar">
            <div class="col-12">
              <div class="row">
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita1">Seminar & Workshop - Penerapan Materi Microservice</h3>
                  <img src="https://i.postimg.cc/76Vg1LVr/image1.png" alt="" class="float-left">
                  <p class="pberita">Ada kabar gembira nih, LPPM STT Nurul Fikri menyelenggarakan seminar dan workshop tentang Penerapan Materi Microservice</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita1')?>">Selengkapnya >></a>
                </div>
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita2">660.000 Pekerjaan Diprediksi Hilang Gegara Corona</h3>
                  <img src="https://i.postimg.cc/R0pTvmn2/image2.png" alt="" class="float-left">
                  <p class="pberita">Tahun ini, sekitar 20% dari 3,2 juta pekerjaan di sektor tersebut malah hilang dan pendapatan sektor ini ikut turun 40% dibanding tahun lalu.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita2')?>">Selengkapnya >></a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita3">Pekerjaan yang Banyak Dibutuhkan Usai Pandemi</h3>
                  <img src="https://i.postimg.cc/mksj5w9r/image3.png" alt="" class="float-left">
                  <p class="pberita">Akibat pandemi COVID-19 ini ada hal baru yang harus kita ikuti seperti pemanfaatan teknologi yang makin luas sehingga kita harus berubah.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita3')?>">Selengkapnya >></a>
                </div>
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita4">Siap-siap! 85 Juta Pekerjaan Bakal Digantikan Robot</h3>
                  <img src="https://i.postimg.cc/1R74Mt1k/image4.png" alt="" class="float-left">
                  <p class="pberita">Akibat pandemi COVID-19 telah mempercepat perubahan teknologi yang dapat menggantikan 85 juta jenis pekerjaan dalam 5 tahun.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita4')?>">Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    <!-- /Tentang -->

      <!-- Sidebar -->
      <div class="sidebar">
        <h3>Lowongan Terkini:</h3>
        <?php foreach ($data_loker as $loker): ?>
            <a href="<?= base_url('index.php/lowongan/detail/'.$loker->id)?>"><p class="pberita">
            <?= $loker->deskripsi_pekerjaan?> </p></a>
        <?php endforeach ?>
      </div>
      <!-- /Sidebar -->
    </div>
