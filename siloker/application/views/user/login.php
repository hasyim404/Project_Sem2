
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

    <!-- Login -->

        <div class="container">
            <div class="card justify-content-center">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="login">LOGIN</h2>
                    </div>
                </div>
                <?php echo form_open('user/login');?>
                <div class="container">
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm">
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm">
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password">
                        </div>  
                    </div>
                </div>
                    <div class="form-group row btn1">
                        <div class="col text-center">
                            <button name="submit" type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <?php
                            if(isset($info)){
                                echo '<p>'.$info.'</p>';
                            }
                        ?>
                    </div>
                <?php echo form_close()?>
            </div>
        </div>
        
    <!-- /Login -->

