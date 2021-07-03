
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
              <a class="nav-link" href="<?=base_url('index.php/daftar_berita')?>">Daftar Mitra</a>
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

  <!-- isi -->
    <!-- Keloker -->


  <div class="container">
      <nav aria-label="breadcrumb" style="padding-top: 30px;">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin')?>">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Isi Berita</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <fieldset style="background-color: white;">
      <legend style="padding-left: 10px; font-size: 30px;"> Isi Berita </legend>
      
      <div class="container">

        <form  class="formm">
          <div class="form-group row">
              <label for="user" class="col-sm-3 col-form-label">Judul Berita</label>
              <div class="col-sm">
                <input type="text" class="form-control" id="username" required placeholder="">
              </div>
          </div>

            <div class="form-group row">
              <label for="text-area" class="col-sm-3 col-form-label">Deskripsi Berita / Isi Berita</label>
              <div class="col-sm">
                <textarea class="form-control" id="text-area" rows="3" required placeholder=""></textarea>
              </div>  
          </div>

          <div class="form-group row">
            <label for="number" class="col-3 col-form-label">Nama</label> 
            <div class="col-sm">
              <input id="number" name="number" type="text" class="form-control" required placeholder="">
            </div>
          </div>

          <div class="form-group row">
              <label for="number" class="col-3 col-form-label">Asal Kampus</label> 
              <div class="col-sm">
                <input id="number" name="number" type="text" class="form-control" required placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="number" class="col-3 col-form-label">Email</label> 
              <div class="col-sm">
                <input id="number" name="number" type="text" class="form-control" required placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label">No. HP/Telpon</label> 
              <div class="col-sm">
                <input id="email" name="email" type="email" class="form-control" required placeholder="">
              </div>
            </div> 

            <br>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Publish</button>
              <button class="btn btn-danger" type="reset">Batal</button>
            </div>
            <br>
        </form>

    </fieldset>
    
  </div>

    <!-- Keloker -->