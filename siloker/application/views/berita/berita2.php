
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('index.php')?>"><i class="fa fa-home" aria-hidden="true"></i>
              Home</a>
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
              <a class="nav-link" href="<?=base_url('index.php/berita')?>">Berita
              <span class="sr-only">(current)</span></a>
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
                        <a class="dropdown-item" href="<?=base_url('index.php/admin')?>">My Account</a>
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
    <!-- Berita -->
    <div class="container side">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bread justify-content-end bg-white">
          <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Berita</a></li>
          <li class="breadcrumb-item active" aria-current="page">Isi Berita</li>
          </ol>
      </nav>
    </div>

    <div class="container cf">
        <div class="main">
            <h3 class="beritabold text-center">660.000 Pekerjaan di Sektor Ini Diprediksi Hilang<br>Gegara Corona</h3>
            <p class="nama text-center">Zulkarnain - NurulFikri</p>
            <p class="jam text-center">Senin, 18 Januari 2021 13.00 WIB</p>
            <div class="row">
                <div class="col-md imgmid">
                <div class="container d-flex justify-content-center">
                    <img src="https://i.postimg.cc/bNFfMj4G/image2copy.jpg" alt="" >
                </div>
                <p>Pandemi COVID-19 telah menyebabkan hilangnya sekitar 660.000 pekerjaan di sektor perhotelan Inggris sepanjang tahun ini. Menurut Kepala Perhotelan Inggris Kate Nicholls, pada akhir 2019 sektor tersebut adalah pemberi kerja terbesar ketiga di Inggris.<br><br>
                  Dikutip dari BBC, Rabu (18/11/2020), saat itu, industri ini diperkirakan dapat menciptakan satu dari enam pekerjaan baru tahun 2020 ini, akan tetapi karena adanya pandemi COVID-19 datanya malah menunjukkan hasil yang berbeda.<br><br>                  
                  Tahun ini, sekitar 20% dari 3,2 juta pekerjaan di sektor tersebut malah hilang dan pendapatan sektor ini ikut turun 40% dibanding tahun lalu.<br><br>
                  Setiap tahun, sektor ini akan menikmati masa-masa emasnya setiap perayaan Halloween dan Malam Tahun Baru. Setiap masa-masa itu, sektor ini dapat meraup sepertiga pendapatan tahunannya dalam waktu singkat. Akan tetapi, tahun ini masa emas itu tidak bisa dinikmati. Sebaliknya, selama momen itu datang, sektor ini malah dalam perawatan intensif.<br><br>
                  Industri lainnya yang juga mengalami penderitaan serupa adalah sektor ritel. Pimpinan Konsorsium Ritel Inggris Helen Dickinson OBE mengatakan bahwa sektor ritel ini telah banyak kehilangan pekerjaan mulai dari peritel besar, kecil hingga toko-toko pakaian dan alas kaki lainnya.<br><br>
                  "Saya berbicara dengan satu bisnis kemarin, omset mereka turun dari US$ 200 juta menjadi US$ 160 juta," kata Helen.<br><br><br>
                  Refensi: <a href="https://finance.detik.com/berita-ekonomi-bisnis/d-5259704/660000-pekerjaan-di-sektor-ini-diprediksi-hilang-gegara-corona?_ga=2.187613231.60866282.1611207370-1308232895.1603605081">detikfinance.com</a>
                </p>
            </div>
        </div>
    </div>

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
