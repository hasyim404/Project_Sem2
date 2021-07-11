
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('index.php')?>"><i class="fa fa-home" aria-hidden="true"></i>
              Home</span></a>
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
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('index.php/about')?>">About<span class="sr-only">(current)</a>
          </li>
        </ul>
        <?php
          if($this->session->has_userdata('username')){
            $username = $this->session->username;
          }else{
            $username = 'Login';
          }
        ?>
        <a class="nav-link" href="<?=base_url('index.php/user/login')?>" id="navbarDropdown">
          <i class="fas fa-lg fa-user-circle"></i> <?=$username?>
        </a>
        <?php
            if($this->session->has_userdata('username')){
        ?>
          <a href="<?=base_url('index.php/user/logout')?>" class="btn btn-outline-info tombol btn-md" role="button" aria-pressed="true">Logout</a>
        <?php
            }
        ?>
      </div>
  </nav>
  <!-- Navbar -->

  <!-- isi -->
  <div class="container bout">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bread justify-content-end bg-white">
      <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">About</li>
      </ol>
    </nav>
  </div>  

  <!-- isi -->
    <div class="container bg-white bout2">
        <h1 class="b">About our Team</h1>
        <div class="garis"></div>
        <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-lg profil">
                  <img src="https://i.postimg.cc/1RV8WFt0/ainunt.jpg" alt="">
                  <h3 class="nama1">Ainun Mardiyah</h3>
                  <a href="#"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com/ainun20235" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg profil">
                  <img src="https://i.postimg.cc/fb82ypQN/ichsan.jpg" alt="">
                  <h3 class="nama1">Ichsan Rustiansyach Yusuf</h3>
                  <a href="#"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com/Ichsan-desg" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a></div>
              </div>
              <div class="row">
                <div class="col-lg profil">
                  <img src="https://i.postimg.cc/wMnfQmwT/sulton.jpg" alt="">
                  <h3 class="nama1">Muhammad Fajar Sulthon Asnawi</h3>
                  <a href="https://facebook.com/profile.php?id=100037416893260&_rdc=1&_rdr" target="_blank"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="https://www.instagram.com/shulton_69/" target="_blank"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com/Sulton-69" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a>
                  </div>
                <div class="col-lg profil">
                  <img src="https://i.postimg.cc/7PnCzkQ0/mail.jpg" alt="">
                  <h3 class="nama1">Muhammad Ismail</h3>
                  <a href="https://facebook.com/ismailhere.7" target="_blank"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com/hasyim404" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div>
    </div>
