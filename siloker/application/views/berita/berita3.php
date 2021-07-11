
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
          <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Berita</a></li>
          <li class="breadcrumb-item active" aria-current="page">Isi Berita</li>
          </ol>
      </nav>
    </div>

    <div class="container cf">
        <div class="main">
            <h3 class="beritabold text-center">Pekerjaan yang Banyak<br>Dibutuhkan Usai Pandemi, Apa Saja? </h3>
            <p class="nama text-center">Luthfi.S - NurulFikri</p>
            <p class="jam text-center">Selasa, 15 Desember 2020 13.00 WIB</p>
            <div class="row">
                <div class="col-md imgmid">
                <div class="container d-flex justify-content-center">
                    <img src="https://i.postimg.cc/7LRps1Rp/image3copy.jpg" alt="" >
                </div>
                <p>Badan Perencanaan dan Pengembangan (Barenbang) Kementerian Ketenagakerjaan menyampaikan ada 10 jenis pekerjaan yang bakal banyak dibutuhkan pasca pandemi COVID-19 berlalu nanti. Apa saja?<br><br>
                  "Tentunya akibat dari pandemi COVID-19 ini ada hal baru yang harus kita ikuti seperti pemanfaatan teknologi yang makin luas sehingga cara kerja kita harus berubah. Demikian juga bila kita kaitkan dengan jenis pekerjaan yang paling dibutuhkan pasca pandemi COVID-19. Dari hasil survei ditemukan 10 jenis pekerjaan yang paling dibutuhkan," ujar Kepala Barenbang Bambang Satrio Lelono dalam webinar bertajuk Analisis Dampak Pandemi COVID-19 terhadap Perluasan Kesempatan Kerja, Selasa (24/11/2020).<br><br>
                  Adapun 10 jenis pekerjaan yang dimaksud terdiri dari profesional penjualan, pemasaran dan hubungan masyarakat (humas) berada di urutan teratas sebanyak 18,7%, pekerja penjualan lainnya sebanyak 13,5%, teknisi operasi TIK dan pendukung pengguna sebanyak 4,4%, pengemudi mobil, van, dan sepeda motor sebanyak 3,8%, tenaga perkantoran umum sebanyak 3,8%, operator mesin stasioner lainnya sebanyak 3,2%, buruh pertambangan dan konstruksi sebanyak 3,1%, pekerja instalasi dan reparasi peralatan listrik sebanyak 2,8%, profesional administrasi sebanyak 2,4%, dan pekerja kasar lainnya 2,3%.<br><br>
                  Dari segi keterampilannya, keterampilan teknologi menjadi yang paling dibutuhkan setelah pandemi berakhir hingga 26,9%, keterampilan fisik dan manual sebanyak 6,2%, keterampilan emosional dan sosial 4,1%, keterampilan kognitif lanjutan 1,9%, keterampilan kognitif dasar 0,9% dan seluruh jenis keterampilan di atas sebanyak 42,4%. <br><br>
                  Adapun survei yang dilakukan oleh Barenbang ini mengikutsertakan sebanyak 1.105 perusahaan dari 17 sektor ekonomi. Metode survei yang digunakan adalah pengambilan data secara daring dan telepon serta metode sampling dengan probability MoE 3,01%. Ditambah basis data Wajib Lapor Ketenagakerjaan Perusahaan (WLKP). Survei ini dilaksanakan sepanjang bulan Agustus 2020 lalu.<br><br><br>
                  Refensi: <a href="https://finance.detik.com/berita-ekonomi-bisnis/d-5267556/10-pekerjaan-yang-banyak-dibutuhkan-usai-pandemi-apa-saja?_ga=2.201189545.60866282.1611207370-1308232895.1603605081">detikfinance.com</a>
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