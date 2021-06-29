
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
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/about')?>">About</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-info tombol" type="button"><a href="<?=base_url('index.php/login')?>">Login</a></button>
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
        <li class="breadcrumb-item active" aria-current="page">Kelola Mitra</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center bg-white">
        <thead>
          <tr class="table-warning">
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Bidang Usaha</th>
            <th>Kontak Person</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat Web</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>PT ABC</td>
            <td>Ahmad Fikri</td>
            <td>Property</td>
            <td>fikri@gmail.com</td>
            <td>082298227422</td>
            <td>https://abc.com</td>
            <td><a href="#">Details</a></br>
            </a> <a href="#">Edit </a></br>
            <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <tr>
              <td>2</td>
              <td>PT ABC</td>
              <td>Ahmad Fikri</td>
              <td>Property</td>
              <td>fikri@gmail.com</td>
              <td>082298227422</td>
              <td>https://abc.com</td>
              <td><a href="#">Details</a></br>
              </a> <a href="#">Edit </a></br>
              <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>PT ABC</td>
              <td>Ahmad Fikri</td>
              <td>Property</td>
              <td>fikri@gmail.com</td>
              <td>082298227422</td>
              <td>https://abc.com</td>
              <td><a href="#">Details</a></br>
              </a> <a href="#">Edit </a></br>
              <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>PT ABC</td>
              <td>Ahmad Fikri</td>
              <td>Property</td>
              <td>fikri@gmail.com</td>
              <td>082298227422</td>
              <td>https://abc.com</td>
              <td><a href="#">Details</a></br>
              </a> <a href="#">Edit </a></br>
              <a href="#">Delete</a>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

    <!-- Keloker -->
