  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Admin Uniba</li>
      <li class="nav-item">
        <a class="nav-link " href="home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url(); ?>mahasiswa">
          <i class="bi bi-menu-button-wide"></i><span>Mahasiswa</span>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url(); ?>Kirimemail">
          <i class="bi bi-journal-text"></i><span>Input Email</span>
        </a>    
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        </ul>
      </li><!-- End Forms Nav -->
    </ul>

  </aside>

