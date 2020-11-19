   <aside class="main-sidebar sidebar-abu-primary elevation-4">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Umah Lelawuh</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h5 class="d-block"><?php echo $this->session->userdata('nama');?></h5>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
           
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url();?>back-end/Dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url();?>back-end/c_toko" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Data Toko
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Pegination" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Data Admin
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url();?>back-end/c_user" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Data Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>pegination/barang" class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Data Makanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>back-end/c_kategori" class="nav-link">
              <i class="nav-icon fas fa-align-left"></i>
              <p>
                Data Kategori Makanan
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url();?>back-end/c_pesanan" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Data Pesanan
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url();?>back-end/login/login_admin/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out.
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>









