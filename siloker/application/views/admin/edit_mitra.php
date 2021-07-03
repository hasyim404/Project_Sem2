
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
          <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('index.php/isi_loker')?>">Isi Loker<span class="sr-only">(current)</span></a>
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
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/kelola_mitra')?>">Kelola Mitra </a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Mitra</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <fieldset style="background-color: white;">
      <div class="col-md-12">
        <h2 class="mt-3 mb-4">Edit Mitra</h2>
      </div>
    
      <div class="container">
        <?= form_open('admin/update_mitra') ?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                  <i class="far fa-building"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->nama ?>" id="nama" name="nama" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
              <textarea value="<?= $objmitra->alamat ?>" id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kontak" class="col-4 col-form-label">Kontak</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-id-badge"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->kontak ?>" id="kontak" name="kontak" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">No.Telpon</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->telpon ?>" id="telpon" name="telpon" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->email ?>" id="email" name="email" type="email" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="web" class="col-4 col-form-label">Website</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fab fa-blogger"></i>
                  </div>
                </div>
                <input value="<?= $objmitra->web ?>" id="web" name="web" placeholder="https://website.co.id" type="url" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="bidang_usaha_id">Bidang Usaha</label> 
            <div class="col-8">
              <select id="bidang_usaha_id" name="bidang_usaha_id" class="custom-select" required="required">
                <?php foreach ($data_bdusaha as $data): ?>
                  <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="sektor_usaha_id" class="col-4 col-form-label">Sektor Usaha</label> 
            <div class="col-8">
              <select id="sektor_usaha_id" name="sektor_usaha_id" class="custom-select" required="required">
                <?php foreach ($data_shusaha as $data): ?>
                  <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              <button name="reset" type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
          <input type="hidden" name="idedit" value="<?= $objmitra->id ?>">
        <?= form_close() ?>
    </fieldset>
    </div>
  </div>