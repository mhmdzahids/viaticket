<?php
// Dapatkan nama file saat ini
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<style>
    .navbar-transparent{
        background-color: transparent;
        box-shadow: none;
    }
    .text-hover{
      color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
      border-radius: var(--bs-border-radius) !important;
    }
    
    .text-hover:hover{
      --bs-bg-opacity: 0.25;
      background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
      border-radius: var(--bs-border-radius) !important;
    }
    .active-navbar {
      --bs-bg-opacity: 0.25;
      background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
      border-radius: var(--bs-border-radius) !important;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="image/logo/logo-white-crop.png" alt="LOGO" width="130" height="auto">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav gap-2 text-center">
        <a class="nav-link text-hover <?php if($currentPage == 'pesawat.php') echo 'active-navbar'; ?>" aria-current="page" href="pesawat.php">Pesawat</a>
        <a class="nav-link text-hover <?php if($currentPage == 'bus.php') echo 'active-navbar'; ?>" href="bus.php">Bus</a>
        <a class="nav-link text-hover <?php if($currentPage == 'kereta.php') echo 'active-navbar'; ?>" href="kereta.php">Kereta Api</a>
        <a class="nav-link text-hover <?php if($currentPage == 'kapal.php') echo 'active-navbar'; ?>" href="kapal.php">Kapal</a>
      </div>
    </div>
    <div class="d-none d-sm-block">
      <a href="login.php" class="btn btn-light me-2">Masuk</a>
      <a href="register.php" class="btn btn-primary">Daftar</a>
    </div>
  </div>
</nav>