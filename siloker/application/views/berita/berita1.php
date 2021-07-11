
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
            <h3 class="beritabold text-center">Seminar & Workshop<br>Penerapan Materi Microservice</h3>
            <p class="nama text-center">Fajar Siddiq - NurulFikri</p>
            <p class="jam text-center">Senin, 11 Januari 2021 13.00 WIB</p>
            <div class="row">
                <div class="col-md imgmid">
                <div class="container d-flex justify-content-center">
                    <img src="https://i.postimg.cc/76Vg1LVr/image1.png" alt="" >
                </div>
                <p>🎉🎉🎉Proudly present🎉🎉🎉<br>Seminar & Workshop LPPM STT Terpadu Nurul Fikri - Penerapan Materi Microservice<br>Ada kabar gembira nih, kali ini LPPM STT Nurul Fikri menyelenggarakan seminar dan workshop tentang Penerapan Materi Microservice.<br><br>Diisi oleh pemateri keren :<br>
                    🧓 Sirojul Munir, S.Si., M.Kom.<br>
                    Kepala LPPM STT Terpadu Nurul Fikri<br><br>Acara akan dilaksanakan pada :<br>
                    📆 Kamis, 28 Januari 2021<br>
                    ⏰ 16.00 - 17.30 WIB<br>
                    🏫 Via Online (Zoom)<br>
                    ‎‼️ Free ‼️<br><br>Yuk segera daftarkan diri kalian :<br>📨 <a href="http://s.id/WorkshopLPPM">http://s.id/WorkshopLPPM</a><br>untuk umum dan peserta terbatas.<br><br>📱 CP : <a href="https://wa.me/6285229099205">085229099205 (Syaiful)</a><br>✊✊ So come and join with us✊✊ <br><br>
                    #LPPMSTTNF<br>
                    #NoveltyInovation&Value<br>
                    #semangatberkaryadengannoveltydaninovasi<br>
                    #lppm2021</p>
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