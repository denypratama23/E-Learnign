  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar " style="background:rgb(2, 29, 59)">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-code"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Learn </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin') ?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          User
      </div>
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin') ?>">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Profile Pengguna</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/upload') ?>">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Upload Vidio</span></a>
      </li>
      <hr class="sidebar-divider">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/upmateri') ?>">
              <i class="fas fa-fw fa-table"></i>
              <span>Upload Materi</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/upsoal') ?>">
              <i class="fas fa-fw fa-table"></i>
              <span>Buat Soal</span></a>
      </li>
      <hr class="sidebar-divider">
      <!-- Divider -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
  <!-- End of Sidebar -->