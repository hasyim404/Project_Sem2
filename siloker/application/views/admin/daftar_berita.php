
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
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/berita')?>">Berita</a>
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
    <!-- Keloker -->
  <div class="container">
      <nav aria-label="breadcrumb" style="padding-top: 30px;">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin')?>">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center bg-white">
        <thead>
          <tr class="table-info">
            <th>No</th>
            <th>Tanggal</th>
            <th>Daftar Berita</th>
            <th>Deskripsi Berita</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>11 Jan 2021</td>
            <td>Seminar & workshop-Penerapan Materi Microservice</td>
            <td><a href="<?=base_url('index.php')?>"><i class="fas fa-eye"></i></a></td>
            <td><a href="#!"><i class="fas fa-info-circle"></i></a></br>
            </a> <a href="#!"><i class="fas fa-edit"></i> </a></br>
            <a href="#!"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>18 Jan 2021</td>
            <td>660.000 Pekerjaan Diprediksi Hilang Gegara Corona</td>
            <td><a href="<?=base_url('index.php')?>"><i class="fas fa-eye"></i></a></td>
            <td><a href="#!"><i class="fas fa-info-circle"></i></a></br>
            </a> <a href="#!"><i class="fas fa-edit"></i> </a></br>
            <a href="#!"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>15 Des 2020</td>
            <td>Pekerjaan yang Banyak Dibutuhkan Usai Pandemi</td>
            <td><a href="<?=base_url('index.php')?>"><i class="fas fa-eye"></i></a></td>
            <td><a href="#!"><i class="fas fa-info-circle"></i></a></br>
            </a> <a href="#!"><i class="fas fa-edit"></i> </a></br>
            <a href="#!"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>15 Jan 2021</td>
            <td>Siap-siap! 85 Juta Pekerjaan Bakal Digantikan Robot</td>
            <td><a href="<?=base_url('index.php')?>"><i class="fas fa-eye"></i></a></td>
            <td><a href="#!"><i class="fas fa-info-circle"></i></a></br>
            </a> <a href="#!"><i class="fas fa-edit"></i> </a></br>
            <a href="#!"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    <!-- Keloker -->