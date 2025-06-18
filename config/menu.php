<!-- active link -->
<?php
session_start();

$page = $_GET['page'];

// definisi link
if ($page == 'kajian') {
  $master1 = "menu-open";
  $master2 = "active";
  $kajian = "active";
}
if ($page == 'wilayah') {
  $master1 = "menu-open";
  $master2 = "active";
  $wilayah = "active";
}
if ($page == 'penduduk') {
  $master1 = "menu-open";
  $master2 = "active";
  $penduduk = "active";
}
if ($page == 'wisata') {
  $master1 = "menu-open";
  $master2 = "active";
  $wisata = "active";
}
if ($page == 'agenda') {
  $master1 = "menu-open";
  $master2 = "active";
  $agenda = "active";
}
if ($page == 'masuk') {
  $master1 = "menu-open";
  $master2 = "active";
  $masuk = "active";
}
if ($page == 'keluar') {
  $master1 = "menu-open";
  $master2 = "active";
  $keluar = "active";
}
if ($page == 'user') {
  $master1 = "menu-open";
  $master2 = "active";
  $user = "active";
}
?>

<aside class="main-sidebar sidebar-light-success elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link  text-center">
    <span class="brand-text font-weight-light text-success font-weight-bold">ANGGRA PERNANDO</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="img nagari/wisata/<?= $_SESSION['foto']; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION['username']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="dashboard1.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Data Master Dropdown -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Data Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?page=penduduk" class="nav-link <?= $penduduk; ?>">
                <i class="fas fa-graduation-cap"></i>
                <p>Data Pendidikan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=wilayah" class="nav-link <?= $wilayah; ?>">
                <i class="fas fa-map-marked-alt"></i>
                <p>Data Wilayah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=wisata" class="nav-link <?= $wisata; ?>">
                <i class="fas fa-mountain"></i>
                <p>Wisata Nagari</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=agenda" class="nav-link <?= $agenda; ?>">
                <i class="fas fa-bullhorn nav-icon"></i>
                <p>Agenda</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=keluar" class="nav-link <?= $keluar; ?>">
                <i class="fas fa-money-check-alt nav-icon"></i>
                <p>Kas Keluar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=masuk" class="nav-link <?= $masuk; ?>">
                <i class="fas fa-money-check-alt nav-icon"></i>
                <p>Kas Masuk</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="?page=sejarah" class="nav-link <?= $sejarah; ?>">
                <i class="fas fa-file-alt nav-icon"></i>
                <p>Sejarah Nagari</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="?page=user" class="nav-link <?= $user; ?>">
                <i class="fas fa-users"></i>
                <p>Penduduk</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Logout -->
        <li class="nav-item">
          <a href="logout.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->

</aside>