<?php
require_once 'functions.php';

$id = $_SESSION['id'];
$result = query("SELECT * FROM admins WHERE id = $id")[0];
$nameFull = $result['username'];
?>

<nav class="navbar navbar-expand-lg text-bg-dark p-3 fixed-top" style="color:white;">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white;" href="#">E-Selera | CIAST<br> <?= $nameFull; ?> (ADMIN)</a>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">E-Selera | CIAST
          <a href="#" class="container-fluid d-flex justify-content-center" style="font-size: 3rem; color: white;"><i class="bi bi-person-circle "></i></a><br> <?= $nameFull; ?>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item nt-5">
            <a class="nav-link active" style="color: white;" aria-current="page" href="../admin/index.php"><i class="bi bi-person-lines-fill" style="font-size: 1rem; color: white;"></i> PELAJAR</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" style="color: white;" aria-current="page" href="../admin/menu2.php"><i class="bi bi-card-checklist" style="font-size: 1rem; color: white;"></i> JADUAL MAKANAN</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" style="color: white;" aria-current="page" href="../admin/pengguna.php"><i class="bi bi-person-square" style="font-size: 1rem; color: white;"></i> PENGGUNA</a>
          </li>
          <li class="nav-item nt-5">
            <a class="nav-link active" style="color: white;" aria-current="page" href="../admin/print2.php"><i class="bi bi-person-lines-fill" style="font-size: 1rem; color: white;"></i> BORANG ALAHAN</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" style="color: white;" aria-current="page" href="../admin/logout.php"><i class="bi bi-box-arrow-right" style="font-size: 1rem; color: white;"></i> LOG KELUAR</a>
          </li>
      </div>
    </div>
    <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon btn btn-light" ></span>
        </button>
      </div>
  </div>
</nav>
<br><br><br>