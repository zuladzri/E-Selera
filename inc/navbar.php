<?php 

require_once 'functions.php';

$id = $_SESSION['id'];
$result = query("SELECT * FROM users WHERE id = $id")[0];
$nameFull = $result['name_full'];
?>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Selera | CIAST <br> <?= $nameFull; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">E-Selera | CIAST
        <a href="#" class="container-fluid d-flex justify-content-center" style="font-size: 3rem; color: white;"><i class="bi bi-person-circle "></i></a><br> <?= $nameFull; ?>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../e-selera/dashboard.php"><i class="bi bi-house-door" style="font-size: 1rem; color: white;"></i> MENU UTAMA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../e-selera/menu.php"><i class="bi bi-file-spreadsheet" style="font-size: 1rem; color: white;"></i> JADUAL MAKAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../e-selera/hadir.php"><i class="bi bi-ui-checks" style="font-size: 1rem; color: white;"></i> KEHADIRAN</a>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../e-selera/print.php"><i class="bi bi-file-text" style="font-size: 1rem; color: white;"></i> BORANG ALAHAN</a>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../e-selera/logout.php"><i class="bi bi-box-arrow-right" style="font-size: 1rem; color: white;"></i> LOG KELUAR</a>
            
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>