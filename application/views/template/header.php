<!DOCTYPE html>
<html lang="id">

<head>
  <title>Tugas web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url('https://1920x1080hdwallpapers.com/image/201602/abstract/4754/line-shine-background-yellow-blue.jpg')">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Al - Islam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url("home")?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('role') == 'Admin') { ?>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("home/about")?>">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Services</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("home/komen")?>">komen</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("auth/logout")?>">Logout </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("auth/delete")?>">Hapus Akun</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="cookies.php">Halaman Cookies</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("upload")?>">Upload Gambar</a>
               </li>
           <?php } else if ($this->session->userdata('role') == 'User') { ?>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("home/about")?>">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("home/komen")?>">Komen</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?=base_url("auth/logout")?>">Logout </a>
               </li>
           <?php } else { ?>
               <li class="nav-item">
                   <a class="nav-link" href="<?= base_url("auth/daftar") ?>">Daftar </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?= base_url("auth") ?>">Login </a>
               </li>


                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>